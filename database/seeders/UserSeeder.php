<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Exception;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            User::factory()
                ->create([
                    'name' => 'Admin',
                    'email' => 'admin@laravel-livewire.local'
                ]);
        } catch(Exception $e) {}
        

        User::factory()
            ->count(100)
            ->create();
    }
}
