<?php
$angaka = [3,4,6,23,34,442,34,2,1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }

        .clear { clear: both; }
    </style>
</head>
<body>

<?php 
for( $i = 0; $i < count($angaka); $i++ ) { ?>
    <div class="kotak"><?php echo $angaka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angaka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

</body>
</html>