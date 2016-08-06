<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_category_detail($category = null){
                $where = ['status' => 'Y'];
                if($category != null){
                    $where['eurl'] = $category;        
                }

                $this->db->select('*');
                $this->db->from('category');
                $this->db->where('status', 'Y');
                if($category != null){
                    $this->db->where('eurl LIKE', '%'.$category.'%');                
                }    
                $this->db->order_by('id', 'DESC');
                $qry = $this->db->get();
                return $qry->row();
        }

        public function get_subcategory_count($catId = null){
            $where = ['s.status' => 'Y'];
            if($catId != null){
                $where['s.catid'] = $catId;        
            }

            $this->db->select('count(*) as count');
            $this->db->from('subcategory as s');
            $this->db->join('product as p', 'p.subcatid = s.id', 'left');
            $this->db->where($where);
            $this->db->order_by('s.id', 'DESC');
            $qry = $this->db->get();
            $res = $qry->row_array();
            
            return $res['count']; 
        }

        public function get_subcategory_detail($catId = null, $limit = null, $start = null){
            $where = ['s.status' => 'Y'];
            if($catId != null){
                $where['s.catid'] = $catId;        
            }

        	$this->db->select('s.*, p.*, s.eurl as seurl');
        	$this->db->from('subcategory as s');
        	$this->db->join('product as p', 'p.subcatid = s.id', 'left');
            $this->db->where($where);
            if($limit != null && $start !== null){
                $this->db->limit($limit, $start);
            }
        	$this->db->order_by('s.id', 'DESC');
        	$qry = $this->db->get();
                return $qry->result();
        }

        public function get_subcategory_list(){
                $where = ['c.status' => 'Y', 's.status' => 'Y'];

                $this->db->select('c.catname as category, c.ja_catname as ja_category, s.subcat as subcategory, s.ja_subcat as ja_subcategory, c.eurl as cat_eurl, s.eurl as subcat_eurl');
                $this->db->from('category as c');
                $this->db->join('subcategory as s', 'c.id = s.catid', 'left');
                $this->db->where($where);
                
                $this->db->order_by('category', 'ASC');
                $qry = $this->db->get();
                return $qry->result();                
        }
}