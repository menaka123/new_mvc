<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Attribute extends Eloquent{


    public $timestamps = [];

    protected $fillable = [
        'user_id',
        'name',
        'value'
    ];


}