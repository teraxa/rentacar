<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 1/28/16
 * Time: 11:27 AM
 */
date_default_timezone_set('Europe/Sofia');

include 'car_classes.php';

$cars = new car_classes();


class  PeriodCalc
{


    public function __construct()
    {
        //  echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function __destruct()
    {
        //  echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }


    function GetCarPrice($car_class, $day_prices, $days_booked)
    {

        $car_prices = $day_prices[$car_class][$days_booked];


        return $car_prices;
    }


    /**
     * @param $pick_up
     * @param $drop_off
     * @param $price
     * @return bool|float
     * If there is no parameter for price it will return only the number of days
     */
    function TotalDays($pick_up, $drop_off)
    {
        $startTimeStamp = strtotime($pick_up);
        $endTimeStamp = strtotime($drop_off);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day
        // and you might want to convert to integer
        $total_days = $numberDays;

        return $total_days;
    }

    /**
     * @param $from
     * @param $to
     * @return string
     * Fast and easy way to find out how many days
     */
    function count_days($from, $to)
    {

        $beginning = new DateTime($from);
        $end = new DateTime($to);
        $interval = $end->diff($beginning);
// %a will output the total number of days.
        return $interval->format('%a');

    }


    /**
     * @param $pick_up
     * @param $drop_off
     * @param $period_start
     * @param $period_end
     * @return string
     * Finds out if the particular season is 1/1 in season or 1/2
     */
    function count_seasons($pick_up, $drop_off, $period_start, $period_end)
    {

        $start = strtotime($pick_up);
        $end = strtotime($drop_off);

        $required_start = strtotime($period_start);
        $required_end = strtotime($period_end);


        $if_in_period = '';
        if ($end > $required_end or $end < $required_start) {
            $if_in_period = "in_not_full";
        }

        if ($start < $required_start or $start > $required_end) {
            $if_in_period = "out";
        }

        if ($if_in_period != '') {
            return $if_in_period;
        }

        if ($if_in_period == '') {
            echo "in_full";
        }

    }


}


$booking = new PeriodCalc;


$pick_up = '2016-01-16';
$drop_off = '2016-01-19';
$periods = new car_classes;
$period = $periods->seasons;
$car_class = 'FVMR';

echo $booking->count_days($pick_up, $drop_off);
echo "<br/>";
echo $booking->count_seasons($pick_up, $drop_off, '2016-01-01', '2016-05-14');
echo "<br/>";


foreach ($period as $season => $from_to) {
    $f = $from_to['from'];
    $t = $from_to['to'];

    $from = new DateTime($f);
    $to = new DateTime($t);

    $vzimane = new DateTime($pick_up);
    $vrashtane = new DateTime($drop_off);

    if ($vzimane >= $from and $vrashtane <= $to) {
        $season1 = $season;
    }





}
echo $season1 . " -1<br/>";
echo $season2 . " -2<br/>";


//Debug
/* echo $season ." ".$f. " - " . $t ."<br/>";
  echo  "<b>".$pick_up . " - " . $drop_off ."<br/></b>";
*/


/*
echo "<pre>";
var_dump($period);
echo "</pre>";*/
