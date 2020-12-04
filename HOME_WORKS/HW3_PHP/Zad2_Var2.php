<?php

	$u_name = array('Joe', 'Kate', 'Martin');
	$course_name = array('PHP', 'CSS', 'HTML');
	$role = array('student', 'lecturer', 'assistant');



foreach($u_name as $index=>$value){
    echo "Hi, " . $u_name[$index] . "! You've been approved to take part in course " . $course_name[$index] . " as a " . $role[$index] . ". The course " .  $course_name[$index] . " will last for two days.";
    echo "<br>";
    echo "<br>";
}

// Pavlin Dimitrov