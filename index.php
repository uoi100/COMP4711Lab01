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
        
        // Create an arraylist of students
        $students = array();
        
        // Create the first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdoanlds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Create the second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.com');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // print the list of students
        foreach($students as $student)
            echo $student->toString();
        
        echo "After sorting... \n";
        
        // Sort the students array by key
        ksort($students);
        
        // print the list of students
        foreach($students as $student)
            echo $student->toString();
        
        echo "Creating the third student... \n";
        
        // Create the third student
        $third = new Student();
        $third->surname = "Truong";
        $third->first_name = "Calvin";
        $third->add_email('home', 'calvintruong11@hotmail.com');
        $third->add_email('school','ctruong8@my.bcit.ca');
        $third->add_grade(95);
        $third->add_grade(90);
        $students['A00812171'] = $third;
        
        // print the list of students
        foreach($students as $student)
            echo $student->toString();
        
        echo "After sorting... \n";
        
        // Sort the students array by key
        ksort($students);
        
        // print the list of students
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
