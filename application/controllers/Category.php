<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('content_helper');
		$this->load->model('category_model',null, TRUE);
	}

	public function index($category = null)
	{
		$data['page'] = $this->category_model->get_category_detail($category);		
		if(!isset($data['page']) || empty($data['page'])){
			show_404();
		}

		$data['subCategories'] = $this->category_model->get_subcategory_detail($data['page']->id);
		//$data['subcategory_list'] = $this->category_model->get_subcategory_list(); // for left side bar
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
