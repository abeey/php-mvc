<?php

class Home extends Controller
{
    function index()
    {

        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
