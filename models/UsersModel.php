<?php 

namespace App\Models;

use App\Models\EntityModel;

class UsersModel extends EntityModel
{
    protected $table = "aaausers";
    protected $alias = "u";
    private ?int $id = null;
    private string $username = "";
    private string $email = "";
    private string $password = "";
    private string $created_at = "";
    private string $updated_at = "";
    private string $role = "";

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
        $this->username = ucwords($username);
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = strtolower($email);
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
     public function getRole()
    {
         return $this->role;
     }
    public function setRole(string $role)
     {
        $this->role = $role;
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
    public function insert()
    {
        $this->connect();
    
        $sql = "INSERT INTO " . $this->table . " (username, email, role) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute([
            $this->getUsername(),
            $this->getEmail(),
            $this->getRole(),
        ]);
    }
}