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

        $this->db->query('SELECT * FROM user LIMIT 5');
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
}
