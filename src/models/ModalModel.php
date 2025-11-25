<?php

namespace App\Models;

use App\Models\EntityModel;

class ModalModel extends EntityModel
{
    protected $table = "aaamodal";
    protected $alias = "m";
    private ?int $id = null;
    private string $title = "";
    private string $description = "";
    private string $image = "";
    private ?int $visible = null;
    private ?int $id_category = null;
    private string $created_at = "";
    private string $updated_at = "";

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage(string $image)
    {
        $this->image = $image;
    }
    public function getVisible()
    {
        return $this->visible;
    }
    public function setVisible(int $visible)
    {
        $this->visible = $visible;
    }
    public function getIdCategory()
    {
        return $this->id_category;
    }
    public function setIdCategory(int $id_category)
    {
        $this->id_category = $id_category;
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

    $sql = "INSERT INTO " . $this->table . " (title, description, image, visible, id_category, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
    $stmt = $this->pdo->prepare($sql);
    
    $result = $stmt->execute([
        $this->getTitle(),
        $this->getDescription(),
        $this->getImage(),
        $this->getVisible(),
        $this->getIdCategory(),
    ]);
    
    // Debug: verificar si se insertó correctamente
    if ($result) {
        echo "Registro insertado correctamente<br>";
        echo "ID insertado: " . $this->pdo->lastInsertId() . "<br>";
    } else {
        echo "Error al insertar registro<br>";
        print_r($stmt->errorInfo());
    }
    
    return $result;
}
}
