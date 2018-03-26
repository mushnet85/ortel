<?php

namespace App\Handset_model;

use Illuminate\Database\Eloquent\Model;

class Handset extends Model
{
    public function FetchAllHandsets()
    {

        $handsets = Handset::select('id','manufacturer','memory','model','color')->get();

         return $handsets;

    }
}
