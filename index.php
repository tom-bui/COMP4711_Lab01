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
            
            // Adds a student
            $first = new Student();
            $first->surname = "Wayne";
            $first->first_name = "Bruce";
            $first->add_email('home', 'bruce.wayne@batcave.com');
            $first->add_email('work', 'bwayne@wayneenterprises.com');
            $first->add_grade(90);
            $first->add_grade(88);
            $first->add_grade(95);
            $students['bwayne'] = $first;
            
            // Adds another student
            $second = new Student();
            $second->surname = "Kent";
            $second->first_name = "Clark";
            $second->add_email('home', 'clark.kent@farmville.com');
            $second->add_email('work', 'clark_kent@dailyplanet.com');
            $second->add_grade(67);
            $second->add_grade(71);
            $second->add_grade(72);
            $students['ckent'] = $second;
            
            // Adds yet another student
            $third = new Student();
            $third->surname = "Bui";
            $third->first_name = "Tom";
            $third->add_email('home', 'toandbui@hotmail.com');
            $third->add_email('work', 'tbui23@my.bcit.ca');
            $third->add_grade(100);
            $third->add_grade(100);
            $third->add_grade(100);
            $students['tbui'] = $third;
            
            // Sort students by first name
            ksort($students);
            
            // Print out all student details
            foreach($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>
