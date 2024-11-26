<?php
class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat helper URL
        $this->load->helper('url');
        // Load model Mahasiswa_model
        $this->load->model('Mahasiswa_model');
    }

    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();  // Ambil data pengguna dari model

        // Muat tampilan dan kirim data
        $this->load->view('mahasiswa_list', $data);
    }

    // Menambahkan mahasiswa baru
    public function create() {
        // print_r('test');die();
        $this->load->view('create_mahasiswa');
    }

    public function store() {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'no_tlp' => $this->input->post('no_tlp')
        );
        $nik = $this->input->post('nik');
        $cek = $this->Mahasiswa_model->cek_nik($nik);
        if($cek == 1){
            echo "<script>alert('NIK sudah terdaftar, Harap input kembali NIK dengan benar.')</script>";
            redirect('Mahasiswa/create', 'refresh');
        }else{
            $this->Mahasiswa_model->insert_mahasiswa($data);
            echo "<script>alert('Data Mahasiswa berhasil tersimpan.')</script>";
            redirect('Mahasiswa', 'refresh');
        }
        // redirect('Mahasiswa');
    }

    // Mengedit data mahasiswa
    public function edit($nik) {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa_edit($nik);
        $this->load->view('edit_mahasiswa', $data);
    }

    public function update($nik) {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'no_tlp' => $this->input->post('no_tlp')
        );
        $this->Mahasiswa_model->update_mahasiswa($nik, $data);
        redirect('Mahasiswa');
    }

    // Menghapus data mahasiswa
    public function delete($nik) {
        $this->Mahasiswa_model->delete_mahasiswa($nik);
        redirect('Mahasiswa');
    }

}
?>
