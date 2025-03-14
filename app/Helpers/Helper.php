<?php

use App\Models\Ad;
use App\Models\Category;

function categories()
{
    return Category::orderBy('order_by')->get();
}

function uniqueRegistrationId()
{
    do {
        $code = random_int(1000000, 9999999);
    } while (Ad::where("registration_id", $code)->first());

    return $code;
}
