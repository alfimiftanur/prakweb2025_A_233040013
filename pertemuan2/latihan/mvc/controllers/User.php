<?php

class User extends Controller {
    public function index() {
        $data['judul'] ='Data Pengguna';
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('list', $data);
    }

    public function detail($id) {
        $data['judul'] ='Detail Pengguna';
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('detail', $data);
    }
}