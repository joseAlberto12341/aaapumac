<?php

namespace App\Models;

use App\Models\EntityModel;

class UsuarioModel extends EntityModel
{

    protected $table = "usuarios";
    protected $alias = "f";
    private ?int $id = null;
    private string $usuario = "";
    private string $email = "";
    private string $contraseña = "";
    private string $codigo_qr = "";
    private string $status = "";


    public function getId()
    {
        return $this->id;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario(string $usuario)
    {
        $this->usuario = $usuario;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getContraseña()
    {
        return $this->contraseña;
    }
    public function setContraseña(string $contraseña)
    {
        $this->contraseña = $contraseña;
    }
    public function getCodigo()
    {
        return $this->codigo_qr;
    }
    public function setCodigo(string $codigo_qr)
    {
        $this->codigo_qr = $codigo_qr;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function insert()
    {
        $this->connect();
    
        $sql = "INSERT INTO " . $this->table . " (usuario, email, contraseña, codigo_qr, status) VALUES (?, ?, ?, ?,?)";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute([
            $this->getUsuario(),
            $this->getEmail(),
            $this->getContraseña(),
            $this->getCodigo(),
            $this->getStatus(),
        ]);
    }
}