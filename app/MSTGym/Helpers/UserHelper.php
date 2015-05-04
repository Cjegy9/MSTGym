<?php namespace MSTGym\Helpers;

class UserHelper {

    private $mem_level = array(
        0 => '',
        1 => 'Silver - $20',
        2 => 'Gold - $40',
        3 => 'Platinum - $60'
    );

    private $card_type = array(
        0 => 'Visa',
        1 => 'American Express',
        2 => 'MasterCard',
        3 => 'Discover'
    );

    private $employee = array(
        0 => 'Employee',
        1 => 'Brandon Thomas - Trainer',
        2 => 'Danny White',
        3 => 'Rick Henning',
        4 => 'Zach Walters',
        5 => 'David Walsh',
        6 => 'Brittany Baxter',
        7 => 'Sharon Sullivan',
        8 => 'Nora Burns - Manager',
        9 => 'Chris Edwards - Manager'
    );

    private $class_types = array(
        0 => 'Any',
        1 => 'Crossfit',
        2 => 'Pilates',
        3 => 'Zumba',
        4 => 'Cycling',
        5 => 'Yoga'
    );

    public function memLevelDropdown()
    {
        return $this->mem_level;
    }

    public function cardTypeDropdown()
    {
        return $this->card_type;
    }

    public function employeeDropdown()
    {
        return $this->employee;
    }

    public function realignToDropdown($object)
    {
        $return_array = array();
        foreach ($object as $object)
        {
            $return_array[$object->id] = $object->first_name . " " . $object->last_name;
        }

        return $return_array;
    }

    public function classTypesDropdown()
    {
        return $this->class_types;
    }
}