<div class="container">
    <h1><?= $data['judul'] ?? 'Detail User'; ?></h1>

    <?php if (!empty($data['user'])) : ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> <?= $data['user']['id'] ?? '' ?></li>
            <li class="list-group-item"><strong>Nama:</strong> <?= $data['user']['nama'] ?? $data['user']['name'] ?? '' ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?= $data['user']['email'] ?? '' ?></li>
        </ul>
    <?php else : ?>
        <p>Data user tidak ditemukan.</p>
    <?php endif; ?>
</div>
