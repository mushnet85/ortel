<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepo
{

    protected $roleModel;


    public function __construct(Role $role)
    {

        $this->roleModel = $role;

    }

public function RolesSelectData()
{

    $roles= $this->roleModel->select('id','name')->get();

    $selectData = [];

    foreach ($roles as $role)
    {
        $selectData[$role->id] = $role->name;
    }


    return $selectData;

}


}