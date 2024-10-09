<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicTripClassification extends Model
{
    use HasFactory;
    protected $fillable=[
        'classification_id',
        'publicTrip_id',
    ];
    protected $hidden=[
        'created_at',
        'updated_at',
    ];
    public function classification(){
        return $this->belongsTo(Classification::class);
    }
    public function publicTrip(){
        return $this->belongsTo(PublicTrip::class,'publicTrip_id');
    }
}
