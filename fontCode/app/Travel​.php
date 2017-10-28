<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel​ extends Model
{
	public $timestamps = false;
	public $created_at = false;
	protected $table = "travels";
    protected $fillable = ['Name', 'Phone', 'DateFrom', 'DateTo', 'Origin', 'Destination', 'NumberPeople'];
}