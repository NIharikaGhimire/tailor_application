<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'admin',
            'email' => 'admin@gmail.com',
            'password'=>'$2y$10$iEyVueGSude.UuoO7A2aaues2hPTtISUuxJVjL7FZ/hAEjtQ5vddq',
            // password
        ]);
    }
}
