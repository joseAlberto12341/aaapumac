<?php 

namespace App\Repositories;

use App\Models\UsersModel;

class LoginRepository extends BaseRepository
{
    public static function getUser(string $email, string $password)
    {
        $user = new UsersModel();
        return $user->select(
            'u.id, u.username, u.email, u.password',
            [
                'where' => "u.email = :email OR u.username = :email AND u.password = :password",
                'replaces' => [
                    ':email' => $email, 
                    ':password' => $password
                ],
                // 'sql' => true,
            ],
            true
        );
    }
}