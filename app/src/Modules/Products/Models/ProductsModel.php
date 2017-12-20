<?php
namespace App\Modules\Products\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Validation;

class ProductsModel extends Model{
    public $timestamps = false;
    private $errors;
    
    protected $table = 'products';
    protected $fillable = ['id', 'category', 'name','price', 'discount', 'desc', 'create_at', 'update_at'];

}