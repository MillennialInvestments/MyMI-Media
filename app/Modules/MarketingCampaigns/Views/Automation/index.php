<h1>Upcoming Marketing Campaigns</h1>
<table>
    <thead>
    <tr>
        <th>Headline</th>
        <th>Scheduled At</th>
        <th>Auto Distribute</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($campaigns as $campaign): ?>
        <tr>
            <td><?= esc($campaign['headline']) ?></td>
            <td><?= esc($campaign['scheduled_at']) ?></td>
            <td>
                <input type="checkbox" <?= $campaign['auto'] ? 'checked' : '' ?> />
            </td>
            <td>
                <a href="/generateCampaignMedia/<?= $campaign['id'] ?>">Generate Media</a>
                <button>Launch Now</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
