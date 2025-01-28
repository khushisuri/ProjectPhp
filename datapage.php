<?php require("./index.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: max-content;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header-1,
        .header-2,
        .header-3,
        .header-4,
        .header-5,
        .header-6,
        .header-7,
        .header-8,
        .header-9,
        .header-10,
        .header-11 {
            background-color: #0081a7;
            color: white;
            padding: 10px;
        }

        .header-2 {
            background-color: #00afb9;
        }

        .header-3 {
            background-color: #1c5d99;
        }

        .header-4 {
            background-color: #00a896;
        }

        .header-5 {
            background-color: #f07167;
        }

        .header-6 {
            background-color: #006d77;
        }

        .header-7 {
            background-color:  #577590;
        }

        .header-8 {
            background-color:#2ec4b6;
        }

        .header-9 {
            background-color: #e29578;
        }

        .header-10 {
            background-color: #e07a5f;
        }

        .header-11 {
            background-color: #ffc300;
        }


        p {
            margin: 0;
        }

        .content-rapper {
            padding: 16px;
            background-color:#edf2f4;
        }

        .content {
            background-color: white;
            padding: 16px;
            border-radius: 10px;
            margin: 15px 0px;
        }

        .br {
            border: 2px solid #edf2f4;
            border-radius: 10px;
            padding: 16px;
            margin: 24px 0px;
        }

        .br div {
            border-bottom: 2px solid #edf2f4;
            padding-bottom: 10px;
        }

        h5 {
            font-size: 18px;
        }

        .br p,
        .br h5 {
            font-size: 18px;
        }

        .value {
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }

        .score {
            display: flex;
            gap: 10px;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="page-data">
        <div class="header-1">
            <div>
                <h5>Category 01</h5>
                <h3>SECURITY AND PRIVACY</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["security_privacy"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["security_privacy"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-2">
            <div>
                <h5>Category 02</h5>
                <h3>PERFORMANCE TECHNICAL</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["performance_technical"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["performance_technical"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-3">
            <div>
                <h5>Category 03</h5>
                <h3>BRANDING VISUAL</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["branding_visual"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["branding_visual"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-4">
            <div>
                <h5>Category 04</h5>
                <h3>NAVIGATION</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["navigation"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["navigation"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-5">
            <div>
                <h5>Category 05</h5>
                <h3>MOBILE RESPONSIVENESS</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["mobile_responsiveness"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["mobile_responsiveness"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-6">
            <div>
                <h5>Category 06</h5>
                <h3>INTEGRATION SERVICE</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["integration_service"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["integration_service"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-7">
            <div>
                <h5>Category 07</h5>
                <h3>INTERACTIVITY ENGAGEMENT</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["interactivity_engagement"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["interactivity_engagement"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-8">
            <div>
                <h5>Category 08</h5>
                <h3>CONTENT INFORMATION</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["content_information"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["content_information"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-9">
            <div>
                <h5>Category 09</h5>
                <h3>ACCESSIBILITY</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["accessibility"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["accessibility"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-10">
            <div>
                <h5>Category 10</h5>
                <h3>SEO</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["seo"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["seo"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="page-data">
        <div class="header-11">
            <div>
                <h5>Category 11</h5>
                <h3>BUSINESS PRESENCE</h3>
            </div>
        </div>

        <div class="content-rapper">
            <div class="score">
                <p>Score</p>
                <p class="value"><?php print_r($jsonData["data"]["business_presence"]["score"]["result"]) ?></p>
            </div>
            <div class="content">
                <?php foreach ($jsonData["data"]["business_presence"]["results"] as $key => $item) {
                    //echo $item["title"];
                    echo ' <div class="br">
                    <div class="title">
                        <p>' . $item["title"] . '</p>
                    </div>
                    <div class="reco">
                        <h5>Recommendation</h5>
                        <p>' . $item["recommendation"] . '</p>
                    </div>
                    <div class="business">
                        <h5>Business Implication</h5>
                        <p>' . $item["business_Implication"] . '</p>
                    </div>
                </div>';
                } ?>
            </div>
        </div>
    </div>
</body>

</html>