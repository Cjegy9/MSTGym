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

}