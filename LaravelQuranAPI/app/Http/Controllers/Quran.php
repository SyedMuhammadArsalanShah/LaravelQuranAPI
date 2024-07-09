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

    public function getreaddata($snum)
    {

        $dataQuran = Http::get("https://api.alquran.cloud/v1/surah/{$snum}");
        $data1 = Http::get("https://api.alquran.cloud/v1/edition/language");
        return view("readsurah", [
            "collection" => $dataQuran["data"]["ayahs"],
            "lang" => $data1["data"],
            "snum" => $snum // Pass the $snum parameter to the view
        ]);
    }
}
