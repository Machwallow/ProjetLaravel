<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

abstract class DAO extends Model
{
    public abstract function creerObjetMetier(\stdClass $objet);
}
