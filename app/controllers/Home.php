<?php

class Home extends Controller
{
    function index()
    {
        $data['nama'] = $this->model('User_m')->getUser();

        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
