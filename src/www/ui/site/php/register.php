<html>
<body>

<?php
$dbConnection = new mysqli("localhost", "root", "", "aijaa");
if ($dbConnection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dbConnection->connect_errno . ") " . $dbConnection->connect_error;
} else {
	echo $dbConnection->host_info . " connected to aijaa;\n";

	
	$email = $_POST["email"];
	$password = $_POST["password"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phone = $_POST["phone"];	
	$stateselected = $_POST["stateselected"];
	$district = $_POST["district"];

	echo "Received name & email phone : " . $firstname . $email . $phone . $password . $stateselected . $district . "\n";

	$sqlInsertUser = $dbConnection->query("INSERT INTO user (email,password,firstname,lastname,phone,state,district) VALUES 
		('$email','$password','$firstname','$lastname','$phone','$stateselected','$district')");

	if($sqlInsertUser === false){
        trigger_error('Error: ' . $dbConnection->error, E_USER_ERROR);
    }else{
        echo 'Last inserted record is : ' . $email ; 
    }

	$sql = 'SELECT * FROM user';

	if (!$result = $dbConnection->query($sql)) {
	    // Oh no! The query failed. 
	    echo "Sorry, the website is experiencing problems.";

	    // Again, do not do this on a public site, but we'll show you how
	    // to get the error information
	    echo "Error: Our query failed to execute and here is why: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $dbConnection->errno . "\n";
	    echo "Error: " . $dbConnection->error . "\n";
	    exit;
	}

// Phew, we made it. We know our MySQL connection and query 
// succeeded, but do we have a result?
	if ($result->num_rows === 0) {
	    // Oh, no rows! Sometimes that's expected and okay, sometimes
	    // it is not. You decide. In this case, maybe actor_id was too
	    // large? 
	    echo "We could not find a any users. ";
	    exit;
	}

// Now, we know only one result will exist in this example so let's 
// fetch it into an associated array where the array's keys are the 
// table's column names
	while($actor = $result->fetch_assoc()){
	echo "Welcome to aijaa family " . $actor['firstname'] . " " . $actor['email'] . " " . $actor['phone'];
	}
	mysqli_close($dbConnection);
}
?>

</body>
</html>