<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_product_detail(){
                $ceurl = $this->uri->segment(1);
                $seurl = $this->uri->segment(2);
                $peurl = $this->uri->segment(3);

        	$this->db->select('*');
        	$this->db->from('product as p');
        	$this->db->join('subcategory as s', 'p.subcatid = s.id', 'left');
        	$this->db->join('category as c', 's.catid = c.id', 'left');
        	$this->db->where('p.status', 'Y');
                $this->db->where('p.eurl', $peurl);
                $this->db->where('s.eurl', $seurl);
                $this->db->where('c.eurl', $ceurl);
        	$this->db->order_by('p.id', 'DESC');
        	$this->db->limit(1,0);
        	$qry = $this->db->get();
                return $qry->row();
        }
}