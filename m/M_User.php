<?php
include_once 'config/connect.php';

class M_User
{
    private $connect;

    public $user_id, $user_login, $user_name, $user_password;

    public function __construct()
    {
        $this->connect = new PDO(DRIVER . ':host=' . HOST . ';dbname=' . NAME, USER, PASS);
    }

    public function pass($name, $password)
    {
        return strrev(md5($name)) . md5($password);
    }

    public function get($id)
    {
        return $this->connect->query("SELECT * FROM users WHERE id = '" . $id . "'")->fetch();
    }

    public function newR($name, $login, $password)
    {
        $user = $this->connect->query("SELECT * FROM users WHERE login = '" . $login . "'")->fetch();
        if (!$user) {
            $this->connect->exec("INSERT INTO users VALUES (null, '" . $name . "', '" . $login . "', '" . $this->pass($name, $password) . "')");
            return true;
        }
        return false;
    }

    public function login($login, $password)
    {
        $user = $this->connect->query("SELECT * FROM users WHERE login = '" . $login . "'")->fetch();
        if ($user) {
            if ($user['password'] == $this->pass($user['name'], strip_tags($password))) {
                $_SESSION['user_id'] = $user['id'];
                return 'Добро пожаловать в систему, ' . $user['name'] . '!';
            } else {
                return 'Пароль не верный!';
            }
        } else {
            return 'Пользователь с таким логином не зарегистрирован!';
        }
    }

    public function logout()
    {
        if (isset($_SESSION["user_id"])) {
            session_destroy();
            return true;
        }
        return false;

    }
}

?>