<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index($method = NULL) {
		$datas['hehe'] = 0;
		if($method) {
			$datas['hehe'] = 1;
		}
		$this->load->view('index', $datas);
	}



	public function done() {

		if(!isset($_SESSION['rand']))
			$_SESSION['rand'] = [];

		if(count($_SESSION['rand']) == 16)
			array_shift($_SESSION['rand']);

		$temp = [
			'1',
			'2',
			'3',
			'4',
			'5',
			'6',
			'7',
			'8',
			'9',
			'10',
			'11',
			'12',
			'13',
			'14',
			'15',
			'16',
		];

		$a = array_diff($temp, $_SESSION['rand']);

		$rand = $temp[array_rand($a)];

		$_SESSION['rand'][] = $rand;




		$datas['hehe'] = $rand;

		$temp = [
			1 => '利事',
			2 => '忍耐',
			3 => '断舍离',
			4 => '孤独',
			5 => '任性',
			6 => '温柔',
			7 => '蜜恋',
			8 => '气愈',
			9 => '主动',
			10 => '顺利',
			11 => '微笑',
			12 => '低调',
			13 => '效率',
			14 => '平顺',
			15 => '桃花',
			16 => '放松',
		];

		$datas['title'] = $temp[$datas['hehe']];
		echo "<script>location.href = '/welcome/haha/".$datas['hehe']."';</script>";
		// $this->load->view('done', $datas);
	}

	public function haha($id = 1) {
		$temp = [
			1 => '利事',
			2 => '忍耐',
			3 => '断舍离',
			4 => '孤独',
			5 => '任性',
			6 => '温柔',
			7 => '蜜恋',
			8 => '气愈',
			9 => '主动',
			10 => '顺利',
			11 => '微笑',
			12 => '低调',
			13 => '效率',
			14 => '平顺',
			15 => '桃花',
			16 => '放松',
		];
		$datas['hehe'] = $id;
		$datas['title'] = $temp[$id];
		$this->load->view('done', $datas);
	}

	public function test() {
		$this->load->view('test', []);
	}
	
}
