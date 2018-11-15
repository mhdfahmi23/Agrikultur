<?php

class Admin extends CI_Model{

function simpan_berita($jdl,$berita,$gambar){
    $hsl=$this->db->query("INSERT INTO inovator (judul_inovator,foto_inovator,isi_i) VALUES ('$jdl','$gambar','$berita')");
    return $hsl;
}

function get_berita_by_kode($kode){
    $hsl=$this->db->query("SELECT * FROM inovator WHERE id_inovator='$kode'");
    return $hsl;
}

function get_all_berita(){
    $hsl=$this->db->query("SELECT * FROM inovator ORDER BY id_inovator DESC");
    return $hsl;
}
}