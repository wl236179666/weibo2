<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //关闭安全保护
         Model::unguard();
         $this->call(UsersTableSeeder::class);
         //打开安全保护
         Model::reguard();
    }
}
