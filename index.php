<?php
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");

include('includes/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Commenter 3.0</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="includes/comments.js.php"></script>
</head>

<body>
    <div class="container-fluid borderBoi">
        <h2>Capload Comments (Must be placed first)</h2>
    </div>
        <div class="container-fluid">
            <div class="row">
                <?php 
            $ass = ASS;
                foreach ($ass as $asses) {
                    echo '<div class="col-md-2">' . "\n";
                    echo '<input type="button" style="width:100%;"  value="' . $asses[0] . '" id="' . $asses[1] . '"/>';
                    echo '</div>' . "\n";
                }
            ?>
            </div>
        </div>
    <div class="container-fluid borderBoi">
        <div class="start row">
            <div class="col-md-10">
                <input type="text" id="commodity" class="begin" value="" />
            </div>
            <div class="col-md-2">
                <input type="Submit" id="commodityButton" value="Start" />
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php 
        $special = SPECIAL;
            foreach ($special as $specials) {
                echo '<div class="col-md-1">' . "\n";
                echo '<input type="button" style="width:100%;" value="' . $specials[0] . '" id="' . $specials[1] . '"/>';
                echo '</div>' . "\n";
            }
        ?>
        </div>
        <div class="borderBoi row">
            <?php 
        $state = STATE;
            foreach ($state as $states) {
                echo '<div class="col-md-1">' . "\n";
                echo '<input type="button" style="width:100%;" value="' . $states[0] . '" id="' . $states[1] . '"/>';
                echo '</div>' . "\n";
            }
        ?>
        </div>
        <h2>Packaging</h2>
        <div class="borderBoi row">
            <?php 
        $packaging = PACKAGING;
            foreach ($packaging as $packagings) {
                echo '<div class="col-md-2">' . "\n";
                echo '<input type="button" style="width:100%;" value="' . $packagings[0] . '" id="' . $packagings[1] . '"/>';
                echo '</div>' . "\n";
            }
        ?>

        </div>
    </div>
    <h2>Shipper Comments</h2>
    <div class="container-fluid">
        <div class="borderBoi row">
            <?php 
        $shipper = SHIPPER;
            foreach ($shipper as $shippers) {
                echo '<div class="col-md-2">' . "\n";
                echo '<input type="button" style="width:100%;" value="' . $shippers[0] . '" id="' . $shippers[1] . '"/>';
                echo '</div>' . "\n";
            }
        ?>
        </div>
    </div>
    <h2>ITEM and FXF Rules</h2>
    <div class="container-fluid">
        <div class="borderBoi row">
            <?php 
        $term = TERMS;
            foreach ($term as $terms) {
                echo '<div class="col-md-2">' . "\n";
                echo '<input type="button" style="width:100%;" value="' . $terms[0] . '" id="' . $terms[1] . '"/>';
                echo '</div>' . "\n";
            }
        ?>
        </div>
    </div>
    <textarea name="description" id="description" rows="7"></textarea>
    <div class="container-fluid">
        <div class="row last">
            <div class="col-md-3">
                <input type="button" value="Copy Description" id="copyText" style="background:#ff6600; color:#000; font-weight: bold; width:100%;" />
            </div>
            <div class="col-md-3">
                <input type="button" value="Delete" id="delete" class="delete" style="width:100%;" />
            </div>
            <div class="col-md-3">
                <input type="button" value="Clear Comment" id="clearComments" style="width:100%;" />
            </div>
            <div class="col-md-3">
                <input type="button" value="Clear All" id="clear" style="width:100%;" />
            </div>
        </div>
    </div>
</body>

</html>
