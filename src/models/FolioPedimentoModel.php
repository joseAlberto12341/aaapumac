<?php
namespace App\Models;

use App\Models\EntityModel;

class FolioPedimentoModel extends EntityModel
{
    protected $table = "folio_pedimento";
    protected $alias = "f";
    private ?int $id = null;
    private ?int $user_id = null;
    private string $pedimento = "";
    private string $tipo_operacion = "";
    private string $clave_pedimento = "";
    private string $CR = "";
    private string $fecha = "";
    private string $patente = "";
    private string $agente_aduanal = "";
    private string $razon_social = "";
    private string $telefono = "";
    private string $nombre_completo = "";
    private string $correo_electronico = "";
    private string $agencia_aduanal = "";
    private string $created_at = "";
    private string $folio = "";
    private string $Estatus = "";

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getUserId(): ?int { return $this->user_id; }
    public function getPedimento(): string { return $this->pedimento; }
    public function getTipoOperacion(): string { return $this->tipo_operacion; }
    public function getClavePedimento(): string { return $this->clave_pedimento; }
    public function getCR(): string { return $this->CR; }
    public function getFecha(): string { return $this->fecha; }
    public function getPatente(): string { return $this->patente; }
    public function getAgenteAduanal(): string { return $this->agente_aduanal; }
    public function getRazonSocial(): string { return $this->razon_social; }
    public function getTelefono(): string { return $this->telefono; }
    public function getNombreCompleto(): string { return $this->nombre_completo; }
    public function getCorreoElectronico(): string { return $this->correo_electronico; }
    public function getAgenciaAduanal(): string { return $this->agencia_aduanal; }
    public function getCreatedAt(): string { return $this->created_at; }
    public function getFolio(): string { return $this->folio; }
    public function getEstatus(): string { return $this->Estatus; }
    
    // Setters
    public function setId(?int $id): void { $this->id = $id; }
    public function setUserId(?int $user_id): void { $this->user_id = $user_id; }
    public function setPedimento(string $pedimento): void { $this->pedimento = $pedimento; }
    public function setTipoOperacion(string $tipo_operacion): void { $this->tipo_operacion = $tipo_operacion; }
    public function setClavePedimento(string $clave_pedimento): void { $this->clave_pedimento = $clave_pedimento; }
    public function setCR(string $CR): void { $this->CR = $CR; }
    public function setFecha(string $fecha): void { $this->fecha = $fecha; }
    public function setPatente(string $patente): void { $this->patente = $patente; }
    public function setAgenteAduanal(string $agente_aduanal): void { $this->agente_aduanal = $agente_aduanal; }
    public function setRazonSocial(string $razon_social): void { $this->razon_social = $razon_social; }
    public function setTelefono(string $telefono): void { $this->telefono = $telefono; }
    public function setNombreCompleto(string $nombre_completo): void { $this->nombre_completo = $nombre_completo; }
    public function setCorreoElectronico(string $correo_electronico): void { $this->correo_electronico = $correo_electronico; }
    public function setAgenciaAduanal(string $agencia_aduanal): void { $this->agencia_aduanal = $agencia_aduanal; }
    public function setCreatedAt(string $created_at): void { $this->created_at = $created_at; }
    public function setFolio(string $folio): void { $this->folio = $folio; }
    public function setEstatus(string $Estatus): void { $this->Estatus = $Estatus; }                

}