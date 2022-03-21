<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.scss">
</head>

<body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='core.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- <nav class="navbar navbar-expand-lg fixed-top sticky-top navbar-dark py-3" style="background-color: black;">
    </nav> -->
    <!-- <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="animals.php">ANIMALS</a></li>
            <li><a href="read.php">READ</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header> -->
</body>

</html>
<script type="text/javascript">
    // window.addEventListener("scroll", function() {
    //     var header = document.querySelector("header");
    //     var button = document.querySelector("button");
    //     //    button.classList.toggle("btn-outline-light", window.scrollY < 1);
    //     header.classList.toggle("sticky", window.scrollY > 0);
    //     //    button.classList.toggle("btn-outline-dark", window.scrollY > 0);
    // })
</script>


<style>
    * {
        font-family: 'Kanit', sans-serif;
    }

    body {
        /* background: url(https://i.pinimg.com/originals/86/4b/37/864b37aec49aad0e47ef3c034b1e56c5.jpg) no-repeat; */
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://i.pinimg.com/originals/86/4b/37/864b37aec49aad0e47ef3c034b1e56c5.jpg);
        background-size: cover;
        height: 100vh;
        background-position: left;
        background-attachment: fixed;
        cursor: url("https://cur.cursors-4u.net/mechanics/mec-1/mec5.cur"), auto;
        /* background-color: #fff; */
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.5s;
        padding: 5px 100px;
        z-index: 100000;
        width: 100%;
        /* background-color: rgba(0, 0, 0, .5); */


    }

    header .sticky {
        padding: 5px 100px;
        background: #fff;

    }

    /* header .logo
{
    position: relative;
    font-weight: 700;
    color: #fff;
    text-decoration: none;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
} */
    header ul {
        /* position:relative;
    display: flex;
    justify-content: center;
    align-items: center; */
        text-align: center;
    }

    header ul li {
        /* position: relative;
    list-style: none; */
        list-style: none;
        display: inline-block;
    }

    header ul li a {
        /* position: relative;
    margin: 0 15px;
    text-decoration: none;
    color: #fff;
    letter-spacing: 2px;
    font-weight: 500px;
    transition: 0.6s; */
        display: block;
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
        font-size: 30px;
        font-family: 'Raleway', sans-serif;
        letter-spacing: 2px;
        font-weight: 500;
        padding: 9px;
        transition: all ease 0.5s;

    }

    header ul li a:hover {
        color: black;
        background-color: rgb(255, 255, 255);
    }

    header.sticky .logo,
    header.sticky ul li a {
        color: #000;


    }

    header.sticky .logo,
    header.sticky ul li a:hover {
        color: rgb(255, 255, 255);
        background-color: rgba(0, 0, 0, 0.753);


    }

    header.sticky {
        padding: 5px 100px;
        background: #fff;
        padding: 12px 100px;
    }
</style>