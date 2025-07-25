-- Template inserts for bf_marketing_scraper
INSERT INTO bf_marketing_scraper (headline, content, created_at)
VALUES ('Sample headline', 'Summary content here', NOW());

-- Template inserts for bf_marketing_campaigns
INSERT INTO bf_marketing_campaigns (headline, content, scheduled_at, auto)
VALUES ('Sample headline', 'Formatted content', NOW(), 1);

-- Template inserts for bf_marketing_streams
INSERT INTO bf_marketing_streams (title, summary, scheduled_at)
VALUES ('Weekend Wrapup', 'Livestream summary goes here', NOW());
