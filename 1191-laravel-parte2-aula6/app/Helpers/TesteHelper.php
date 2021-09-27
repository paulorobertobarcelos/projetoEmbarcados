<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

Class TesteHelper {

    public static function teste() {
        Log::debug("chegou aqui 2");
    }
}
