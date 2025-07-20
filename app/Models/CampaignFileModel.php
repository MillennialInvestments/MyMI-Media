<?php
namespace App\Models;

use CodeIgniter\Model;

class CampaignFileModel extends Model
{
    protected $table      = 'campaign_files';
    protected $primaryKey = 'id';
    protected $allowedFields = ['slug', 'path', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $returnType    = \App\Entities\CampaignFile::class;
}
