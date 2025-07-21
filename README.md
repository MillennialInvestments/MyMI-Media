# MyMI Media Repo

This repository manages marketing campaign files used by the MyMI Wallet system.

## Symlink Setup

To allow MyMI Wallet to access campaign files, create a symlink from the
`writable/MyMI-Media/Campaigns/` directory in this repo to the server directory
`/var/www/MyMI-Media/Campaigns`:

```bash
scripts/setup_symlink.sh
```

The script creates the target directory and links it to this repo's writable
folder so that new campaign content can be scanned automatically.

## Approval Workflow

1. Run the `campaigns:scan` command (scheduled daily via cron) to import new
   campaign files into the `campaign_files` table.
2. Visit `/admin/campaigns` to review pending files.
3. Approve or reject each file. Approved files are sent to a Zapier webhook,
   which handles email distribution or blog posting.

Configure the Zapier webhook URL in your environment file under
`zapier.webhook`.
