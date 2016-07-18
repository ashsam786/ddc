<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_latest_collection(){


        	$this->db->select('p.id, p.title, p.imagepath, p.description,p.price, p.eurl as peurl, s.eurl as seurl, c.eurl as ceurl');
		$this->db->from('product as p');
		$this->db->join('subcategory as s', 'p.subcatid = s.id', 'left');
		$this->db->join('category as c', 's.catid = c.id', 'left');
		$this->db->where('p.status', 'Y');
		$this->db->order_by('p.id', 'RANDOM');
		$this->db->limit(5,0);
		$qry = $this->db->get();
                return $qry->result_array();


        }

        public function get_cms_data($page = null){
              $this->db->select('*');
              $this->db->from('cmscontent');
              $this->db->where('title', 'Home');
              $qry = $this->db->get();
              if(sizeof($qry->result_array()) == 1){
                  return $qry->result_array();
              }
        
        }
}