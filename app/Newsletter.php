<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use Uuids;

    protected $fillable = [
        'email',
    ];

    protected $table = 'newsletter';

    public function allData(){
        return parent::all();
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
}
