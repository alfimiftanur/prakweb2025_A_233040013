<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0"><?= $data['judul'] ?? 'Users'; ?></h1>
        <a href="<?= BASEURL . 'user/create' ?>" class="btn btn-success">Tambah User</a>
    </div>

    <?php if (!empty($data['users'])) : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['users'] as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['nama'] ?? $user['name'] ?? '') ?></td>
                        <td><?= htmlspecialchars($user['email'] ?? '') ?></td>
                        <td>
                            <a href="<?= BASEURL . 'user/detail/' . ($user['id'] ?? '') ?>" class="btn btn-sm btn-info">Detail</a>
                            <a href="<?= BASEURL . 'user/edit/' . ($user['id'] ?? '') ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= BASEURL . 'user/delete/' . ($user['id'] ?? '') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus user ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Tidak ada data user.</p>
    <?php endif; ?>
</div>
