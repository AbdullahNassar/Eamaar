<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
            'name_ar','name_en',
            'content_ar','content_en',
            'client_ar','client_en',
            'location_ar','location_en',
            'area_ar','area_en',
            'st_date','end_date',
            'cost_ar','cost_en',
            'image','_order','active',
            'service_id','category_id',
            'gallery',
    ];

    public function images(){
        return $this->hasMany(Gallery::class);
    }
}
