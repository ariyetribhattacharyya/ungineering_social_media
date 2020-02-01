<?php
    session_start();
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phonenumber'];
    $college = $_POST['college'];
    $sql = "UPDATE users 
    SET        
        name = '$name',
        email = '$email',
        password = '$password',
        phone = $phone,
        college = '$college'
    WHERE
        id=1";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    
    
        
    
    $response['success'] = true;
    $response['message'] = "Your profile has been updated";
    echo json_encode($response);    
    mysqli_close($conn);
?>
