<? php
	$u_name = array('student' => 'Joe','lecturer' => 'Kate', 'assistant' => 'Martin');
	$course_name = array('PHP', 'CSS', 'HTML');
	$role = array('student', 'lecturer', 'assistant');
	
	echo "Hi," . $u_name['student'] . "! You've been approved to take part in course " . $course_name[0] . " as a " . $role[0] . ". The course " .  $course_name[0] . " will last for two days.";
	echo "<br>";
	echo "Hi," . $u_name['lecturer'] . "! You've been approved to take part in course " . $course_name[1] . " as a " . $role[1] . ". The course " .  $course_name[1] . " will last for two days.";
	echo "<br>";	
	echo "Hi," . $u_name['assistant'] . "! You've been approved to take part in course " . $course_name[2] . " as a " . $role[2] . ". The course " .  $course_name[2] . " will last for two days.";

// Pavlin Dimitrov