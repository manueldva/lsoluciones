<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
		 'nombre', 'direccion', 'cuit', 'ingresosbrutos', 'inicioactividades', 'file', 'cellPhone', 'phone','observations','warranty','observationguarantee','letras'
	];
}
