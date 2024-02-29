<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_users'; //Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'id_user'; //Mendefinisikan primary key dari tabel yang digunakan oleh model ini
}
