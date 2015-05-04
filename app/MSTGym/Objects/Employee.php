<?php namespace MSTGym\Objects;


class Employee extends \Eloquent {

    protected $table = 'employees';

    public $timestamps = false;

    public $guarded = array('id');

    protected $fillable = array('first_name', 'last_name', 'phone_number', 'position', 'pay');

    public function Classes()
    {
        return $this->hasMany('MSTGym\Objects\GymClass', 'employee_id', 'id');
    }

}