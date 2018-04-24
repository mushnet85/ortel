<?php

namespace App\Repositories;

use App\Models\Handset;

class HandsetRepo
{

    protected $handsetModel;


    public function __construct(Handset $handset)
    {

        $this->handsetModel = $handset;

    }

public function HandsetSelectData()
{

    $handsets= $this->handsetModel->select('id','manufacturer','memory','model','color')->get();

    $selectData = [];

    foreach ($handsets as $handset)
    {
        $selectData[$handset->id] = $handset->manufacturer." ".$handset->model." ".$handset->memory." GB ".$handset->color;
    }


    return $selectData;

}


}

