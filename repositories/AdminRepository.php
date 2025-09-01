<?php

namespace App\Repositories;

use App\Models\AdminModel;
use App\Models\AndenNModel;
use App\Models\InventarioModel;
use App\Models\ModalModel;
use App\Models\UserModel;
use App\Models\JobInfoModel;
use App\Models\UsersModel;
use App\Models\UsuarioModel;
use App\Models\ContactosModel;
use App\Models\AndenSModel;


class AdminRepository extends BaseRepository
{
    protected static $model = JobInfoModel::class;
    protected static $usuario = UsuarioModel::class;

    public static function getAdminList()
    {
        $admin = new AdminModel();
        return $admin->select(
            '*',
            null,
            false
        );
    }

    /* usuarios */

    public static function setUsers(UsersModel $users, array $data)
    {
        if (isset($data['username'])) {
            $users->setUsername($data['username']);
        }
        if (isset($data['email'])) {
            $users->setEmail($data['email']);
        }
        if (isset($data['role'])) {
            $users->setRole($data['role']);
        }
        $users->insert();
    }
    public static function setUsuario(UsuarioModel $regis, array $data)
    {
        if (isset($data['usuario'])) {
            $regis->setUsuario($data['usuario']);
        }
        if (isset($data['email'])) {
            $regis->setEmail($data['email']);
        }
        if (isset($data['contraseña'])) {
            $regis->setContraseña($data['contraseña']);
        }
        if (isset($data['codigo_qr'])) {
            $regis->setCodigo($data['codigo_qr']);
        }
        if (isset($data['status'])) {
            $regis->setStatus($data['status']);
        }
        $regis->insert();
    }
    public static function getUserList()
    {
        $users = new UsersModel();
        return $users->select(
            '*',
            null,
            false
        );
    }
    public static function newUsers()
    {
        return new UsersModel();
    }
    public static function registrarU()
    {
        return new UsuarioModel();
    }
    /* termina usuarios */

    /* Empieza avisos */
    public static function setAviso(ModalModel $aviso, array $data)
    {
        if (isset($data['title'])) {
            $aviso->setTitle($data['title']);
        }
        if (isset($data['description'])) {
            $aviso->setDescription($data['description']);
        }
        if (isset($data['image'])) {
            $aviso->setImage($data['image']);
        }
        if (isset($data['visible'])) {
            $aviso->setVisible($data['visible']);
        }
        if (isset($data['id_category'])) {
            $aviso->setIdCategory($data['id_category']);
        }
        $aviso->insert();
    }
    public static function addAviso()
    {
        return new ModalModel();
    }
    public static function getModalList()
    {
        $modal = new ModalModel();
        return $modal->select(
            '*',
            null,
            false
        );
    }
    /* termina avisos */
    /* andenes */
    public static function getAndenList()
    {
        $andenN = new AndenNModel();
        $filters = [
            'where' => 'patente = ? AND cd_dependiente = ?',
            'replaces' => [$_SESSION['patente'] ?? '', $_SESSION['cd_dependiente'] ?? '']
        ];
        return $andenN->select('*', $filters, false);
    }

    public static function getValidar($patente, $cd_dependiente)
    {
        $andenN = new AndenNModel();
        $filters = [
            'where' => 'patente = ? AND cd_dependiente = ?',
            'replaces' => [$patente, $cd_dependiente]
        ];

        $result = $andenN->select('*', $filters, false);
        return !empty($result);
    }
    /* andenes sanpedrito*/
    public static function getAndensList()
    {
        $andenS = new AndenSModel();
        $filters = [
            'where' => 'patente = ? AND cd_dependiente = ?',
            'replaces' => [$_SESSION['patente'] ?? '', $_SESSION['cd_dependiente'] ?? '']
        ];
        return $andenS->select('*', $filters, false);
    }

    public static function getValidars($patente, $cd_dependiente)
    {
        $andenS = new AndenNModel();
        $filters = [
            'where' => 'patente = ? AND cd_dependiente = ?',
            'replaces' => [$patente, $cd_dependiente]
        ];

        $result = $andenS->select('*', $filters, false);
        return !empty($result);
    }
    /* termina andenes */
    
    /* Empieza jobs */
    public static function setJob(JobInfoModel $job, array $data)
    {
        if (isset($data['title'])) {
            $job->setTitle($data['title']);
        }
        if (isset($data['description'])) {
            $job->setDescription($data['description']);
        }
        if (isset($data['image'])) {
            $job->setImage($data['image']);
        }
        if (isset($data['vacancy'])) {
            $job->setVacancy($data['vacancy']);
        }
        if (isset($data['resposabilities'])) {
            $job->setResponsabilities($data['resposabilities']);
        }
        if (isset($data['education'])) {
            $job->setEducation($data['education']);
        }
        if (isset($data['experience'])) {
            $job->setExperience($data['experience']);
        }
        if (isset($data['additional'])) {
            $job->setAdditional($data['additional']);
        }
        $job->insert();
    }
    public static function listJobs()
    {
        $jobs = new JobInfoModel();
        return $jobs->select(
            'j.id, j.title, j.description, j.image, j.vacancy, j.responsabilities, j.education, j.experience, j.additional, j.workexperience, j.salary, j.contract_type, j.benefits, j.location, j.id_status, j.deadline, j.created_at, j.updated_at',
            null,
        );
    }
    public static function newProduc()
    {
        return new InventarioModel();
    }
    public static function setProduc(InventarioModel $invent, array $data)
    {
        if (isset($data['nombre'])) {
            $invent->setNombre($data['nombre']);
        }
        if (isset($data['cantidad'])) {
            $invent->setCantidad($data['cantidad']);
        }
        if (isset($data['descripcion'])) {
            $invent->setDescripcion($data['descripcion']);
        }
        if (isset($data['fecha_ingreso'])) {
            $invent->setFechaIngreso($data['fecha_ingreso']);
        }
        $invent->insert();
    }
    public static function newJob()
    {
        return new JobInfoModel();
    }
    public static function editJob()
    {
        return new JobInfoModel();
    }
    public static function findJob($id)
    {
        $job = new JobInfoModel();
        return $job->select(
            '*',
            "id = $id",
            true
        );
    }
    public static function delJob($job)
    {
        $job->delete();
    }
    /* termina jobs */

    /* Empieza contactos */
    public static function setContac(ContactosModel $contacto, array $data)
    {
        if (isset($data['nombre'])) {
            $contacto->setNombre($data['nombre']);
        }
        if (isset($data['email'])) {
            $contacto->setEmail($data['email']);
        }
        if (isset($data['foto'])) {
            $contacto->setFoto($data['foto']);
        }
        if (isset($data['telefono'])) {
            $contacto->setTelefono($data['telefono']);
        }
        if (isset($data['patente'])) {
            $contacto->setPatente($data['patente']);
        }
        if (isset($data['r_social'])) {
            $contacto->setRsocial($data['r_social']);
        }

        $contacto->insert();
    }
    public static function addContact()
    {
        return new ContactosModel();
    }
    public static function ContactosList()
    {
        $contacts = new ContactosModel();
        return $contacts->select('*', null, );
    }
    public static function validarPatente()
    {
        $model = new ContactosModel();

        // Verificar si se está enviando la patente desde el formulario
        if (isset($_POST['patente']) && !empty($_POST['patente'])) {
            $patente = $_POST['patente'];

            // Realizar la consulta para buscar la patente en la base de datos
            $resultado = $model->select('*', ['patente' => $patente]);

            // Si el resultado contiene datos, devolverlo, de lo contrario, devolver null
            return !empty($resultado) ? $resultado : null;
        }

        return null;
    }
    /* termina contactos */
    public static function getUsuarioList()
    {
        $usuario = new UsuarioModel();
        return $usuario->select(
            '*',
            null,
            false
        );
    }
    public static function findUser($id)
    {
        $user = new UserModel();
        return $user->select(
            '*',
            "id = $id",
            true
        );
    }
}