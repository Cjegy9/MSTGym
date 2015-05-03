<?php namespace MSTGym\Helpers;

class UserHelper {

    private $mem_level = array(
        0 => 'No Membership',
        1 => 'Silver',
        2 => 'Gold',
        3 => 'Platinum'
    );

    private $card_type = array(
        0 => 'Visa',
        1 => 'American Express',
        2 => 'MasterCard',
        3 => 'Discover'
    );

    public function memLevelDropdown()
    {
        return $this->mem_level;
    }

    public function cardTypeDropdown()
    {
        return $this->card_type;
    }

}