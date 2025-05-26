<?php

namespace Database\Seeders;
use App\Models\Permission;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'manage-user',
            'display_name' => 'Kelola Pengguna',
            'description'=> 'Menambahkan dan memperbarui user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
