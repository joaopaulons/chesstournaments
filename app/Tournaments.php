<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    use Uuids;

    /**
     * /name/ of Tournament
     * /state/ where will the tournament be
     * /city/ of Tournament
     * /rhythm/ of the tournament, can be: Classic, Blitz, Rapid
     * /event_start_date/ When will the tournament start
     * /event_end_date/ When will the tournament end
     * /host_name/ The tournament organizer
     * /description/ of the tournament
     * /confirmed/ boolean, just to confirm and show this tournament
     * /links/ of tournament
     */
    protected $fillable = [
        'name','state', 'city', 'rhythm', 'event_start_date', 'event_end_date', 'host_name', 'description', 'confirmed', 'links'
    ];

    protected $table = 'tournaments';

    public function formatDate($date){
        $date = explode('-', $date);

        $dateObj   = \DateTime::createFromFormat('!m', $date[1]);
        $monthName = $dateObj->format('F'); // March

        echo $monthName . '/'.$date[2].'/'.$date[0];
    }
}
