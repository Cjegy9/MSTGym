<?php namespace MSTGym;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends \Eloquent implements UserInterface, RemindableInterface{
    use UserTrait, RemindableTrait;

    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = array('first_name', 'last_name', 'middle_initial', 'd_o_b', 'street', 'city', 'state', 'zip_code', 'email', 'password', 'membership', 'admin', 'card_name', 'card_number', 'card_exp', 'card_type');

    public function createUser()
    {
        DB::insert(\DB::raw("INSERT INTO users (first_name, last_name, middle_initial, d_o_b, street, city, state, zip_code, email, password, membership, admin, card_name, card_number, card_exp, card_type) VALUES
                    (" . $this->attributes['first_name'] . "," . $this->attributes['last_name'] . "," . $this->attributes['middle_initial'] . "," . $this->attributes['d_o_b'] . "," . $this->attributes['street'] . "," . $this->attributes['city'] .
            "," . $this->attributes['state'] . "," . $this->attributes['zip_code'] . "," . $this->attributes['email'] . "," . $this->attributes['password'] . "," . $this->attributes['membership'] . "," . $this->attributes['admin'] .
            "," . $this->attributes['card_name'] . "," . $this->attributes['card_number'] . "," . $this->attributes['card_exp'] . "," . $this->attributes['card_type'] . ");"));
    }
}