<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name'=>'admin_sistem',
            'display_name' => 'Admin Sistem',
            'description' => 'Mengelola seluruh aspek manajemen Sistem',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
