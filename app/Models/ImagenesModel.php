<?php namespace App\Models;

use CodeIgniter\Model;

class ImagenesModel extends Model
{
    protected $table      = 'fotossalidas';
    protected $primaryKey = 'idFoto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idSalida', 'direcFoto'];

}