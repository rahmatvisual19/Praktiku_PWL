<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nip extends Model
{
    use HasFactory;

    protected $table = 'nip';

    protected $primaryKey = 'id_nip';

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
