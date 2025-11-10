<div class="container">
    <h1><?= $data['judul'] ?? 'Edit User'; ?></h1>

    <?php $user = $data['user'] ?? []; ?>
    <form action="<?= BASEURL . 'user/update/' . ($user['id'] ?? '') ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?? '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?? '' ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
