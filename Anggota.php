<?php

class Anggota {
    private $nama;
    private $no_anggota;
    function __construct($in_nama, $in_no_anggota) {
      $this->nama = $in_nama;
      $this->no_anggota  = $in_no_anggota;
    }
    function ambil_nama() {
        return $this->nama;
    }
    function ambil_no_anggota() {
        return $this->no_anggota;
    }
    function tampil() {
      return $this->ambil_no_anggota().' - '.$this->ambil_nama();
    }
}

  $proxytoken = new Proxy_Token();
  $anggota = new Anggota('Panji Prasetya','10116455');
  $proxytoken->tambah_token($anggota);

  echo 'Token Key yang dibuat : '.$proxytoken->hitung_token();
  echo'<br><br>';

  $lihat_anggota = $proxytoken->ambil_token(1);
  echo 'Informasi Anggota : '. $lihat_anggota->tampil();
  echo'<br><br>';

  $proxytoken->hapus_token($anggota);
  echo 'Token setelah dihapus, sisa token : '.$proxytoken->hitung_token();
  
  ?>