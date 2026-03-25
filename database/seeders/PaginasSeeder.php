<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Carlos Abraham Ojeda Pereira';
        $user->email = 'agongoraescalante123@gmail.com';
        $user->password = bcrypt('123');
        $user->save();
    }
}
