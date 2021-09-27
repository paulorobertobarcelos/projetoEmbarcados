<?php

namespace App\Services;

use App\Lampada;
use Illuminate\Support\Facades\DB;

class SaveStatus
{
    public function PegaStatus(string $status)
    {
        DB::beginTransaction();
        $status = Lampada::create(['status' => $status]);
        DB::commit();

        return $status;
    }

}
