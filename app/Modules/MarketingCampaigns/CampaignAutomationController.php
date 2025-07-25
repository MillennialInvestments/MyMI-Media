<?php
namespace Modules\MarketingCampaigns;

use CodeIgniter\RESTful\ResourceController;

class CampaignAutomationController extends ResourceController
{
    /** @var MarketingCampaignService */
    protected $service;

    public function __construct()
    {
        $this->service = service('marketingCampaignService');
    }

    /**
     * GET /autoScheduleCampaigns
     */
    public function autoScheduleCampaigns()
    {
        $this->service->pullAndFormatSummaries();
        return $this->respond(['status' => 'scheduled']);
    }

    /**
     * POST /triggerLiveStreamEvent
     */
    public function triggerLiveStreamEvent()
    {
        // Placeholder: link to livestream automation
        return $this->respond(['status' => 'livestream triggered']);
    }

    /**
     * POST /generateCampaignMedia/{id}
     */
    public function generateCampaignMedia($id)
    {
        $this->service->generateCampaignMedia((int) $id);
        return $this->respond(['status' => 'media generated']);
    }
}
