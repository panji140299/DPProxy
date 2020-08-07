<?php

class Proxy_Token {
    private $token = NULL;
    function buat_token() {
        $this->token = new Mesin_Token();
    }
    function hitung_token() {
        if (NULL == $this->token) {
            $this->buat_token();
        }
        return $this->token->hitung_token();
    }
    function tambah_token($token) {
        if (NULL == $this->token) {
            $this->buat_token();
        }
        return $this->token->tambah_token($token);
    }
    function ambil_token($no_token) {
        if (NULL == $this->token) {
            $this->buat_token();
        }
        return $this->token->ambil_token($no_token);
    }
    function hapus_token($book) {
        if (NULL == $this->token) {
            $this->buat_token();
        }
        return $this->token->hapus_token($book);
    }
}

class Mesin_Token {
    private $token = array();
    private $jumlah_token = 0;
    public function hitung_token() {
        return $this->jumlah_token;
    }
    private function buat_token($hit) {
        $this->jumlah_token = $hit;
    }
    public function ambil_token($no_token) {
        return $this->token[$no_token];
    }
    public function tambah_token(Anggota $in_anggota) {
        $this->buat_token($this->hitung_token() + 1);
        $this->token[$this->hitung_token()] = $in_anggota;
        return $this->hitung_token();
    }
    public function hapus_token() {
        $i = 0;
        while ($i <= $this->hitung_token()) {
          $this->buat_token($this->hitung_token() - 1);
		  $i++;
        }
      return $this->hitung_token();
    }
}
?>