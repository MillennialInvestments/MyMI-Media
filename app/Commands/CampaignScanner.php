<?php
namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\CampaignFileModel;

class CampaignScanner extends BaseCommand
{
    protected $group       = 'Campaigns';
    protected $name        = 'campaigns:scan';
    protected $description = 'Scans campaign directories and imports files.';

    public function run(array $params)
    {
        $path = '/var/www/MyMI-Media/Campaigns';
        if (!is_dir($path)) {
            CLI::error("Campaign directory not found: {$path}");
            return;
        }

        $model = new CampaignFileModel();
        $dirs  = glob($path . '/*', GLOB_ONLYDIR);

        foreach ($dirs as $dir) {
            $slug = basename($dir);
            $files = ['blog-draft', 'email-drip'];
            foreach ($files as $file) {
                $filePath = "$dir/{$file}.txt";
                if (is_file($filePath)) {
                    $existing = $model->where('slug', $slug)->where('path', $filePath)->first();
                    if (!$existing) {
                        $model->insert([
                            'slug'  => $slug,
                            'path'  => $filePath,
                            'status'=> 'pending',
                        ]);
                        CLI::write("Imported {$filePath}");
                    }
                }
            }
        }
    }
}
