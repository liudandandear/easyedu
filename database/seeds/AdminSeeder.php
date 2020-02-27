<?php

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
        $adminUser = [
            'name' => '超级管理员',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ];
        if (!\App\Models\Admin::where('email', $adminUser['email'])->first()) {
            $adminUser = new \App\Models\Admin($adminUser);
            $adminUser->save();
        }
    }
}
