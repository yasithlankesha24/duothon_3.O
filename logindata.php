<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <?php
    include("db.php");
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $userid = $_REQUEST['userid'];
    $first_name = $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $mnumber = $_REQUEST['mnumber'];
    $address = $_REQUEST['address'];
    $postolcode = $_REQUEST['postolcode'];
    $psw = $_REQUEST['psw'];


    $sql = "INSERT INTO user_table VALUES ('$userid' ,'$first_name',
			'$last_name','$email','$mnumber','$address','$postolcode','$psw')";

    if (mysqli_query($conn, $sql)) {
       
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>