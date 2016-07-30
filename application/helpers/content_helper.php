<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_crm_data'))
{
/*    function get_crm_data($page = 'home')
    {
    	$CI =& get_instance();
	    //$CI->db->select();
    	$CI->db->where('page_name', $page);
    	$qry = $CI->db->get('crm');
    	$page_data = $qry->row_array();

    	return $page_data;
    }*/

    function limit_content_length($string = '', $length = 0)
    {
		$string = strip_tags($string);
		if (strlen($string) > $length) {
		    $stringCut = substr($string, 0, $length);
		    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).' ...'; 
		}
		return $string;
    }       

}