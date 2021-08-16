<?php
namespace App\Traits;

trait DateNumberToMonth {

    public function formatDate($date){
        $date = explode('-', $date);

        $dateObj   = \DateTime::createFromFormat('!m', $date[1]);
        $monthName = $dateObj->format('F'); // March

        echo $monthName . '/'.$date[2].'/'.$date[0];
    }
}
