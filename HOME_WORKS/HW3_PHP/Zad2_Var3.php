<? php

	$u_name = array('student' => 'Joe','lecturer' => 'Kate', 'assistant' => 'Martin');
	$course_name = array('PHP', 'CSS', 'HTML');
	$role = array('student', 'lecturer', 'assistant');

$counter = 0;
foreach($u_name as $key=>$value){
    echo "Hi, " . $value . "! You've been approved to take part in course " . $course_name[$counter] . " as a " . $role[$counter] . ". The course " .  $course_name[$counter] . " will last for two days.";
    echo "<br>";
    $counter++;
}

// Pavlin Dimitrov