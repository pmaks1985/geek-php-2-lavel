<?php
include_once 'm/M_User.php';

abstract class C_Base extends C_Controller
{
    protected $title;        // заголовок страницы
    protected $content;        // содержание страницы

    protected function before()
    {
        $this->title = 'Тест сайт';
        $this->content = '';
    }

    //
    // Генерация базового шаблонаы
    //

    public function render()
    {
        $get_user = new M_User();
        if (isset($_SESSION['user_id'])) {
            $user_info = $get_user->get($_SESSION['user_id']);
        } else {
            $user_info['name'] = false;
        }
        $vars = array('title' => $this->title, 'content' => $this->content, 'user' => $user_info['name']);
        $page = $this->Template('v/v_main.php', $vars);
        echo $page;
    }
}
