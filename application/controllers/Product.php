<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_model',null, TRUE);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function productDetails()
	{
		
		$ceurl = $this->uri->segment(1);
		$seurl = $this->uri->segment(2);
		$peurl = $this->uri->segment(3);
		$data['product'] = $this->product_model->get_product_detail();		
//echo '<pre>'; print_r($data['product']); die;		
		$this->load->view('templates/header', $data);
		$this->load->view('productDetail', $data);
		$this->load->view('templates/footer', $data);
	}

	public function setProductCount()
	{
		$count = $this->input->post('count');
		$this->session->set_userdata(array('show_item_count' => $count));
		return true;
	}		
}
