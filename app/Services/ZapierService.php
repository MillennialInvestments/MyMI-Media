<?php
namespace App\Services;

use CodeIgniter\HTTP\CURLRequest;
use Config\Services;

class ZapierService
{
    protected $webhookUrl;

    public function __construct()
    {
        $this->webhookUrl = getenv('zapier.webhook');
    }

    public function sendCampaign($file)
    {
        $curl = Services::curlrequest();
        $payload = [
            'slug' => $file->slug,
            'path' => $file->path,
            'content' => file_exists($file->path) ? file_get_contents($file->path) : '',
        ];
        $curl->post($this->webhookUrl, $payload);
    }
}
