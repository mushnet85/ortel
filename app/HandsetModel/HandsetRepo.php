<?php

namespace App\HandsetModel;

use App\HandsetModel\Handset;

class HandsetRepo
{

    protected $handsetModel;

    protected $handset;

    public function __construct()
    {

        $this->handsetModel = new Handset;

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

