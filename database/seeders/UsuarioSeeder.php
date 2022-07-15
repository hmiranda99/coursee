<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Mateus da Silveira Costa',
            'email' => 'm@gmail.com',
            'password' => bcrypt('1234')
        ];

        if (User::where('email', '=', $data['email'])->count()) {
            $user = User::where('email', '=', $data['email'])->first();
            $user->update($data);
            echo  "Usuário alterado!";
        } else {
            User::create($data);
            echo  "Usuário criado!";
        }
    }
}
