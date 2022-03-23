<?php
    include('../include/conn.php');

    if(isset($_POST['addData'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        if($gender == '0'){
            $gender = "ชาย";
        }else if($gender == '1'){
            $gender = "หญิง";
        }else{
            $gender = "อื่นๆ";
        }
        $query = $conn->query("INSERT INTO user (firstname,lastname,age,gender) VALUES ('$firstname', '$lastname', '$age', '$gender')");
        if($query){
            header('location: ../home.php');
        }
    }
