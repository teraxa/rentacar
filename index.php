<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 1/28/16
 * Time: 11:27 AM
 */
date_default_timezone_set('Europe/Sofia');

include 'car_classes.php';
$cars = new car_classes;
class PeriodCalc
{


    public function __construct()
    {
     //  echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function __destruct()
    {
      //  echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }



    function GetCarPrice($car_class, $day_prices, $days_booked) {

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
    function CalcTotal($pick_up, $drop_off, $price)
    {
        $startTimeStamp = strtotime($pick_up);
        $endTimeStamp = strtotime($drop_off);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day
        // and you might want to convert to integer
        $total_days = $numberDays;

        if($price != false) {
            return $price * $total_days;
        } else {
            return $total_days;
        }
    }


    function which_season ($pick_up, $drop_off, $car_class) {

        $pick_up_date = strtotime($pick_up);
        $drop_off_date = strtotime($drop_off);

        $seasons = $this->seasons;

foreach ($seasons as $s => $k   ) {

    if($pick_up >= $k['from'] && $drop_off <= $k['to'] ) {
        //echo "<br/>";
        //echo "Car class " . $car_class . " from " . $k['from'] . " to " . $k['to'] . " and the season is ". $s . "<br/>";
        //Maybe it'll be better to build an array instead of echoing :)
        //We need only the Car Class and the Season

        $the_season = $s;
    }
}

        return $the_season;

    }


function rentacar ($pick_up, $drop_off, $car_class) {
//Count all days
    $startTimeStamp = strtotime($pick_up);
    $endTimeStamp = strtotime($drop_off);
    $timeDiff = abs($endTimeStamp - $startTimeStamp);
    $numberDays = $timeDiff / 86400;  // 86400 seconds in one day
    // and you might want to convert to integer
    $total_days = $numberDays;


    //Find sesason
    $seasons = $this->seasons;
    foreach($seasons as $season => $key) {
        $from = $key['from'];
        $to = $key['to'];
        if($pick_up >= $from && $drop_off <= $to){
            return $season;
        }
    }

    //find if this days are in more than one season
    //Count days in this season

   

}





}






$booking = new PeriodCalc;




$pick_up = '2016-04-15';
$drop_off = '2016-08-17';
$days_booked = $booking->CalcTotal($pick_up,$drop_off,false);
$car_class = 'FVMR';




echo "<br/>Car class " .$car_class."<br/>";

///echo "<br/>Days: " . $booking->GetCarPrice($car_class, $day_pricez, $days_booked );


echo "<br/> SEASON: " . $cars->rentacar($pick_up,$drop_off,$car_class);

//echo "<br/> SEASON: " . $booking->which_season($pick_up,$drop_off,$car_class);

