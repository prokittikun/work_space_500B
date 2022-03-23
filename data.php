<?php

$data = file_get_contents('data.json');
$json = json_decode($data, true);
include('include/head.php');

if (isset($_GET['id'])) {
    $new_array = array_filter($json, function ($obj) {
        $id = $_GET['id'];
        if (isset($obj['id'])) {
            if ($obj['id'] == $id) return true;
        }
    });
    $dataX = [];
    foreach ($new_array as $val) {
        $dataX = $val;
    }
    $data = $dataX['data'];
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body style="color: black;">
        <div class="container mt-5">
            <div class="card" style="height: 700px">
                <div class="card-header bg-warning">
                    <div class="text-center">
                        <h2><?= $data['name'] ?></h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="text-center">
                                <img width="100%" src="<?= $data['image'] ?>" alt="">

                            </div>
                        </div>
                        <div class="col-sm-7">
                            <?php
                            echo "<p>" . $data['detail'] . "</p>";
                            ?>
                            <span>อ่านเพิ่มเติม : <a target="_blank" href="<?= $data['link'] ?>"> <?= $data['link'] ?></a></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer row">
                    <!-- <div class="text-right">
                        <a href="index.php" class="btn btn-primary btn-sm">Back</a>
                    </div> -->
                    <div class="text-left col-sm-4">
                        <?php
                        if ($_GET['id'] != 1) {
                            $id = (int) $_GET['id'];
                        ?>
                            <a style="cursor: url('https://cur.cursors-4u.net/mechanics/mec-1/mec5.cur'), auto" class="btn btn-primary btn-sm" href="data.php?id=<?= $id - 1 ?>">ก่อนหน้า</a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a style="cursor: url('https://cur.cursors-4u.net/mechanics/mec-1/mec5.cur'), auto" class="btn btn-warning btn-sm" href="home.php">หน้าแรก</a>
                    </div>
                    <div class="text-right col-sm-4">
                        <?php
                        if ($_GET['id'] != 15) {
                            $id = (int) $_GET['id'];
                        ?>
                            <a style="cursor: url('https://cur.cursors-4u.net/mechanics/mec-1/mec5.cur'), auto" class="btn btn-primary btn-sm" href="data.php?id=<?= $id + 1 ?>">ถัดไป</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>