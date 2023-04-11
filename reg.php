<?php
    $con = mysqli_connect("localhost","root","root");
    mysqli_select_db($con,"text");
	$sql = "INSERT INTO admin (user, pastword)
	VALUES ('".$_POST['account']."', '".$_POST['word']."')";
	if ($con->query($sql) === TRUE) {
	    echo "新记录插入成功";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$con->close();
?>