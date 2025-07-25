<?php
namespace Modules\MarketingCampaigns;

use CodeIgniter\Database\ConnectionInterface;
use DateTime;

/**
 * Service class to manage marketing campaigns.
 */
class MarketingCampaignService
{
    /** @var ConnectionInterface */
    protected $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }

    /**
     * Pull summaries from bf_marketing_scraper and create campaign records.
     */
    public function pullAndFormatSummaries(): void
    {
        // Grab latest summaries
        $summaries = $this->db->table('bf_marketing_scraper')->get()->getResultArray();
        foreach ($summaries as $summary) {
            $this->createCampaign($summary);
        }
    }

    /**
     * Create a campaign entry and schedule distribution based on the day of week.
     */
    public function createCampaign(array $summary): void
    {
        $data = [
            'headline' => $summary['headline'] ?? '',
            'content'  => $summary['content'] ?? '',
            'scheduled_at' => $this->nextSchedule(),
        ];
        $this->db->table('bf_marketing_campaigns')->insert($data);
    }

    /**
     * Determine when to schedule the campaign.
     * Weekdays => daily; weekends => wrapup.
     */
    protected function nextSchedule(): string
    {
        $now = new DateTime('now');
        $dow = (int) $now->format('N');
        // 6 = Saturday, 7 = Sunday
        if ($dow >= 6) {
            return $now->modify('next Monday 09:00')->format('Y-m-d H:i:s');
        }
        return $now->modify('tomorrow 09:00')->format('Y-m-d H:i:s');
    }

    /**
     * Generate campaign media assets (image/email/social posts).
     */
    public function generateCampaignMedia(int $campaignId): void
    {
        // Placeholder for integration with image generator and email templates
        // Fetch campaign
        $campaign = $this->db->table('bf_marketing_campaigns')->where('id', $campaignId)->get()->getRowArray();
        if (!$campaign) {
            return;
        }
        // TODO: implement actual media generation logic
    }
}
