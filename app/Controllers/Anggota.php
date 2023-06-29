<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use Config\App;

class Anggota extends BaseController
{
    protected $anggotaModel;
    protected $helpers = ['form', 'auth'];
    protected $db, $builder, $pager;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->anggotaModel = new \App\Models\AnggotaModel();
        $this->builder = $this->db->table('anggota');
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $anggota = $this->anggotaModel->search($keyword);
        } else {
            $anggota = $this->anggotaModel;
        }

        $data = [
            'title' => 'Anggota | Wilayah 3',
            // 'anggota' => $this->anggotaModel->findAll(),
            'anggota' => $anggota->paginate(5),
            'pager' => $this->anggotaModel->pager,
        ];
        return view('anggota/index', $data);
    }

    public function tambah()
    {
        session();
        $data = [
            'title' => 'Form Tambah Anggota',
        ];

        return view('anggota/tambah', $data);
    }

    public function tambahAnggota()
    {


        $validation = \Config\Services::validation();
        if (!$this->validate([
            'nama' => 'required|is_unique[anggota.nama]|alpha_numeric_space',
            'alamat' => 'string'
        ])) {
            return redirect()->back()->with('validation', $validation);
        }

        if ($this->request->getVar('jabatan') == null) {
            $jabatan = 'Anggota';
        } else {
            $jabatan = $this->request->getVar('jabatan');
        }


        $data = [
            'nama' => $this->request->getVar('nama', FILTER_SANITIZE_SPECIAL_CHARS),
            'lingkungan' => $this->request->getVar('lingkungan'),
            'status' => $this->request->getVar('status'),
            'jabatan' => $jabatan,
            'alamat' => $this->request->getVar('alamat', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        $this->anggotaModel->insert($data);
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan!');
        return redirect()->to(base_url('anggota'));
    }

    public function delete($id)
    {
        $this->anggotaModel->delete(['id' => $id]);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->back();
    }

    public function detail($id)
    {

        $query = $this->builder->where('id', $id);

        $data = [
            'title' => 'Detail Anggota',
            'anggota' => $query->get()->getRow(0, 'array'),
        ];

        return view('anggota/detail', $data);
    }

    public function edit($id)
    {
        $query = $this->builder->where('id', $id);
        $data = [
            'title' => 'Edit Anggota',
            'anggota' => $query->get()->getRowArray(),
        ];



        return view('anggota/edit', $data);
    }
    public function update($id)
    {

        if ($this->request->getVar('jabatan') == null) {
            $jabatan = 'Anggota';
        } else {
            $jabatan = $this->request->getVar('jabatan');
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'lingkungan' => $this->request->getVar('lingkungan'),
            'status' => $this->request->getVar('status'),
            'jabatan' => $jabatan,
            'alamat' => $this->request->getVar('alamat'),
        ];


        $this->builder->update($data, ['id' => $id]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
        return redirect()->to(base_url('anggota'));
    }
}
