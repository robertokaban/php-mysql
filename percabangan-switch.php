<?php
//$bulan=date("M");
$bulan="Apr";

switch ($bulan){

    case "Jan":
    case "Feb":
    case "Mar":
        echo "Bulan antara Jan dan Mar";
    break;

    case "Apr":
        echo "Ini bulan Apr";
    break;

    case "May":
        echo "Ini bulan May";
    break;

    default:
        echo "Bulan antara Juni dan Des";
    break;

}

?>