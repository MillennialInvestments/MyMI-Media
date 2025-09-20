# Codex: GitHub Content-Only PR Workflow (Safe for Production)

**Goal:** Add the Q4 2025 Welcome Series content as *new files only* to avoid touching application code.

## Target repo
- Preferred: `MyMIWallet/MyMI-Media` (main branch), path: `campaigns/2025-Q4/welcome-series/`
- Alternate (if needed): new repo `MyMI-Content`

## Steps (one PR)
1) Create the path (do not modify existing files):
   - `campaigns/2025-Q4/welcome-series/`

2) Copy the entire contents of the export into that path:
   - `README.md`
   - `calendar/100_day_schedule.csv`
   - `posts/**`
   - `video_scripts/**`
   - `voiceovers/**`
   - `slides_outlines/**`
   - `holidays/**`
   - `codex_instructions/INSTRUCTIONS.md` (this file)

3) Commit message:
   - `feat(marketing): add Q4 2025 Welcome Series content (100-day calendar + assets)`

4) Labels:
   - `content-only`, `safe-to-merge`, `no-code-change`

5) PR description:
   - Summary of structure & how to import into MyMIMarketing later.
   - Link to internal dashboard task for wiring DB import.

## Future wiring (optional):
- Once ready, app cron can import CSV + files into `bf_marketing_generated_posts` and `bf_marketing_scraper`.
- Keep originals here as the canonical content source.

### Safety
- Do **not** change `/app` or `/public` files.
- Do **not** touch CI4 routes/controllers.
- Only new files under `campaigns/2025-Q4/welcome-series/`.