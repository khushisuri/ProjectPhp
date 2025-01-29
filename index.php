<?php
require("./db.php");

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$dompdf = new Dompdf($options);

ob_start();
include  "./frontpage.php";
include "./datapage.php";
$html = ob_get_clean();
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');



if (!empty($_POST) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $dompdf->render();
    ob_end_clean();
    $dompdf->stream("page.pdf");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 18px;
            text-align: center;
        }
        form{
            margin: auto;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: space-around;
            background-color: #006d77;
            height: 300px;
            width: 40%;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            border-radius: 10px;
        }

        button{
            width: 100%;
            padding: 10px;
            background-color: #72dfbe;
            color: #006d77;
            border: none;
        }
        button:hover{
            background-color: #acf6e0;
        }
    </style>
</head>

<body>
    <form action="/adg-assignment/view.php" method="post">
        <h5>Click to download form and view url</h5>
        <button type="submit" name="submit" class="btn btn-primary">View PDF</button>
    </form>
</body>

</html>