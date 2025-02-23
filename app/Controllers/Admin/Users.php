<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        // Menampilkan data user

        return view('admin/users/users');
    }

    public function add(){
        // Tambah Users

        return view('admin/users/add');
    }

    public function simpan(){
        // menyimpan users
    }

    public function hapus(){
        // menghapus user
    }

    public function edit(){
        // edit Users
    }

    public function update(){
        // mengupdate Users
    }
}