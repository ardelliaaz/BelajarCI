<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model("karyawan_model");
	}
  public function index()
  {
    // $data["products"] = $this->product_model->getAll();
    $data["karyawan"] = $this->karyawan_model->getAll();
   // var_dump($data["karyawan"]);
   $this->load->view("admin/karyawan/list", $data);
  }
}
