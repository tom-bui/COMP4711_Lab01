<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php');
            
            $students = array();
            
            $first = new Student();
            $first->surname = "Wayne";
            $first->first_name = "Bruce";
            $first->add_email('home', 'bruce.wayne@batcave.com');
            $first->add_email('work', 'bwayne@wayneenterprises.com');
            $first->add_grade(90);
            $first->add_grade(88);
            $first->add_grade(95);
            $students['bwayne'] = $first;
            
            $second = new Student();
            $second->surname = "Kent";
            $second->first_name = "Clark";
            $second->add_email('home', 'clark.kent@farmville.com');
            $second->add_email('work', 'clark_kent@dailyplanet.com');
            $second->add_grade(64);
            $second->add_grade(71);
            $second->add_grade(73);
            $students['ckent'] = $second;
                     
            foreach($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>
