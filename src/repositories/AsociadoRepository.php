<?php
namespace App\Repositories;

use App\Models\asociadoModel;
use App\Models\InformacionGeneralModel;
use App\Models\FolioPedimentoModel;
use PDO;

class AsociadoRepository
{
    private static function connect()
    {
        $server = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHAR;
        $pdo = new PDO($server, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function getPersonalById($user_id)
    {
        try {
            $pdo = self::connect();
            $sql = "SELECT id, username, email, id_role, id_status, created_at 
                    FROM aaausers 
                    WHERE id = :id AND id_role = :role";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $user_id, ':role' => 9]);

            $result = $stmt->fetch(PDO::FETCH_OBJ);

            if ($result) {
                $personal = new asociadoModel();
                $personal->loadFromArray((array) $result);
                return $personal;
            }

            return null;

        } catch (\Exception $e) {
            error_log("Error en getPersonalById: " . $e->getMessage());
            return null;
        }
    }

    public static function obtenerInformacionGeneral($user_id)
    {
        try {
            $pdo = self::connect();
            $sql = "SELECT * FROM informacion_general WHERE user_id = :user_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':user_id' => $user_id]);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $model = new InformacionGeneralModel();
                $model->loadFromArray($result);
                return $model;
            }

            return null;

        } catch (\Exception $e) {
            error_log("Error en obtenerInformacionGeneral: " . $e->getMessage());
            return null;
        }
    }

    public static function existeInformacionGeneral($user_id)
    {
        try {
            $pdo = self::connect();
            $sql = "SELECT COUNT(*) as total FROM informacion_general WHERE user_id = :user_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':user_id' => $user_id]);

            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result && $result->total > 0;

        } catch (\Exception $e) {
            error_log("Error en existeInformacionGeneral: " . $e->getMessage());
            return false;
        }
    }
    public static function listPedimentos()
    {
        try {
            $pdo = self::connect();
            $sql = "SELECT id, folio, patente, nombre_completo, Estatus, fecha 
                FROM folio_pedimento";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (\Exception $e) {
            error_log("Error en listPedimentos: " . $e->getMessage());
            return [];
        }
    }

}