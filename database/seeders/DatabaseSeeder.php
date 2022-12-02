<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'id' => app('snowflake')->id(),
            'username' => 'root',
            'password' => bcrypt('root'),
            'is_root' => 1,
        ];

        Admin::insert($admin);
    }
}
