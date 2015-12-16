<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
	protected $table = "dosen";

	protected $primaryKey = "id_dosen";	

	protected $fillable = ['nip_dosen','nama_dosen'];      
}
