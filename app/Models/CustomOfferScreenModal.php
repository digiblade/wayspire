<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomOfferScreenModal extends Model
{
    protected $table = 'custom_what_we_offer';

    protected $fillable = [
        'card_1_icon',
        'card_1_title',
        'card_1_description',

        'card_2_icon',
        'card_2_title',
        'card_2_description',

        'card_3_icon',
        'card_3_title',
        'card_3_description',

        'card_4_icon',
        'card_4_title',
        'card_4_description',
    ];
}
