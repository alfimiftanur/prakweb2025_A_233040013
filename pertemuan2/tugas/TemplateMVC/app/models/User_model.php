<?php

class User_model
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addUser($data)
    {
        $name = isset($data['name']) ? $data['name'] : ($data['nama'] ?? '');
        $email = $data['email'] ?? '';

        $query = "INSERT INTO " . $this->table . " (name, email) VALUES (:name, :email)";
        $this->db->query($query);
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateUser($id, $data)
    {
        $name = isset($data['name']) ? $data['name'] : ($data['nama'] ?? '');
        $email = $data['email'] ?? '';

        $query = "UPDATE " . $this->table . " SET name = :name, email = :email WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
