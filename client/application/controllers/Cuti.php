<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
/**
* Required untuk akses data customer di server
*/
class Cuti extends CI_Controller{
var $API = "";
	function __construct(){
	parent::__construct();
	$this->API="https://andipradana.000webhostapp.com/server/index.php/api/cutis/";
}
// menampilkan daftar customer
function index(){
	$data['cutis'] = $this->__execute($this->API,'get', '');
	$this->template->load('template_master','cuti/list',$data);
}
//load form tambah dan memproses simpan data baru
function add(){
	if (isset($_POST['submit'])){
	$params = array(
		'nama'=> $this->input->post('nama'),
		'nim'=> $this->input->post('nim'),
		'fakultas'=> $this->input->post('fakultas'),
		'progdi'=> $this->input->post('progdi'));
	$this->__execute($this->API, 'post',$params);
	redirect('cuti');
	}else{
		$this->template->load('template_master', 'cuti/add');
	}
}
//load form edit dan memproses simpan update data
function edit(){
	if (isset( $_POST ['submit'])) {
		$params = array(
			'nama'=> $this->input->post('nama'),
			'nim'=> $this->input->post('nim'),
			'fakultas'=> $this->input->post('fakultas'),
			'progdi'=> $this->input->post('progdi'),
			'id'=> $this->input->post('id'));	
		$result = $this->__execute($this->API.'format/json/','put',$params);
		redirect('cuti');
	} else {
	$id = $this->uri->segment(3);
	$data['cuti'] = $this->__execute($this->API.'id/'.$id,'get',array('id' => $id));
	$this->template->load('template_master','cuti/edit',$data);
	}
}

//hapus data customer
function delete(){
	$id = $this->uri->segment(3);
	$this->__execute($this->API,'delete', array('id' => $id));
	redirect('cuti');
}
function __execute($url,$method,$param){
	$this->curl->create($url);
	$this->curl->$method($param);
	$result = json_decode($this->curl->execute());
	return $result;
}
}
?>	

