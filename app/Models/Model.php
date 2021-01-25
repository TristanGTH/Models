<?php

namespace App\Models;
use Carbon\Carbon;

class Model {


    public function changeDate($date){
        $timestamp = strtotime($date);

        $day = date('d', $timestamp);
        $month = date('m', $timestamp);
        $year = date('Y', $timestamp);

        $createdAt = Carbon::createFromDate($year, $month, $day);
        return $createdAt;
    }

}




