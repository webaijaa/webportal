<html>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "aijaa");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	echo $mysqli->host_info . " connected to aijaa;\n";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];

	echo "Received name & email phone : " . $name . $email . $phone ."\n";

	$status = $mysqli->query("INSERT INTO user (name,email,phone) VALUES ('$name','$email','$phone')");

	echo "Status of the query " . $status;

	$sql = 'SELECT * FROM user';

	if (!$result = $mysqli->query($sql)) {
	    // Oh no! The query failed. 
	    echo "Sorry, the website is experiencing problems.";

	    // Again, do not do this on a public site, but we'll show you how
	    // to get the error information
	    echo "Error: Our query failed to execute and here is why: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
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
	echo "Welcome to aijaa family " . $actor['name'] . " " . $actor['email'] . " " . $actor['phone'];
	}
	mysqli_close($mysqli);
}
?>

</body>
</html>