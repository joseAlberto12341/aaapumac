<?php

namespace App\Models;

use App\Models\EntityModel;

class InventarioModel extends EntityModel
{
    protected $table = "inventario";
    protected $alias = "i";
    private ?int $id = null;
    private string $nombre = '';
    private string $cantidad = '';
    private string $descripcion = '';
    private string $fecha_ingreso = '';

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getCantidad(): string
    {
        return $this->cantidad;
    }
    public function setCantidad(string $cantidad): void
    {
        $this->cantidad = $cantidad;
    }
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    public function getFechaIngreso(): ?string
    {
        return $this->fecha_ingreso;
    }
    public function setFechaIngreso(string $fecha_ingreso): void
    {
        $this->fecha_ingreso = $fecha_ingreso;
    }
    /*metodo para obtener los productos */
    public function obtenerProductos(): array
    {
        return $this->select("*", [], false);
    }

    public function aumentarCantidad(int $id, int $cantidad): bool
    {
        $setClause = "cantidad = cantidad + :cantidad";
        $options = [
            'where' => 'id = :id',
            'replaces' => [
                ':cantidad' => $cantidad,
                ':id' => $id,
            ]
        ];

        $this->update($id, $setClause, $options);
        return true;
    }
    
    public function disminuirCantidad(int $id, int $cantidad): bool
    {
        $setClause = "cantidad = cantidad - :cantidad";
        $options = [
            'where' => 'id = :id',
            'replaces' => [
                ':cantidad' => $cantidad,
                ':id' => $id,
            ]
        ];

        $this->update($id, $setClause, $options);
        return true;
    }
    public function insert()
    {
        $this->connect();

        if (empty($this->fecha_ingreso)) {
            $this->fecha_ingreso = date('Y-m-d H:i:s');
        }

        $sql = "INSERT INTO " . $this->table . " (nombre, cantidad, descripcion, fecha_ingreso ) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            $this->getNombre(),
            $this->getCantidad(),
            $this->getDescripcion(),
            $this->getFechaIngreso(),
        ]);
    }
}
