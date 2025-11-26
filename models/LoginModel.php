<?php

namespace App\Models;

use App\Models\EntityModel;

class LoginModel extends EntityModel
{
    protected $table = "aaausers";
    protected $alias = "u";
    private ?int $id = null;
    private string $username = "";
    private string $email = "";
    private string $password_hash = "";
    private string $created_at = "";
    private string $updated_at = "";

    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername(string $username)
    {
        $this->username = $username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password_hash;
    }
    public function setPassword(string $password)
    {
        $this->password_hash = $password;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function setCreatedAt(string $created_at)
    {
        $this->created_at = $created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    public function setUpdatedAt(string $updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
