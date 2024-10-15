<?php

namespace App\Http\Controllers;

use App\Models\Jangkauan;
use App\Models\Kunjungan;
use App\Models\Like;
use App\Models\Reach;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jangkauan = Jangkauan::all();
        $reachData = Reach::all();
        $likeData = Like::selectRaw('
            SUM(like_male) as like_male,
            SUM(like_female) as like_female,
            SUM(like_gen_alpha) as like_gen_alpha,
            SUM(like_gen_z) as like_gen_z,
            SUM(like_gen_millenial) as like_gen_millenial,
            SUM(like_baby_boomer) as like_baby_boomer
        ')->first();
        $kunjungan = Kunjungan::all();

        // dd($likeData);
        // Mengirim data ke view
        return view('dash', compact(
            'jangkauan',
            'reachData',
            'likeData',
            'kunjungan',
        ));
    }
}
