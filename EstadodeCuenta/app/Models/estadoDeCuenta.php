<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estadoDeCuenta extends Model
{
    
    protected $table = 'estadoDeCuenta';
    protected $fillable =['id','idSucursal','idCliente','idResponsable','fecha','hora','fechaMovimiento','tipoMovimiento','descripcion','formaPago','cuentaBancaria','monto','operacionEdoResultados','modulo'];
}
