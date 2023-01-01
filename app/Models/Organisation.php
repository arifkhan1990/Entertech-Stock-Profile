<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
	protected $connection = 'mysql2';
    protected $table='organisations';
}
