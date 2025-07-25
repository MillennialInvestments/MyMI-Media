<h1>Livestream Dashboard</h1>
<section>
    <h2>Upcoming Stream</h2>
    <p>Title: <?= esc($stream['title'] ?? 'N/A') ?></p>
    <p>Summary: <?= esc($stream['summary'] ?? '') ?></p>
    <p>Links:</p>
    <ul>
        <li>YouTube: <a href="<?= esc($stream['youtube_link'] ?? '#') ?>">Watch</a></li>
        <li>Twitch: <a href="<?= esc($stream['twitch_link'] ?? '#') ?>">Watch</a></li>
        <li>Discord: <a href="<?= esc($stream['discord_link'] ?? '#') ?>">Join</a></li>
    </ul>
</section>
<section>
    <h2>Script Preview</h2>
    <pre><?= esc($script ?? '') ?></pre>
</section>
<section>
    <h2>Stream Overlay Controls</h2>
    <a href="/streamOverlay/headline" target="_blank">Headline Overlay</a>
    <a href="/streamOverlay/lower_third" target="_blank">Lower Third</a>
</section>
