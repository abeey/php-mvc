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

    public function tambah()
    {
        if ($this->model('User_m')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/User');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/User');
            exit;
        }
    }

    public function hapus($id_user)
    {
        if ($this->model('User_m')->hapusDataUser($id_user) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/User');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/User');
            exit;
        }
    }

    public function getUser()
    {
        $id_user = $_POST['id_user'];
        echo json_encode($this->model('User_m')->getUserById($id_user));
    }

    public function editUser()
    {
        if ($this->model('User_m')->editDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/User');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/User');
            exit;
        }
    }

    function cari()
    {
        $data['user'] = $this->model('User_m')->cariUser();

        $this->view('templates/header');
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
}
