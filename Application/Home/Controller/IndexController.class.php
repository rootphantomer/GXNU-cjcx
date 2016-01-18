<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class IndexController extends BaseController {
	public function index() {
		$this -> display();
	}

	public function login() {
		$number = trim(I('post.number'));
		$password = $_POST['password'];
		$post_data = array('phone' => '+8618511339115', 'username' => $number, 'password' => $password);
		$data = send_post('http://www.dean.gxnu.edu.cn/jwxt/index.php/api/user/login', $post_data);
		$data = json_decode($data, TRUE);
		foreach ($data as $v => $d) {
			if ($v == 'session_id') {
				$sessionid = $d;
				break;
			}
		}
		if (empty($sessionid)) {
			$this -> show("密码错误");
			exit ;
		} else {
			cookie('number', $number, 3600);
		}
		$info = M('info');
		$infodata['number'] = $number;
		$infodata['sessionid'] = $sessionid;
		if ($info -> where($infodata['number']) -> getField('number') === $number) {
			$info -> where($infodata['number']) -> save($infodata);
		} else {
			$info -> add($infodata);
		}
		$this -> redirect('mulu');
	}

	public function mulu() {
		$this -> display();
	}

	public function getUserInfo() {
		$number = cookie('number');
		$sessionid = M('info') -> where("number='%s'", $number) -> getField('sessionid');
		$cookie = "PHPSESSID=" . trim($sessionid);
		$post_data = array('session_id' => $sessionid);
		$data = send_post2('http://www.dean.gxnu.edu.cn/jwxt/index.php/api/user/getUserInfo', $post_data, $cookie);
		$data = json_decode($data, TRUE);
		foreach ($data as $a => $b) {
			foreach ($b as $c => $d) {
				echo $c . '-----' . $d . "</br>";
			}
		}
	}

	public function getyxcj() {
		$number = cookie('number');
		$sessionid = M('info') -> where("number='%s'", $number) -> getField('sessionid');
		$cookie = "PHPSESSID=" . trim($sessionid);
		$post_data = array('session_id' => $sessionid);
		$data = send_post2('http://www.dean.gxnu.edu.cn/jwxt/index.php/api/chengji/getyxcj', $post_data, $cookie);
		$data = json_decode($data, TRUE);
		foreach ($data as $a => $b) {
			foreach ($b as $c => $d) {
				foreach ($d as $e => $f) {
					echo $e . '-----' . $f . "</br>";
				}
			}
		}
	}

	public function getbjgcj() {
		$number = cookie('number');
		$sessionid = M('info') -> where("number='%s'", $number) -> getField('sessionid');
		$cookie = "PHPSESSID=" . trim($sessionid);
		$post_data = array('session_id' => $sessionid);
		$data = send_post2('http://www.dean.gxnu.edu.cn/jwxt/index.php/api/chengji/getbjgcj', $post_data, $cookie);
		$data = json_decode($data, TRUE);
		foreach ($data as $a => $b) {
			foreach ($b as $c => $d) {
				foreach ($d as $e => $f) {
					echo $e . '-----' . $f . "</br>";
				}
			}
		}
	}

	public function getqtcj() {
		$number = cookie('number');
		$sessionid = M('info') -> where("number='%s'", $number) -> getField('sessionid');
		$cookie = "PHPSESSID=" . trim($sessionid);
		$post_data = array('session_id' => $sessionid);
		$data = send_post2('http://www.dean.gxnu.edu.cn/jwxt/index.php/api/chengji/getqtcj', $post_data, $cookie);
		$data = json_decode($data, TRUE);
		foreach ($data as $a => $b) {
			foreach ($b as $c => $d) {
				foreach ($d as $e => $f) {
					echo $e . '-----' . $f . "</br>";
				}
			}
		}
	}

	public function loginout() {
		cookie('number', null);
		$this -> redirect('index/index');
	}

}
