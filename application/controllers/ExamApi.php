<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamApi extends CI_Controller {

	public function __construct()
	{
		parent :: __construct();
		$this->load->model('ExamDatabase');
	}
	public function index()
	{
		
	}

	public function dashboard()
	{
		$this->load->view('components/header');
		$this->load->view('pages/dashboard');
		$this->load->view('components/footer');
	}

	public function addItems()
	{
		$this->load->view('components/header');
		$this->load->view('pages/addItems');
		$this->load->view('components/footer');
	}

	public function insertItems()
	{
		$data = $this->ExamDatabase->insertItems();
		echo $data;
	}

	public function home()
	{
		$this->load->view('components/header');
		$this->load->view('pages/home');
		$this->load->view('components/footer');
	}

	public function homeApi()
	{
		$data = $this->ExamDatabase->home();
		echo json_encode($data);

	}

	public function search()
	{
		$result = $this->ExamDatabase->search();
		echo json_encode($result);
	}

	public function visitors()
	{
		// $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		// echo $_SESSION['ip']; echo $_SERVER['REMOTE_ADDR'];
		// $data = $this->ExamDatabase->visitors();
		// echo $data;
		// echo $this->input->ip_address();
	}

	public function push()
	{
		
		require APPPATH. 'application/third_party/vendor/autoload.php';

		$options = array(
			'cluster' => 'ap2',
			'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
			'e6256b34427ca9b29815',
			'e1a37e8c0910ae055d3b',
			'838370',
			$options
		);

		$data['message'] = 'hello world';
		$pusher->trigger('my-channel', 'my-event', $data);

	}
}
