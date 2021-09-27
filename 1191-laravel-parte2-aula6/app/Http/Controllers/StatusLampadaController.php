<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lampada;
use App\Services\LampadaService;

class StatusLampadaController extends Controller
{
    public function index()
    {
        return view('lampada.index');
    }

    public function create()
    {
        return view('lampada.lampacessa');
    }

    public function store(Request $request)
    {
        $status = $request->status;
        DB::beginTransaction();
        $status = Lampada::create(['status' => $status]);
        DB::commit();
        return redirect()->route('apagar_lampada');
    }

    public function store2(Request $request)
    {
        $status = $request->status;
        DB::beginTransaction();
        $status = Lampada::create(['status' => $status]);
        DB::commit();
        return redirect()->route('acender_lampada');
    }

    public function acessarStatus()
    {
        $status = Lampada::all();
        return response()->json($status);
    }

}
