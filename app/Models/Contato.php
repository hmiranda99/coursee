<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    public function lista()
    {
        return (object)[
            'name' => 'Helena',
            'contact' => '11 9 1234-5678'
        ];
    }
}
