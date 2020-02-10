<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surat_online extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('header_model');
		$this->load->model('surat_online_model');
	}

	public function index($p = 1, $o = 2) {
		$data['p'] = $p;
		$data['o'] = $o;

		if (isset($_SESSION['cari']))
			$data['cari'] = $_SESSION['cari'];
		else $data['cari'] = '';

		if (isset($_SESSION['filter']))
			$data['filter'] = $_SESSION['filter'];
		else $data['filter'] = '';

		if (isset($_SESSION['jenis']))
			$data['jenis'] = $_SESSION['jenis'];
		else $data['jenis'] = '';

		if (isset($_POST['per_page']))
			$_SESSION['per_page'] = $_POST['per_page'];
		$data['per_page'] = $_SESSION['per_page'];

		$data['paging'] = $this->surat_online_model->paging($p,$o);
		$data['main'] = $this->surat_online_model->list_data($o, $data['paging']->offset, $data['paging']->per_page);
		$data['tahun_surat'] = $this->surat_online_model->list_tahun_surat();
		$data['jenis_surat'] = $this->surat_online_model->list_jenis_surat();
		$data['keyword'] = $this->surat_online_model->autocomplete();

		$header = $this->header_model->get_data();		

		$nav['act'] = 15;
		$nav['act_sub'] = 57;
		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('surat_online/index', $data);
		$this->load->view('footer');
	}

	public function search()
	{
		$cari = $this->input->post('cari');
		if ($cari != '')
			$_SESSION['cari'] = $cari;
		else unset($_SESSION['cari']);
		redirect('surat_online');
	}	

	public function delete($p = 1, $o = 0, $id = '')
	{
		$this->redirect_hak_akses('h', "surat_online/index/$p/$o");
		$this->surat_online_model->delete($id);
		redirect("surat_online/index/$p/$o");
	}	

}

?>