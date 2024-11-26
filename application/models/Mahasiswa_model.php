<?php
class Mahasiswa_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_mahasiswa() {
        $query = $this->db->get('mahasiswa');  // Ambil semua data dari tabel 'mahasiswa'
        return $query->result();  // Kembalikan hasil sebagai array objek
    }

    public function get_mahasiswa_edit($nik) {
        $query = $this->db->get_where('mahasiswa', array('nik' => $nik));
        return $query->row();
    }

    // Menyimpan data user baru
    public function insert_mahasiswa($data) {
        return $this->db->insert('mahasiswa', $data);
    }

    // Mengambil data user berdasarkan ID
    public function get_user($nik) {
        $query = $this->db->get_where('mahasiswa', array('nik' => $nik));
        return $query->row();
    }

    // Mengupdate data user berdasarkan ID
    public function update_mahasiswa($nik, $data) {
        $this->db->where('nik', $nik);
        return $this->db->update('mahasiswa', $data);
    }

    // Menghapus data user berdasarkan ID
    public function delete_mahasiswa($nik) {
        return $this->db->delete('mahasiswa', array('nik' => $nik));
    }

    function cek_nik($nik){
        $cek = $this->db->query("SELECT * FROM mahasiswa WHERE nik = '".$nik."' ")->num_rows();
        if($cek == 1 || $cek > 1){
            $var = 1;
        }else{
            $var = 0;
        }
        return $var;
    }

}
?>
