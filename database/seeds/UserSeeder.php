<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Zone;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrador 1',
            'email' => 'admin1@collectors.com',
            'password' => '$2y$10$4/KHGmhX7GHEuzbWXYF9LubsaDbekj36hfRy/bT5frDh9/wf0DwDG' // 12345678
        ]);
        $admin->assignRole('admin');

        $collector = User::create([
            'name' => 'Recolector 1',
            'email' => 'recolector1@collectors.com',
            'password' => '$2y$10$4/KHGmhX7GHEuzbWXYF9LubsaDbekj36hfRy/bT5frDh9/wf0DwDG' // 12345678
        ]);
        $collector->assignRole('collector');

        $zone = Zone::create(['name' => 'Zona 1']);

        $collector->collector()->create([
            'zone_id' => $zone->id,
            'plate' => '123456',
            'rating' => 0,
            'active' => true
        ]);

        $user = User::create([
            'name' => 'Usuario 1',
            'email' => 'usuario1@collectors.com',
            'password' => '$2y$10$4/KHGmhX7GHEuzbWXYF9LubsaDbekj36hfRy/bT5frDh9/wf0DwDG' // 12345678
        ]);
        $user->assignRole('user');
    }
}
