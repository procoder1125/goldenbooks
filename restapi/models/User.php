<?php
namespace restapi\models;

class User extends \common\models\User
{
    public function fields()
    {
        return [
            'id',
            'username',
            'email',
            'holat' => 'status',
           // 'role',
            // 'qiymat' => function($model){
            //     return $model->email .'/'. $model->role;
            // }
        ];

    }
}


?>