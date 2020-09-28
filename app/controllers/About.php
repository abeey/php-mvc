<?php
class About extends Controller
{

    function index($nama = 'Febri', $divisi = 'TI')
    {
        $this->view('templates/header');
        $this->view('about/index');
        $this->view('templates/footer');
    }

    function page()
    {
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
