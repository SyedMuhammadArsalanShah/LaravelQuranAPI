<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Quran extends Controller
{
    //
    function getsurahdata()
    {
        $dataQuran = Http::get("https://api.alquran.cloud/v1/meta");

        return view("surahs", ["collection" => $dataQuran["data"]["surahs"]["references"]]);
    }


    function getreaddata($snum)
    {
        $dataQuran = Http::get("https://api.alquran.cloud/v1/surah/{$snum}");

        return view("readsurah", ["collection" => $dataQuran["data"]["ayahs"]]);
    }
}
