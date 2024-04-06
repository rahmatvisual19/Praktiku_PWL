<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';

    public function ktm(){
        return $this->hasOne(Ktm::class, 'id_mahasiswa');
    }
}


//isi database yang berhubungan dengan dosen, boleh pake one to one atau one to many 
//isi data dosen, minimal 4 data