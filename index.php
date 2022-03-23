<?php
include('include/head.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.scss">

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center text-white" style="background-color: black">ลงทะเบียน</div>
            <div class="card-body">
                <form action="system/addData.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" placeholder="ชื่อจริง" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="age" placeholder="อายุ" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="gender" id="">
                            <option value="0">ชาย</option>
                            <option value="1">หญิง</option>
                            <option value="3">อื่นๆ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" name="addData" onclick="return confirm('ยินยันข้อมูลใช่หรือมั้ย')">ยืนยัน</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>