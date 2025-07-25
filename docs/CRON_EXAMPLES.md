# Cron Setup Examples

```
# Friday 4 PM: generate weekend marketing wrap-up
0 16 * * 5 /usr/bin/php /path/to/project/public/index.php autoScheduleCampaigns

# Saturday 9 AM: schedule weekend livestream
0 9 * * 6 /usr/bin/php /path/to/project/public/index.php scheduleWeekendStream
```
