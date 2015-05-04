<?php namespace MSTGym\Objects;


class GymClass extends \Eloquent {

    protected $table = 'classes';

    public $timestamps = false;

    protected $guarded = array('id');

    protected $fillable = array('name', 'capacity', 'employee_id', 'start', 'end', 'day');

    public function Employee()
    {
        return $this->hasOne('MSTGym\Objects\Employee', 'id', 'employee_id');
    }

    public function getClassTypeAttribute($value)
    {
        $class_types = array(
            0 => 'None',
            1 => 'Crossfit',
            2 => 'Pilates',
            3 => 'Zumba',
            4 => 'Cycling',
            5 => 'Yoga'
        );

        return $class_types[$value];
    }
}