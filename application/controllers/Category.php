<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('content_helper');
        $this->load->library('pagination');
		$this->load->model('category_model',null, TRUE);
	}

	public function index($category = null)  
	{
		$page = $this->uri->segment(2)? $this->uri->segment(2) : 0;
		$data['page'] = $this->category_model->get_category_detail($category);		
		if(!isset($data['page']) || empty($data['page'])){
			show_404();
		}

		if(!isset($_SESSION['show_item_count'])){
			$this->session->set_userdata(array('show_item_count' => 12));
		}
		
		$config['base_url'] = base_url($category);
		$config['total_rows'] = $this->category_model->get_subcategory_count($data['page']->id);
		$config['per_page'] = $this->session->userdata('show_item_count');
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 4;

		$config['prev_link'] = FALSE;
		$config['next_link'] = FALSE;
		$config['first_link'] = false;
		$config['last_link'] = false;

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$this->pagination->initialize($config);

		$prevPage = $page - 1;
		$nextPage = $page + 1;
		$data['prevLink'] = '<a href="'. base_url($category.'/'.$prevPage).'" class="prev"><span class="fa fa-chevron-left"></span>Previous</a>';
		$data['nextLink'] = '<a href="'. base_url($category.'/'.$nextPage).'" class="next">Next<span class="fa fa-chevron-right"></span></a>';

		$data['subCategories'] = $this->category_model->get_subcategory_detail($data['page']->id, $config['per_page'],$page);
		$subcategory_list = $this->category_model->get_subcategory_list(); // for left side bar

		$cat = '';
		$data['subcategory_list'] = [];
		$data['subcategory_list']['en'] = [];
		$data['subcategory_list']['ja'] = [];

		foreach ($subcategory_list as $i => $val) {
			if($cat != $val->category){
				$cat = $val->category;
				$data['subcategory_list'][$val->ja_category] = [];
				$data['subcategory_list'][$val->category] = [];
			}
			$data['subcategory_list']['en'][$val->category][] = ['cat_eurl' => $val->cat_eurl, 'subcat_eurl' => $val->subcat_eurl, 'subcategory' => $val->subcategory];
			$data['subcategory_list']['ja'][$val->ja_category][] = ['cat_eurl' => $val->cat_eurl, 'subcat_eurl' => $val->subcat_eurl, 'ja_subcategory' => $val->ja_subcategory];
		}

//echo '<pre>'; print_r($data['subcategory_list']); die;
/*echo '<pre>'; 
foreach($data['subCategories'] as $row){

	print_r($row->title); 
	echo '<br>';
	print_r($row->price); 
	//print_r($row); 
	echo '<br><hr><br>';
} die;*/
		$this->load->view('templates/header', $data);
		$this->load->view('productList', $data);
		$this->load->view('templates/footer', $data);
	}	
}
