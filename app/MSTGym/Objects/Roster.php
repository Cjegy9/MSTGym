<?php namespace MSTGym\Objects;


class Roster extends \Eloquent {

    protected $table = 'rosters';

    public $timestamps = false;

    protected $guarded = array('id');

    protected $fillable = array('member_id', 'class_id');

    public function GymClass()
    {
        return $this->hasOne('MSTGym\Objects\GymClass', 'class_id', 'id');
    }

    public function Member()
    {
        return $this->hasOne('MSTGym\User', 'member_id', 'id');
    }
}