<?php
    // connect db
    include 'connect.php';

    // get current date
    $current_date = date("h-m-Y H:i");

    // get outdoor
    $queryout = $conn->query("SELECT channel, rhsht, wsout, wd, sp, tsht FROM actual WHERE channel = 14");
    if (!$queryout) {
        echo "An error occurred fetch outdoor.\n";
        exit;
    }else{
        $rowout = $queryout->fetch_assoc();
    }

    // get r40
    $queryr40 = $conn->query("SELECT channel, rhsht, rh, co2, ta, tg, ws, li FROM actual WHERE channel = 9");
    if (!$queryr40) {
        echo "An error occurred fetch r40.\n";
        exit;
    }else{
        $rowr40 = $queryr40->fetch_assoc();
        $_rh40 = number_format(($rowr40["rhsht"] + $rowr40["rh"])/2, 2, '.', '');
        $_t40 = number_format(($rowr40["ta"] + $rowr40["tg"])/2, 2, '.', '');
        $_ws40 = number_format($rowr40["ws"], 2, '.', '');
    }

    // get r33
    $queryr33 = $conn->query("SELECT channel, rhsht, rh, co2, ta, tg, ws, li FROM actual WHERE channel = 8");
    if (!$queryr33) {
        echo "An error occurred fetch r33.\n";
        exit;
    }else{
        $rowr33 = $queryr33->fetch_assoc();
        $_rh33 = number_format(($rowr33["rhsht"] + $rowr33["rh"])/2, 2, '.', '');
        $_t33 = number_format(($rowr33["ta"] + $rowr33["tg"])/2, 2, '.', '');
        $_ws33 = number_format($rowr33["ws"], 2, '.', '');
    }

    // get r15
    $queryr15 = $conn->query("SELECT channel, rhsht, rh, co2, ta, tg, ws, li FROM actual WHERE channel = 10");
    if (!$queryr15) {
        echo "An error occurred fetch r15.\n";
        exit;
    }else{
        $rowr15 = $queryr15->fetch_assoc();
        $_rh15 = number_format(($rowr15["rhsht"] + $rowr15["rh"])/2, 2, '.', '');
        $_t15 = number_format(($rowr15["ta"] + $rowr15["tg"])/2, 2, '.', '');
        $_ws15 = number_format($rowr15["ws"], 2, '.', '');
    }
?>
