<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id');
		if(empty($this->user_id) || $this->session->userdata('role') != 'Admin')
		{
			$this->session->set_flashdata('info', '<script>swal({title: "Info", text: "Anda tidak berhak untuk masuk, harap login terlebih dahulu", timer: 10000, icon: "error", button: false});</script>');
        	redirect(base_url());
     	}
	}

	public function index(){
     	$data['title'] = 'Star Digital | Backup Database';

		$this->load->view('adm-end/template/content_head',$data);
		$this->load->view('adm-end/template/content_header');
		$this->load->view('adm-end/template/content_nav');
		$this->load->view('adm-end/content_backup',$data);
		$this->load->view('adm-end/template/content_footer');
		$this->load->view('adm-end/template/content_sidebar-control');
	}

	public function backup_database(){
		$this->load->dbutil();
		$db_name = 'backup-db-'.$this->db->database.'-on'.date("Y-m-d-H-i-s").'.sql';
        $prefs = array(
        	'format' => 'zip',
        	'filename' => $db_name,
        	'add_insert' => TRUE,
        	'foreign_key_checks' => FALSE,	
        );

        $backup = $this->dbutil->backup($prefs);
		$save	=	'patchtobkfolder'.$db_name;

		$this ->load->helper('file');
		write_file($save, $backup);

      	$this ->load->helper('download');
		force_download($db_name, $backup);
	}

}

/* End of file Backup.php */
/* Location: ./application/controllers/adm-end/Backup.php */