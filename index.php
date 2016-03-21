<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 1/28/16
 * Time: 11:27 AM
 */
error_reporting(E_ALL & ~E_NOTICE);

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

    function find_days_type($from, $to)
    {

        $beginning = new DateTime($from);
        $end = new DateTime($to);
        $interval = $end->diff($beginning);
        // %a will output the total number of days.
        $days = $interval->format('%a');

        if ($days == 1) {
            return '1d';
        }

        if ($days >= 2 and $days <= 3) {
            return '2_3d';
        }

        if ($days >= 4 and $days <= 6) {
            return '4_6d';
        }

        if ($days >= 7 and $days <= 14) {
            return '7_14d';
        }

        if ($days >= 15 and $days <= 29) {
            return '15_29d';
        }

        if ($days >= 30) {
            return '30_plus';
        }
    }


    /**
     * @param $pick_up
     * @param $drop_off
     * @param $period_start
     * @param $period_end
     * @return string
     * Finds out if the particular season is 1/1 in season or 1/2
     */
    function count_seasons($pick_up, $drop_off, $seasons)
    {

        foreach ($seasons as $season => $date) {
            $period_start = $date['from'];
            $period_end = $date['to'];
        }

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


//////////////////

$pick_up = $_POST['pickup'];
$drop_off = $_POST['dropoff'];

$days_type = new PeriodCalc;

$configs = array(
    array(
        'season' => 'LOW_SEASON',
        'startTime' => strtotime('2016-01-10'),
        'endTime' => strtotime('2016-05-14'),
        'total_days' => '125',
        'price' => array(
            'QWER' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ASDF' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ZXCV' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'REWQ' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),
        ),
    ),
    array(
        'period' => 'MID_SEASON',
        'startTime' => strtotime('2016-05-15'),
        'endTime' => strtotime('2016-06-31'),
        'total_days' => '46',
        'price' => array(
            'QWER' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ASDF' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ZXCV' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'REWQ' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),
        ),
    ),
    array(
        'period' => 'HIGH_SEASON',
        'startTime' => strtotime('2016-07-01'),
        'endTime' => strtotime('2016-08-31'),
        'total_days' => '61',
        'price' => array(
            'QWER' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ASDF' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ZXCV' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'REWQ' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),
        ),
    ),
    array(
        'period' => 'LOW_SEASON_2',
        'startTime' => strtotime('2016-09-01'),
        'endTime' => strtotime('2016-09-30'),
        'total_days' => '30',
        'price' => array(
            'QWER' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ASDF' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'ZXCV' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),

            'REWQ' => array(
                '1d' => '10',
                '2_3d' => '9',
                '4_6d' => '8',
                '7_14d' => '7',
                '15_29d' => '6',
                '30_plus' => '4',
            ),
        ),
    ),
);


$all_days = new PeriodCalc();

$oneDay = 24 * 3600;
$prices = array();
foreach ($configs as $config) {
    $endTime = $config['endTime'];
    $endTimeNew = date('Y-m-d', $endTime);


    $date1    = new DateTime($drop_off);
    $date2    = new DateTime($endTimeNew);
    $date2 = $date2->modify('+1 day');

    if($drop_off <= $endTimeNew){
        $d = $all_days->find_days_type($pick_up, $drop_off);
        echo $d;
    }

    if($drop_off > $endTimeNew) {
        $d = $all_days->find_days_type($endTimeNew, $drop_off);
        echo $d;
    }


    ///
    $time1 = $config['startTime'];
    $time2 = $config['endTime'];
    $price = $config['price']['QWER'][$d];

    while ($time1 <= $time2) {
        $prices[date('Y-m-d', $time1)] = $price;
        $time1 += $oneDay;
    }
}

echo "<pre>";
var_dump($prices);
echo "</pre>";


/**
 * @param $checkIn in format YYYY-mm-dd
 * @param $checkOut in format YYYY-mm-dd
 */
function getTotalPrice($checkIn, $checkOut, $prices)
{
    $time1 = strtotime($checkIn);
    $time2 = strtotime($checkOut);

    $price = 0;
    while ($time1 <= $time2) {
        $time1 += 24 * 3600;
        $price += $prices[date('Y-m-d', $time1)];
    }

    return $price;
}


/////////////////


$booking = new PeriodCalc;


$periods = new car_classes;
$period = $periods->seasons;
$car_class = 'FVMR';
echo "<br/>";
echo $pick_up;
echo "<br/>";
echo $drop_off;
echo "<br/>";
echo $booking->count_days($pick_up, $drop_off);
echo "<br/>";
echo $booking->count_seasons($pick_up, $drop_off, $period);
echo "<br/>";


echo getTotalPrice($pick_up, $drop_off, $prices);


?>
<body>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.js"></script>
</head>

<br/><br/><br/>
<form method="post">

    Pickup: <input type="text" name="pickup" class="pickup" id="pickup"><br/>
    Dropoff: <input type="text" name="dropoff" class="dropoff" id="dropoff"><br/>
    Class: <select name="car_class">
        <option vlaue="QWER">QWER</option>
        <option vlaue="ASDF">ASDF</option>
        <option value="ZXCV">ZXCV</option>
        <option value="REWQ">REWQ</option>
    </select>
    <br/>
    <input type="submit" value="send">

</form>


<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#pickup').datepicker({
            format: "2016-mm-dd"
        });

        $('#dropoff').datepicker({
            format: "2016-mm-dd"
        });
    });
</script>
</html>
</body>
