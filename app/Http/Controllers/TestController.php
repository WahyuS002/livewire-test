<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class TestController extends Controller
{
    public function index()
    {
        // $provinces = Province::all();
        // $regencies = Regency::all();
        // $districts = District::all();
        // $villages = Village::all();

        $province = Province::where('name', 'BENGKULU')->first();
        $regency = Regency::where('name', 'KOTA BENGKULU')->first();
        $regency = Regency::where('name', 'KOTA BENGKULU')->first();

        // Get Kabupaten/Kota dari sebuah Provinsi
        $regencies = $province->regencies;

        // Get Kecamatan dari sebuah Kabupaten/Kota
        $districts = $regency->districts;

        // Get Desa/Kelurahan dari sebuah Kabupaten/Kota
        $villages = $regency->villages;

        return view('pages.test', compact(['regencies', 'districts', 'villages']));
    }
}
