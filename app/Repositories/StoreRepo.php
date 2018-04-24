<?php

namespace App\Repositories;
use App\Models\Store;

class StoreRepo
{

    public function StoreSelectData()
    {
        $stores = Store::select('id','store')->get();

        $selectData = [];

        foreach ($stores as $store)
        {
            $selectData[$store->id] = $store->store;
        }

        return $selectData;

    }

}