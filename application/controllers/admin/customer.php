<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model("customer_model");
	}
  public function index()
  {
    // $data["products"] = $this->product_model->getAll();
    $data["customer"] = $this->customer_model->getAll();
    var_dump($data["customer"]);
  }
}
