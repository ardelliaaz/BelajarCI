<?php defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $Karyawan_id;
    public $Nama_karyawan;
    public $Alamat;
    public $telp;
    public function getAll(){
      return $this->db->get($this->_table)->result();
    }
  }
