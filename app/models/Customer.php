<?php
/**
 * Created by PhpStorm.
 * User: menakafernando
 * Date: 10/6/18
 * Time: 6:23 PM
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent{


    public $timestamps = [];

    protected $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'street',
        'house_number',
        'zip',
        'city',
        'account_number',
        'iban',
        'payment_id'

    ];


}