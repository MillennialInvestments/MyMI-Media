<h1>Pending Campaign Files</h1>
<?php if (session('message')): ?>
<p><?= session('message') ?></p>
<?php endif; ?>
<table>
    <thead>
        <tr>
            <th>Slug</th>
            <th>Path</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($files as $file): ?>
        <tr>
            <td><?= esc($file->slug) ?></td>
            <td><?= esc($file->path) ?></td>
            <td>
                <a href="<?= site_url('admin/campaigns/approve/'.$file->id) ?>">Approve</a>
                <a href="<?= site_url('admin/campaigns/reject/'.$file->id) ?>">Reject</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
