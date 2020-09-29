<?php
class User extends Controller
{
    function index()
    {
        $data['user'] = $this->model('User_m')->getUser();

        $this->view('templates/header');
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id_user)
    {
        $data['user'] = $this->model('User_m')->getUserById($id_user);
        $data['id_user'] = $id_user;

        $this->view('templates/header');
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }
}
