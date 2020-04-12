<?php

use Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
      Schema::disableForeignKeyConstraints();
      DB::table('roles')->truncate();
      Schema::enableForeignKeyConstraints();
      Role::insert([
      [
         'name'       => 'Advocate',
         'created_at' => date('Y-m-d H:i:s'),
         'updated_at' => date('Y-m-d H:i:s')
      ],
      [
         'name' => 'Client',
         'created_at' => date('Y-m-d H:i:s'),
         'updated_at' => date('Y-m-d H:i:s')
      ],
     ]);    
    }

}
