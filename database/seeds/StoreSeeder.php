<?php

use Illuminate\Database\Seeder;

use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = Store::create([
        'store_id' => 'R004',
        'store' => 'Caerphilly',
        'store_address_1' => '17',
        'store_address_2' => 'Castle Court Shopping Centre',
        'store_address_3' => 'Castle St',
        'town' => 'Caerphilly',
        'postcode' => 'CF83 1NU',
        'store_contact_no' => '0845 097 1004',
        ]);

       $store = Store::create([
        'store_id' => 'R020',
        'store' => 'Clifton',
        'store_address_1' => '18',
        'store_address_2' => 'Clifton Down Shopping Centre',
        'store_address_3' => '',
        'town' => 'Bristol',
        'postcode' => 'BS8 2NN',
        'store_contact_no' => '0845 097 1111',
        ]);

      $store = Store::create([
        'store_id' => 'R021',
        'store' => 'Cirencester',
        'store_address_1' => '6E',
        'store_address_2' => 'Cricklade St',
        'store_address_3' => '',
        'town' => 'Cirencester',
        'postcode' => 'GL7 1JH',
        'store_contact_no' => '0845 097 1264',
        ]);
        
        $store = Store::create([
        'store_id' => 'R022',
        'store' => 'Didcot',
        'store_address_1' => '10',
        'store_address_2' => 'Orchard Centre',
        'store_address_3' => 'Station Road',
        'town' => 'Didcot',
        'postcode' => 'OX11 7LL',
        'store_contact_no' => '0845 097 1372',
        ]);

         $store = Store::create([
        'store_id' => 'R023',
        'store' => 'Stroud',
        'store_address_1' => '29',
        'store_address_2' => 'Merrywalks centre',
        'store_address_3' => 'King St',
        'town' => 'Stroud',
        'postcode' => 'GL5 1RR',
        'store_contact_no' => '01453 759615',
        ]);

         $store = Store::create([
        'store_id' => 'R044',
        'store' => 'Yate',
        'store_address_1' => '10',
        'store_address_2' => 'Yate Shopping Centre',
        'store_address_3' => 'E Walk',
        'town' => 'Yate',
        'postcode' => 'BS37 4AS',
        'store_contact_no' => '0845 097 1498',
        ]);

         $store = Store::create([
        'store_id' => '4627',
        'store' => 'Bedminster',
        'store_address_1' => '68-70',
        'store_address_2' => 'East St',
        'store_address_3' => '',
        'town' => 'Bristol',
        'postcode' => 'BS3 4EY',
        'store_contact_no' => '0117 966 1777',
        ]);       
    }
}
