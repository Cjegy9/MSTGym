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
        \DB::raw("INSERT INTO users (first_name, last_name, middle_initial, d_o_b, street, city, state, zip_code, email, password, membership, admin, card_name, card_number, card_exp, card_type) VALUES
                    (" . $this->attributes['first_name'] . "," . $this->attributes['last_name'] . "," . $this->attributes['middle_initial'] . "," . $this->attributes['d_o_b'] . "," . $this->attributes['street'] . "," . $this->attributes['city'] .
            "," . $this->attributes['state'] . "," . $this->attributes['zip_code'] . "," . $this->attributes['email'] . "," . $this->attributes['password'] . "," . $this->attributes['membership'] . "," . $this->attributes['admin'] .
            "," . $this->attributes['card_name'] . "," . $this->attributes['card_number'] . "," . $this->attributes['card_exp'] . "," . $this->attributes['card_type'] . ");");
    }
    /*

    public function createClass()
    {
        CREATE DEFINER=`root`@`localhost` PROCEDURE `AddClass`(
    IN ClassName VARCHAR(20),
    IN Capacity INT,
    IN Trainer INT,
    IN StartTime TIME,
    IN EndTime TIME,
    IN ClassDate DATE)
BEGIN
	INSERT INTO Classes VALUES(ClassName,StartTime,EndTime,ClassDate,Capacity,Trainer);
END
    }

    public function createEmployee()
    {

        CREATE DEFINER=`root`@`localhost` PROCEDURE `AddEmployee`(
    IN Fname1 VARCHAR(15),
    IN Mname1 VARCHAR(15),
    IN Lname1 VARCHAR(15),
	IN SSN INT,
    IN Address1 VARCHAR(30),
    IN City1 VARCHAR(30),
    IN State1 VARCHAR(2),
    IN Zip1 INT,
    IN Position VARCHAR(30),
    IN Wage INT,
    IN Email VARCHAR(40),
    IN Phone BIGINT,
    IN PhoneType VARCHAR(20)
    )
BEGIN

	DECLARE EID2 INT;
	INSERT INTO Employee Values(Fname1,Mname1,Lname1,SSN,0,Address1,City1,State1,Zip1,Position,Wage);
    Set @EID2= (Select EmployeeID FROM Employee Where Fname=Fname1 And Mname=Mname1 and Lname=Lname1  and Ssn = SSN and Street=Address1 and City = City1 and State = State1 and Zip=Zip1);
    INSERT INTO Employee2 Values(EID2,Email);
    INSERT INTO Employee3 values(EID2,Phone,PhonType);
END
    }

    public function deleteEmployee()
    {

        CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteEmployee`(IN EID1 INT)
BEGIN

	Delete FROM Employee
    WHERE EmployeeID = EID1;
    Delete FROM Employee2
    WHERE EmployeeID = EID1;
    Delete FROM Employee3
    WHERE EmployeeID = EID1;
    Delete FROM Employee4
    WHERE EmployeeID = EID1;
END
    }

    public function deleteMember()
    {
        CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteMember`(IN MID2 INT)
BEGIN

    Delete FROM Member
    WHERE MID = MID2;

    Delete From Member2
    WHERE MID = MID2;

    Delete From Member3
    WHERE MID = MID2;

    Delete From Member4
    WHERE MID = MID2;

    Delete From Member5
    WHERE MID = MID2;

END

    }

    public function ediiEmployee()
    {
        CREATE DEFINER=`root`@`localhost` PROCEDURE `EditEmployee`(
    IN Fname1 VARCHAR(15),
    IN Mname1 VARCHAR(15),
    IN Lname1 VARCHAR(15),
	IN SSN INT,
    IN Address1 VARCHAR(30),
    IN City1 VARCHAR(30),
    IN State1 VARCHAR(2),
    IN Zip1 INT,
    IN Position VARCHAR(30),
    IN Wage INT,
    IN EID INT
    )
BEGIN
	UPDATE Employee
    Set Fname=Fname1, Mname=Mname1, Lname=Lname1,Ssn=SSN,Street=Address1,City=City1,State=State1,Zip=Zip1,Position=Position,Wage=Wage
    Where EmployeeID=EID;
END
    }*/



    public function getMembershipAttribute($value)
    {
        $mem_level = array(
            0 => '',
            1 => 'Silver',
            2 => 'Gold',
            3 => 'Platinum'
        );

        return $mem_level[$value];
    }

}