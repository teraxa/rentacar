<?php
/**
 * Created by PhpStorm.
 * User: burnazov
 * Date: 29.1.2016 г.
 * Time: 23:20
 */

/**
 * Season Periods
 */
class car_classes extends PeriodCalc {

public $seasons = array(
    'LOW_SEASON' => array(
        'from' => '2016-01-10',
        'to'   => '2016-05-14',
    ),

    'LOW_SEASON_2' => array(
        'from' => '2016-10-01',
        'to'   => '2016-12-14',
    ),

    'MID_SEASON' => array(
        'from' => '2016-05-15',
        'to'   => '2016-06-31',
    ),

    'MID_SEASON' => array(
        'from' => '2016-09-01',
        'to'   => '2016-09-30',
    ),

    'MID_SEASON_2' => array(
        'from' => '2016-12-06',
        'to'   => '2017-01-09',
    ),

    'HIGH_SEASON' => array(
        'from' => '2016-07-01',
        'to'   => '2017-08-31',
    ),
);


/**
 * Car Classes
 * Car Prices per period
 */
public $classes = array (
    'MCMR' => array (
        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'HIGH_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

    ),


    'MDMR' => array (
        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'HIGH_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

    ),



    'MDAR' => array (
        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'HIGH_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

    ),




    'EDMR' => array (
        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'MID_SEASON_2' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'LOW_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

        'HIGH_SEASON' => array(
            '1d' => '10',
            '2_3d' => '9',
            '4_6d' => '8',
            '7_14d' => '7',
            '15_29d' => '6',
            '30_plus' => '4',
        ),

    ),



);

}