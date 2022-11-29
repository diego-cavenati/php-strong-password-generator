<?php 

function generatePassword($length)
{
    $subLength = ($length / 4);
    $restLength = ($length % 4);

    $passwordLowCharts = "abcdefghijklmnopqrstuvwxyz";
    $rndPasswordLowCharts = substr(str_shuffle($passwordLowCharts), 0, $subLength);

    $passwordUpCharts = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $rndPasswordUpCharts = substr(str_shuffle($passwordUpCharts), 0, $subLength);

    $passwordNumber = "0123456789";
    $rndPasswordNumber = substr(str_shuffle($passwordNumber), 0, $subLength);

    $passwordSymbol = "!#$%&'()*+,-./:;<=>?@[\]^_{|}~";
    $rndPasswordSymbol = substr(str_shuffle($passwordSymbol), 0, $subLength);

    $passwordnumberRest = "0123456789";
    $rndPasswordNumberRest = substr(str_shuffle($passwordnumberRest), 0, $restLength);

    if ($restLength > 0) {
        $passwordFullCharts = $rndPasswordSymbol . $rndPasswordNumber . $rndPasswordUpCharts . $rndPasswordLowCharts . $rndPasswordNumberRest;
    } else {
        $passwordFullCharts = $rndPasswordSymbol . $rndPasswordNumber . $rndPasswordUpCharts . $rndPasswordLowCharts;
    }

    $password = str_shuffle($passwordFullCharts);

    return $password;
}
