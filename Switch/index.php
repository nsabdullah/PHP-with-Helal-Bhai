<?php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is the first day of the work week.";
        break;
    case "Tuesday":
        echo "It's the second day of the work week.";
        break;
    case "Wednesday":
        echo "We're halfway through the week!";
        break;
    case "Thursday":
        echo "Just one more day until Friday!";
        break;
    case "Friday":
        echo "It's the last working day of the week!";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend! Time to relax!";
        break;
    default:
        echo "Invalid day.";
        break;
}











?>
