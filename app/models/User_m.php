<?php
class User_m
{

    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {

        $this->db->query('SELECT * FROM user');
        return $this->db->resultAll();
    }

    public function getUserById($id_user)
    {
        $this->db->query("SELECT * FROM user WHERE id_user=:id_user");
        $this->db->bind('id_user', $id_user);
        return $this->db->resultRow();
    }

    public function tambahDataUser($data)
    {
        $level = 'pegawai';
        $query = "INSERT INTO user(id_user,password,level) VALUES (:id_user,:password,:level)";

        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('password', $data['passw']);
        $this->db->bind('level', $level);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataUser($id_user)
    {
        $query = "DELETE FROM user WHERE id_user=:id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function editDataUser($data)
    {
        $level = 'pegawai';
        $query = "UPDATE user SET id_user=:id_user, password=:password ,level=:level WHERE id_user=:id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('password', $data['passw']);
        $this->db->bind('level', $level);

        $this->db->execute();
        return $this->db->rowCount();
    }

    function cariUser()
    {
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM user WHERE id_user LIKE :keyword";
        $this->db->query($query);

        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultAll();
    }
}
