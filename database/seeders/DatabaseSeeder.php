<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pagina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        /* Laravel Seeders*/

        $user = new User();
        $user->name = 'Alejandro Góngora Escalante';
        $user->email = 'agongoraescalante@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        Pagina::factory(100)->create();
       /* $this->call([
            PaginasSeeder::class
        ]);*/






    }
}
