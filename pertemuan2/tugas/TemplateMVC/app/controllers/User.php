<?php

class User extends Controller
{
    public function index()
    {
        $data['judul'] = "Data User";
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('templates/header', $data);
        $this->view('user/list', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = "Tambah User";
        $this->view('templates/header', $data);
        $this->view('user/tambah_user', $data);
        $this->view('templates/footer');
    }

    public function store()
    {
        if ($this->model('User_model')->addUser($_POST) > 0) {
            header('Location: ' . BASEURL . 'user');
            exit;
        } else {
            echo "Gagal menambahkan user.";
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Detail User";
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = "Edit User";
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/edit_user', $data);
        $this->view('templates/footer');
    }

    public function update($id)
    {
        if ($this->model('User_model')->updateUser($id, $_POST) > 0) {
            header('Location: ' . BASEURL . 'user');
            exit;
        } else {
            echo "Gagal memperbarui user.";
        }
    }

    public function delete($id)
    {
        if ($this->model('User_model')->deleteUser($id) > 0) {
            header('Location: ' . BASEURL . 'user');
            exit;
        } else {
            echo "Gagal menghapus user.";
        }
    }
}