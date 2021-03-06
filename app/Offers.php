<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Price ;
class Offers extends Model
{
    //
    public $table = 'offers' ;
    public $timestamps = true ;

    public function photos(){
        return $this->hasMany('App\Offer_photo');
    }

    public function city(){
        return $this->belongsTo('App\Citys');
    }

    public function user(){
        return $this->belongsTo('App\users');
    }

    public function offer_content_of(){
        return $this->hasMany('App\Offer_content_ofs');
    }

    public function offer_not_content_of(){
        return $this->hasMany('App\Offer_not_content_ofs');
    }

    public function prices(){
        return $this->hasMany('App\Price');
    }
    // public function prices(){
    //   return $this->hasMany('App/Price');
    // }
}
