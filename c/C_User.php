<?php
//
// Конттроллер страницы юзера.
//
include_once('m/M_User.php');
	class C_User extends C_Base {

		public function action_info() {

			$get_user = new M_User();
			$user_info = $get_user->get($_SESSION['user_id']);
			$this->title .= '::' . $user_info['name'];
			$this->content = $this->Template('v/v_info.php', array('username' => $user_info['name'], 'userlogin' => $user_info['login']));
		}

		public function action_reg() {

			$this->title .= '::Регистрация';
			$this->content = $this->Template('v/v_reg.php', array());

			if($this->isPost()) {
				$new_user = new M_User();
				$result = $new_user->newR($_POST['name'], $_POST['login'], $_POST['password']);
				if ($result) {
					$this->content = $this->Template('v/v_reg.php', array('text' => $result));
				} else {
					$this->content = $this->Template('v/v_reg.php', array('text' => $result));
				}
			}
		}

		public function action_auth() {
			$this->title .= '::Авторизация';
			$this->content = $this->Template('v/v_auth.php', array());

			if($this->isPost()) {
				$login = new M_User();
				$result = $login->login($_POST['login'], $_POST['password']);
				$this->content = $this->Template('v/v_auth.php', array('text' => $result));

			}
		}

		public function action_logout() {
			$logout = new M_User();
			$result = $logout->logout();
		}
	}
?>
