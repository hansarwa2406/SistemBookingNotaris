<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaris extends Model
{
    use HasFactory;
    protected $table = 'notaris';
    protected $primaryKey = 'id';

    protected $fillable = [
        'NIN','NamaNotaris','Alamat','Tlp','Jabatan'
    ];
}
