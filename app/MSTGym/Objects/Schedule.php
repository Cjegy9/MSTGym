<?php namespace MSTGym\Objects;


class Schedule extends \Eloquent {

    protected $table = 'schedules';

    public $timestamps = false;

    protected $guarded = array('id');

    protected $fillable = array('employee_id', 'day', 'start', 'end');

    public function Employee()
    {
        return $this->hasOne('MSTGym\Objects\Employee', 'id', 'employee_id');
    }
}