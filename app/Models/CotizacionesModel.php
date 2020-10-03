<?php namespace App\Models;

use CodeIgniter\Model;

class CotizacionesModel extends Model
{
    protected $table      = 'cotizaciones';
    protected $primaryKey = 'idCotizacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombreCoti', 'correoCoti','celularCoti','direccionCoti','destino','diaSalida','cantPersonas','cantNinos','	diaSalida','cantDias','mensajeCoti'];

}