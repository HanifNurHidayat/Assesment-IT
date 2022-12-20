<?php
class Library{
    public function __construct() //perintah untuk terkoneksi dengan database.
    {
        $host = "localhost";
        $dbname = "sekolah";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}",$username, $password);
    }
    
    public function add_data( $nis, $nama, $kelas, $tempat_lahir, $tanggal_lahir, $alamat)
    {
        $data = $this->db->prepare('INSERT INTO tb_siswa ( nis, nama, kelas, tempat_lahir, tanggal_lahir, alamat)VALUES (?,?,?,?,?,?)');

        $data->bindParam(1, $nis);
        $data->bindParam(2, $nama);
        $data->bindParam(3, $kelas);
        $data->bindParam(4, $tempat_lahir);
        $data->bindParam(5, $tanggal_lahir);
        $data->bindParam(6, $alamat);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        /*prepare itu merupakan fungsi PDO yang digunakan untuk menuliskan query SQL hasil query
        disimpan di variabel $query,kenapa kita menggunakan 
        $this->db karena variabel ini yang menyimpan koneksi ke database.
        */
        $query = $this->db->prepare("SELECT * FROM siswa");
        // menjalankan perintah query dengan menggunakan perintah $query->execute()
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function get_by_id($id_siswa){
        $query = $this->db->prepare("SELECT * FROM siswa where id_siswa=?");
        $query->bindParam(1, $id_siswa);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id_siswa, $nis, $nama, $kelas, $tempat_lahir, $tanggal_lahir, $alamat){
        $query = $this->db->prepare('UPDATE siswa set nis=?,nama=?,kelas=?,tempat_lahir=?, tanggal_lahir=?, alamat=? where id_siswa=?');
        
        $query->bindParam(1, $nis);
        $query->bindParam(2, $nama);
        $query->bindParam(3, $kelas);
        $query->bindParam(4, $tempat_lahir);
        $query->bindParam(5, $tanggal_lahir);
        $query->bindParam(6, $alamat);
        $query->bindParam(7, $id_siswa);

        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id_siswa)
    {
        $query = $this->db->prepare("DELETE FROM siswa where id_siswa=?");
 
        $query->bindParam(1, $id_siswa);
 
        $query->execute();
        return $query->rowCount();
        
    }

}
?>
