<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    use Uuids;

    protected $fillable = [
        'name','state', 'city', 'rhythm', 'event_start_date', 'event_end_date', 'host_name', 'description', 'confirmed'
    ];

    protected $table = 'tournaments';

    public function allData(){
        return parent::all()->where('confirmed', true);
    }

    public function newData(array $data = []){

        return parent::create($data);
    }

    public function updateData(array $data = [], $id){

        return parent::where('id', $id)->update($data);
    }

    public function showData($id){

        return parent::find($id);
    }

    public function deleteProducts($id){
        return parent::where('id', $id)->delete();
    }

   public function DateNumberToMonth($date){
        $date = explode('-', $date);

        $dateObj   = \DateTime::createFromFormat('!m', $date[1]);
        $monthName = $dateObj->format('F'); // March

        echo $monthName . '/'.$date[2].'/'.$date[0];
    }
}
