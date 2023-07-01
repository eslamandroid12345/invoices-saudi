<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1;$i<=38;$i++){

           DB::table('model_has_permissions')->insert([

                'permission_id' => $i,
                'model_type' => 'App\User',
                'model_id' => 1
            ]);
        }
    }
}
