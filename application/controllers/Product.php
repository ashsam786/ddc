<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_model',null, TRUE);
	}

	Public function process_product_details($data){
	
		$array = ['Jewelry Information' => ['en' => [], 'ja' => []], 'Diamond Information' => ['en' => [], 'ja' => []], 'Watch Information' => ['en' => [], 'ja' => []], 'Object Information' => ['en' => [], 'ja' => []], 'Other Information' => ['en' => [], 'ja' => []]];

		$array['Jewelry Information']['en']['detail_cat'] = 'Jewelry Information';
		$array['Jewelry Information']['en']['Brand Name'] =	$data->brname;
		$array['Jewelry Information']['en']['Hallmarks/Origin'] =	$data->jehallmarks;
		$array['Jewelry Information']['en']['Period'] =	$data->jeperiod;
		$array['Jewelry Information']['en']['Total Diamond Weight'] =	$data->jediamond;
		$array['Jewelry Information']['en']['Diamond Color'] =	$data->jediamondcolor;
		$array['Jewelry Information']['en']['Diamond Clarity'] =	$data->jediamondcl;
		$array['Jewelry Information']['en']['Total Gemstone Weight'] =	$data->jestoneweight;
		$array['Jewelry Information']['en']['Gemstone Color'] =	$data->jestonecolor;
		$array['Jewelry Information']['en']['Gemstone Clarity'] =	$data->jestonecl;
		$array['Jewelry Information']['en']['Metal'] =	$data->jemetal;
		$array['Jewelry Information']['en']['Metal Purity'] =	$data->jemetailpu;
		$array['Jewelry Information']['en']['Total Piece Weight'] =	$data->jempriceweight;
		$array['Jewelry Information']['en']['Dimensions'] =	$data->jedimension;
		$array['Jewelry Information']['en']['Finger Size'] =	$data->jefingersize;
		$array['Jewelry Information']['en']['Sizable/サイズ変更'] =	$data->jeselect;

		$array['Jewelry Information']['ja']['detail_cat'] 	= 'ジュエリー';
		$array['Jewelry Information']['ja']['ブランド名'] 	=	$data->jabrname;
		$array['Jewelry Information']['ja']['極印/原産'] =	$data->jajehallmarks;
		$array['Jewelry Information']['ja']['時代'] =	$data->jajeperiod;
		$array['Jewelry Information']['ja']['ダイヤモンドトータルカラット'] =	$data->jajediamond;
		$array['Jewelry Information']['ja']['ダイヤモンドカラー'] =	$data->jajediamondcolor;
		$array['Jewelry Information']['ja']['ダイヤモンドクラリティ'] =	$data->jajediamondcl;
		$array['Jewelry Information']['ja']['宝石トータルカラット'] =	$data->jajestoneweight;
		$array['Jewelry Information']['ja']['宝石カラー'] =	$data->jajestonecolor;
		$array['Jewelry Information']['ja']['宝石クラリティ'] =	$data->jajestonecl;
		$array['Jewelry Information']['ja']['地金素材'] =	$data->jajemetal;
		$array['Jewelry Information']['ja']['純度'] =	$data->jajemetailpu;
		$array['Jewelry Information']['ja']['重さ'] =	$data->jajempriceweight;
		$array['Jewelry Information']['ja']['寸法'] =	$data->jajedimension;
		$array['Jewelry Information']['ja']['リングサイズ'] =	$data->jajefingersize;
		$array['Jewelry Information']['ja']['サイズ変更'] =	$data->jajeselect;

		$array['Diamond Information']['en']['detail_cat'] = 'Diamond Information';
		$array['Diamond Information']['en']['Weight'] =	$data->jadiaweight;
		$array['Diamond Information']['en']['Shape'] =	$data->diashap;
		$array['Diamond Information']['en']['Lab/Certificate'] =	$data->dialab;
		$array['Diamond Information']['en']['Color'] =	$data->diacolor;	
		$array['Diamond Information']['en']['Clarity'] =	$data->diaclarity;
		$array['Diamond Information']['en']['Cut'] =	$data->diacut;
		$array['Diamond Information']['en']['Polish'] =	$data->daipolish;
		$array['Diamond Information']['en']['Symmetry'] =	$data->diasymmetry;
		$array['Diamond Information']['en']['Fluorescence'] =	$data->diafluor;
		$array['Diamond Information']['en']['Table %'] =	$data->diatable;
		$array['Diamond Information']['en']['Depth %'] =	$data->diadepth;
		$array['Diamond Information']['en']['Measurements'] =	$data->diameasurment;
		$array['Diamond Information']['en']['Remarks'] =	$data->diaremarks;
		$array['Diamond Information']['en']['Price Per Carat'] =	$data->diapercarat;
		$array['Diamond Information']['en']['Total Price'] =	$data->diatotalprice;

		$array['Diamond Information']['ja']['detail_cat'] = 'ダイヤモンド';
		$array['Diamond Information']['ja']['カラット'] =	$data->jadiaweight;
		$array['Diamond Information']['ja']['シェイプ'] =	$data->diashap;
		$array['Diamond Information']['ja']['鑑定機関'] =	$data->dialab;
		$array['Diamond Information']['ja']['カラー'] =	$data->diacolor;	
		$array['Diamond Information']['ja']['クラリティ'] =	$data->diaclarity;
		$array['Diamond Information']['ja']['カット状態'] =	$data->diacut;
		$array['Diamond Information']['ja']['研磨状態'] =	$data->daipolish;
		$array['Diamond Information']['ja']['対称性'] =	$data->diasymmetry;
		$array['Diamond Information']['ja']['蛍光性'] =	$data->diafluor;
		$array['Diamond Information']['ja']['テーブル %'] =	$data->diatable;
		$array['Diamond Information']['ja']['深さ%'] =	$data->diadepth;
		$array['Diamond Information']['ja']['寸法'] =	$data->diameasurment;
		$array['Diamond Information']['ja']['備考'] =	$data->diaremarks;
		$array['Diamond Information']['ja']['カラットあたりの価格'] =	$data->diapercarat;
		$array['Diamond Information']['ja']['合計価格'] =	$data->diatotalprice;

		$array['Gemstone Information']['en']['detail_cat'] = 'Gemstone Information';
		$array['Gemstone Information']['en']['Carat Weight'] =	$data->gemcarat;
		$array['Gemstone Information']['en']['Gemstone Type'] =	$data->gemstonetype;
		$array['Gemstone Information']['en']['Shape'] =	$data->gemshape;
		$array['Gemstone Information']['en']['Color'] =	$data->gemcolor;
		$array['Gemstone Information']['en']['Clarity'] =	$data->gemclarity;
		$array['Gemstone Information']['en']['Cut'] =	$data->gemcut;
		$array['Gemstone Information']['en']['Origin'] =	$data->gemorigin;
		$array['Gemstone Information']['en']['Treatment'] =	$data->gemtreatment;
		$array['Gemstone Information']['en']['Lab/Certificate'] =	$data->gemlab;
		$array['Gemstone Information']['en']['Remarks'] =	$data->gemremarks;

		$array['Gemstone Information']['ja']['detail_cat'] = '宝石';
		$array['Gemstone Information']['ja']['カラット'] =	$data->jagemcarat;
		$array['Gemstone Information']['ja']['宝石種類'] =	$data->jagemstonetype;
		$array['Gemstone Information']['ja']['シェイプ'] =	$data->jagemshape;
		$array['Gemstone Information']['ja']['カラー'] =	$data->jagemcolor;
		$array['Gemstone Information']['ja']['クラリティ'] =	$data->jagemclarity;
		$array['Gemstone Information']['ja']['カット状態'] =	$data->jagemcut;
		$array['Gemstone Information']['ja']['原産'] =	$data->jagemorigin;
		$array['Gemstone Information']['ja']['人口処理'] =	$data->jagemtreatment;
		$array['Gemstone Information']['ja']['鑑定機関'] =	$data->jagemlab;
		$array['Gemstone Information']['ja']['備考'] =	$data->jagemremarks;

		$array['Watch Information']['en']['ja_name'] =	'Watch Information';
		$array['Watch Information']['en']['Brand Name'] =	$data->watbrand;
		$array['Watch Information']['en']['Model'] =	$data->watmodel;
		$array['Watch Information']['en']['Gender'] =	$data->watgender;
		$array['Watch Information']['en']['Age/Condition'] =	$data->watage;
		$array['Watch Information']['en']['Features'] =	$data->watfeatures;
		$array['Watch Information']['en']['Features1'] =	$data->watfeatures2;
		$array['Watch Information']['en']['Features2'] =	$data->jawatfeatures;
		$array['Watch Information']['en']['Features3'] =	$data->jawatfeatures2;
		$array['Watch Information']['en']['Movement'] =	$data->watmovement;
		$array['Watch Information']['en']['Case Material'] =	$data->watcase;
		$array['Watch Information']['en']['Band Material'] =	$data->watband;
		$array['Watch Information']['en']['Dimensions'] =	$data->watdim;
		$array['Watch Information']['en']['Carat Weight'] =	$data->watcarat;
		$array['Watch Information']['en']['Box &amp; Papers'] =	$data->watbox;
		$array['Watch Information']['en']['Warranty'] =	$data->watwarranty;
		$array['Watch Information']['en']['Remarks'] =	$data->watremarks;

		$array['Watch Information']['ja']['ja_name'] =	'時計';
		$array['Watch Information']['ja']['ブランド名'] =	$data->watbrand;
		$array['Watch Information']['ja']['モデル'] =	$data->watmodel;
		$array['Watch Information']['ja']['ジェンダー'] =	$data->watgender;
		$array['Watch Information']['ja']['年数/コンディション'] =	$data->watage;
		$array['Watch Information']['ja']['仕様'] =	$data->watfeatures;
		$array['Watch Information']['ja']['仕様 1'] =	$data->watfeatures2;
		$array['Watch Information']['ja']['仕様 2'] =	$data->jawatfeatures;
		$array['Watch Information']['ja']['仕様 3'] =	$data->jawatfeatures2;
		$array['Watch Information']['ja']['ムーブメント'] =	$data->watmovement;
		$array['Watch Information']['ja']['ケース素材'] =	$data->watcase;
		$array['Watch Information']['ja']['バンド素材'] =	$data->watband;
		$array['Watch Information']['ja']['寸法'] =	$data->watdim;
		$array['Watch Information']['ja']['カラット'] =	$data->watcarat;
		$array['Watch Information']['ja']['箱&amp;保障'] =	$data->watbox;
		$array['Watch Information']['ja']['保障期間'] =	$data->watwarranty;
		$array['Watch Information']['ja']['備考'] =	$data->watremarks;

		$array['Object Information']['en']['ja_name'] =	'Object Information';
		$array['Object Information']['en']['Brand Name'] =	$data->objbrandname;
		$array['Object Information']['en']['Hallmarks/Origin'] =	$data->objhall;
		$array['Object Information']['en']['Period'] =	$data->objperiod;
		$array['Object Information']['en']['Style'] =	$data->objstyle;
		$array['Object Information']['en']['Material'] =	$data->objmaterial;
		$array['Object Information']['en']['Dimensions'] =	$data->objdimensions;
		$array['Object Information']['en']['Weight'] =	$data->objweight;
		$array['Object Information']['en']['Remarks'] =	$data->objremarks;

		$array['Object Information']['ja']['ja_name'] =	'コレクション';
		$array['Object Information']['ja']['ブランド名'] =	$data->objbrandname;
		$array['Object Information']['ja']['刻印/原産'] =	$data->objhall;
		$array['Object Information']['ja']['時代'] =	$data->objperiod;
		$array['Object Information']['ja']['スタイル'] =	$data->objstyle;
		$array['Object Information']['ja']['素材'] =	$data->objmaterial;
		$array['Object Information']['ja']['寸法'] =	$data->objdimensions;
		$array['Object Information']['ja']['重さ'] =	$data->objweight;
		$array['Object Information']['ja']['備考'] =	$data->objremarks;

		
		$return = [];
		
		foreach($array as $ind => $val){
			$count = 0;
			$jacount = 0;
			$arr = [];
			$jaarr = [];			
			foreach($val['en'] as $i => $v){
 				if(!empty($v)){
					$count += 1;
					$arr[$i] = $v;
				}
			}
			
			foreach($val['ja'] as $i => $v){
 				if(!empty($v)){
					$jacount += 1;
					$jaarr[$i] = $v;
				}
			}
			
			if($count > 1){
				if(!isset($return[$ind])){
					$return[$ind] = [];
				}				
				$return[$ind]['en'] = $arr;
			}
			
			if($jacount > 1){
				if(!isset($return[$ind])){
					$return[$ind] = [];
				}
				$return[$ind]['ja'] = $jaarr;
			}
		}
		
		return $return;
	}

	
	public function productDetails()
	{
		
		$ceurl = $this->uri->segment(1);
		$seurl = $this->uri->segment(2);
		$peurl = $this->uri->segment(3);
		$data['product'] = $this->product_model->get_product_detail();	
		$data['pdetail'] = $this->process_product_details($data['product']);

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
