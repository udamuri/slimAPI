<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class PhotoModel extends Model{
    public $timestamps = false;
    protected $table = 'photos';
    protected $fillable = ['id','title','image', 'slug'];

    public function generateRandomString($length = 10) {
	    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}
}