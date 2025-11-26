<?php

namespace App\Repositories;

use App\Models\ModalModel;
use App\Models\JobInfoModel;
use App\Models\UserModel;

class PublicRepository
{

    public static function listModal()
    {
        $modal = new ModalModel();
        return $modal->select(
            'm.id, m.title, m.description, m.image, m.visible, m.id_category, m.created_at, m.updated_at',
            [
                'where' => 'm.visible = :visible and m.id_category = :id_category',
                'replaces' => [':visible' => 1, ':id_category' => 1]
            ],
        );
    }

    public static function getJobs()
    {
        $job = new JobInfoModel();
        return $job->select(
            '*',
            [
                'where' => 'j.id_status = 1'
            ],
            false
        );
    }
    public static function getJob(int $id)
    {
        $job = new JobInfoModel();
        return $job->select(
            '*',
            [
                'where' => "j.id = $id"
            ],
            true
        );
    }

    public static function getUsers()
    {
        $user = new UserModel();
        return $user->select(
            'u.id_user, u.username, u.email, u.password, u.id_role, u.created_at, u.updated_at',
            null,
            false
        );
    }
}
