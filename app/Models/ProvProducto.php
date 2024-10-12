<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProvProducto
 * 
 * @property int $idProveedor
 * @property int $idProducto
 *
 * @package App\Models
 */
class ProvProducto extends Model
{
	protected $table = 'prov_productos';
	protected $primaryKey = 'idProducto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idProveedor' => 'int',
		'idProducto' => 'int'
	];

	protected $fillable = [
		'idProveedor'
	];
}
