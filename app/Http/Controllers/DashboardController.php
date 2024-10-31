<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Jangkauan;
use App\Models\Kunjungan;
use App\Models\Like;
use App\Models\Reach;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input tanggal mulai dan tanggal akhir dari request (jika ada)
        $startDate = $request->input('start_date', Carbon::now()->subDays(7)->format('Y-m-d')); // Default: 7 hari terakhir
        $endDate = $request->input('end_date', Carbon::now()->format('Y-m-d')); // Default: hari ini

        // Filter data berdasarkan tanggal
        $jangkauan = Jangkauan::whereBetween('tgl_jangkauan', [$startDate, $endDate])->get();
        $reachData = Reach::whereBetween('tgl_reach', [$startDate, $endDate])->get();
        $likeData = Like::selectRaw('
            SUM(like_male) as like_male,
            SUM(like_female) as like_female,
            SUM(like_gen_z) as like_gen_z,
            SUM(like_gen_millenial) as like_gen_millenial,
            SUM(like_baby_boomer) as like_baby_boomer
        ')->whereBetween('tgl_like', [$startDate, $endDate])->first();
        $kunjungan = Kunjungan::whereBetween('tgl_kunjungan', [$startDate, $endDate])->get();
        $budget = Budget::latest()->first();

        // dd($jangkauan);

        return view('dash', compact(
            'jangkauan',
            'reachData',
            'likeData',
            'kunjungan',
            'budget',
            'startDate',
            'endDate'
        ));
    }
}
