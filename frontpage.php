<?php require("./index.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: max-content;
        }

        .page-1 {
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: #b56576;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px;
        }

        .br-1,
        .br-2 {
            border: 10px solid white;
        }

        .br-2 {
            background-color: #415a77;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .brand-logo {
            display: flex;
            justify-content: center;
            gap: 10px;
            align-items: center;
            height: max-content;
        }

        .title,
        .description {
            display: flex;
            flex-direction: column;
            margin: auto;
            height: max-content;
        }

        .title p,
        .description h4 {
            color: #f4a261;
            font-size: 23px;
            font-weight: 700;
            margin: auto 17px;
        }

        h1 {
            font-size: 50px;
            color: #e9c46a;
        }

        h3 {
            font-size: 30px;
        }

        .hr {
            border-top: 3px dashed white;
            margin: 20px auto;
        }

        h4 {
            margin: 10px 20px;
        }

        .br-2>div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: #edf2f4;
            padding: 7px 17px;
            margin: 10px;
            min-width: 300px;
            border-radius: 10px;
            color: #003049;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="page-1">
        <div class="br-1">
            <div class="brand-logo">
                <div>
                    <h3>Website - <?php print_r($jsonData["data"]["website_name"]) ?></h3>
                </div>
            </div>
            <div class="title">
                <h1>Analytics Report</h1>
                <p><?php print_r($jsonData["data"]["website_description"]) ?></p>
            </div>
            <div class="hr">
                <div class="description">
                    <h3>Website Report For</h3>
                    <h4><?php print_r($jsonData["data"]["website_url"]) ?></h4>
                </div>
            </div>
        </div>
        <div class="br-2">
        <h3>Ranking</h3>
            <div>
                <p>Global Rank</p>
                <p><?php print_r($jsonData["data"]["global_rank"]["data"]) ?></p>
            </div>
            <div>
                <p>Country Rank</p>
                <p><?php print_r($jsonData["data"]["country_rank"]["data"]) ?></p>
            </div>
            <div>
                <p>Category Rank</p>
                <p><?php print_r($jsonData["data"]["category_rank"]["data"]) ?></p>
            </div> 
        </div>
    </div>
</body>

</html>