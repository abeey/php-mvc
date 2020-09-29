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
}
