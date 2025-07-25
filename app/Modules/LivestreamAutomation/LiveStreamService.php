<?php
namespace Modules\LivestreamAutomation;

use CodeIgniter\Database\ConnectionInterface;
use DateTime;

/**
 * Service for livestream automation.
 */
class LiveStreamService
{
    /** @var ConnectionInterface */
    protected $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }

    /**
     * Schedule a weekend livestream entry.
     */
    public function scheduleWeekendStream(): void
    {
        $nextSaturday = new DateTime('next Saturday 09:00');
        $data = ['scheduled_at' => $nextSaturday->format('Y-m-d H:i:s')];
        $this->db->table('bf_marketing_streams')->insert($data);
    }

    /**
     * Generate a livestream script using marketing summary content.
     */
    public function generateScript(int $streamId): string
    {
        $stream = $this->db->table('bf_marketing_streams')->where('id', $streamId)->get()->getRowArray();
        if (!$stream) {
            return '';
        }
        // Placeholder for script formatting
        return "Intro...\n" . ($stream['summary'] ?? '') . "\nOutro...";
    }
}
