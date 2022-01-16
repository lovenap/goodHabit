<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    protected $fillable = [
        'id',
        'period_from',
        'period_until',
        'openness'
    ]; // user_idは自動取得したいからこのfill関数で挿入できるようにする記述はいらないと思う
    
    //Userに対するリレーション
    //「1対多」の関係なので単数系に
    public function user()
    {
        return $this->belongsTo('App\User');  
    }
    
    // Itemに対するリレーション
    //「1対多」の関係なので'items'と複数形に
    public function items()   
    {
        return $this->hasMany('App\Item');  
    }
}
