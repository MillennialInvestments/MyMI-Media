<?php
namespace App\Controllers;

use App\Models\CampaignFileModel;
use App\Services\ZapierService;
use CodeIgniter\HTTP\ResponseInterface;

class CampaignReviewController extends BaseController
{
    public function index()
    {
        $model = new CampaignFileModel();
        $data['files'] = $model->where('status', 'pending')->findAll();
        return view('campaigns/pending', $data);
    }

    public function approve($id)
    {
        $model = new CampaignFileModel();
        $file  = $model->find($id);
        if (!$file) {
            return redirect()->back()->with('error', 'File not found');
        }
        $model->update($id, ['status' => 'approved']);

        $zapier = new ZapierService();
        $zapier->sendCampaign($file);
        return redirect()->back()->with('message', 'File approved');
    }

    public function reject($id)
    {
        $model = new CampaignFileModel();
        if ($model->find($id)) {
            $model->update($id, ['status' => 'rejected']);
        }
        return redirect()->back()->with('message', 'File rejected');
    }
}
