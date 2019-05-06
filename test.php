<?php

class Test
{
    public function test1()
    {
        $p = array(5.50, 10.48, 12.69);
        return array_sum($p);
    }

    public function test2()
    {
        // asumo que la sesion ya existe y obtengo la data 
        $loggedIn = $_SESSION['data'];
        if ($loggedIn == true) {
            // more code here
        }else{
            // no esta logueado
        }
    }

    public function test3()
    {
        $goingToBeach = 'false';
        $money = 50.0;
        if ($money > 60.0) {
            $goingToBeach = 'true';
        }   
        return $goingToBeach;
    }

    public function test4()
    {
        $object = new stdClass();
        $object->gender = 'female';
        $object->isMarried = true;

        $person = isset($_GET['person']) ? $_GET['person'] : $object;
        return $person->gender == 'male' ? 'Mr.' : ($person->isMarried ? 'Mrs.' : 'Miss');
    }

    public function test5()
    {
        if ($employeeType == 'developer') {
            // more code here
        }
    }

    public function test6()
    {
        if ($age > 21) {
            // more code here
        }
    }

    public function test7()
    {
        if ($status == 2) {
            // more code here
        }
    }

    public function test8()
    {
        $array_formats = array('mp4', 'mpg', 'avi');

        if(in_array($fileExtension, $array_formats)){
            return 'la extension es '.$fileExtension;
        }
    }

    public function test9()
    {
        $a = '54';
        $b = 54;
        if ($a !== $b) {
            // more code here
            return 'true';
        }else{
            return 'false';
        }
    }

    public function testSaveUser1()
    {
        $firstName = isset($_GET['firstName']) ? $_GET['firstName'] : 'default';
        $lastName = isset($_GET['lastName']) ? $_GET['lastName'] : 'default';
        $state = isset($_GET['state']) ? $_GET['state'] : 'default';
        $zip = isset($_GET['zip']) ? $_GET['zip'] : 'default';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : 'default';

        return $firstName;
    }

    public function testSaveUser2()
    {
        $firstName = isset($_GET['firstName']) ? $_GET['firstName'] : 'default';
        $lastName = isset($_GET['lastName']) ? $_GET['lastName'] : 'default';
        $email = isset($_GET['email']) ? $_GET['email'] : 'default';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : 'default';

        if($firstName != 'default' || $lastName != 'default' || $email != 'default' || $phone != 'default'){
            // save user
        }else{
            return 'datos incorrectos';
        }  
    }

    public function testSaveUser3()
    {
        $user = isset($_GET['user']) ? $_GET['user'] : 'default';
        $emailUser = isset($_GET['emailUser']) ? $_GET['emailUser'] : 'default';

        // save user
        if ($emailUser) {
            // email user
        }
    }

    public function testSwitch()
    {
        $room = isset($_GET['room']) ? $_GET['room'] : 'default';
        $on = isset($_GET['on']) ? $_GET['on'] : 'default';

        if ($on) {
            // more code here
        } else {
            // more code here
        }
    }


}

?>