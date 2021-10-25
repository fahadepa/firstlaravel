<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstUser extends Model
{
    use HasFactory;
    protected $fillable=[
        'fname',
        'lname',
        'male',
        'female',
        'r_num',
        'class',
    ];

    public static function input()
    {
        $data1=self::all();
        return $data1;
    }
    public static function index(){
    $data1=self ::all();
    return $data1;
}
    public static function add($data1){
        $data = new self;
        $data->fname =$data1['fname'];
        $data->lname =$data1['lname'];
        $data->r_num =$data1['r_num'];
        $data->class =$data1['class'];
        $data->save();
    }

}
