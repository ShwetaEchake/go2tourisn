<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'p_name',
        'p_seq',
        'p_slug',
        'p_photo',
        'p_description',
        'p_description_short',
        'p_location',
        'p_min_pack',
        'p_best_time_to_visit',
        'p_trek_level',
        'p_fix_departure_date',
        'p_start_date',
        'p_end_date',
        'p_last_booking_date',
        'p_map',
        'p_itinerary',
        'p_price',
        'p_policy',
        'p_terms',
        'p_is_featured',
        'destination_id',
        'services_id',
        'seo_title',
        'seo_meta_description'
    ];

    public function destination()
    {
        return $this->belongsTo('App\Models\Admin\Destination');
    }

}
