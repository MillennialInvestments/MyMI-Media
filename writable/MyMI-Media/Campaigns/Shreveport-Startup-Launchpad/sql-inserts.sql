INSERT INTO `bf_marketing_campaigns`
(`sched_id`, `status`, `beta`, `config_mode`, `form_mode`, `escalated`, `type`, `audience_type`, `stage`, `is_draft`, `name`, `description`, `overall_campaign_description`, `created_on`, `created_by`)
VALUES
('shreveport_launchpad_2025', 'active', 0, 'standard', 'form_lead', 0, 'fundraising', 'shreveport_youth_minority', 'awareness', 0, 'Shreveport Startup Launchpad', 'Empowering youth and minority entrepreneurs in Shreveport, LA to raise capital with MyMI Funding Machine', 'Community-led funding via SEC Reg CF pathways for underserved local businesses in Northwest Louisiana', NOW(), 1);

INSERT INTO `bf_marketing_scraper`
(`source_id`, `title`, `summary`, `keywords`, `platform`, `score`, `created_on`)
VALUES
('shreveport_launchpad_2025', 'Shreveport Entrepreneurs: Launch & Raise Funding', 'MyMI Wallet introduces a local funding platform where Shreveport-based businesses tokenize revenue to attract community investors.', 'Shreveport,minority owned,youth entrepreneurs,funding,Reg CF', 'facebook', 9.2, NOW());

INSERT INTO `bf_marketing_posts`
(`campaign_id`, `platform`, `title`, `message`, `cta_url`, `created_on`)
VALUES
(LAST_INSERT_ID(), 'facebook', '🚀 Shreveport Startups: Get Funded Locally', 'Youth or minority entrepreneur? Raise capital through our SEC-compliant platform and grow with community support. #Shreveport #StartupLaunchpad', 'https://mymiwallet.com/business-owners/start', NOW()),
(LAST_INSERT_ID(), 'linkedin', 'Shreveport Startup Launchpad: Funding for Local Entrepreneurs', 'Join the MyMI Funding Machine to tokenize your business and attract investors across Northwest Louisiana.', 'https://mymiwallet.com/business-owners/start', NOW()),
(LAST_INSERT_ID(), 'twitter', 'Shreveport founders: Apply now for the Startup Launchpad and secure community funding!', 'https://mymiwallet.com/business-owners/start', NOW());
