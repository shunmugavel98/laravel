<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
	protected $table = 'customer';
    protected $primaryKey = 'id';
    //protected $fillable = ['name', 'address', 'salary'];
}
?>
