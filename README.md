# MyMI Media Repo

This repository stores marketing campaign assets and automation modules for the MyMI Wallet ecosystem.

## Modules

### MarketingCampaigns
- `MarketingCampaignService.php` pulls summaries from `bf_marketing_scraper`, formats them and stores entries in `bf_marketing_campaigns`.
- `CampaignAutomationController.php` exposes endpoints for auto scheduling, triggering livestream events and generating campaign media.
- Views under `MarketingCampaigns/Views` render upcoming campaigns with manual launch controls.

### LivestreamAutomation
- `LiveStreamService.php` schedules weekend livestreams and builds scripts from campaign summaries.
- `LivestreamController.php` provides routes for scheduling streams, generating scripts and serving OBS overlays.
- Views under `LivestreamAutomation/Views` show dashboard information and simple overlay HTML snippets.

SQL templates for required tables can be found in `docs/sql_templates.sql`. Example cron entries are located in `docs/CRON_EXAMPLES.md`.
