<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' =>'hany',
            'email'=>'hany@gmail.com',
            'password'=> bcrypt('123456'),
         ] );
    }
}
