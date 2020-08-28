<?php

namespace App\Http\Livewire;

// use App\City;
// use App\Country;

use App\Models\Province;
use App\Models\Regency;
use Livewire\Component;

class Dropdowns extends Component
{
    // public $country;
    // public $cities = [];
    // public $city;

    public $province;
    public $regencies = [];
    public $regency;
    // public function mount($country, $city)
    // {
    //     $this->country = $country;
    //     $this->city = $city;
    // }

    // public function render()
    // {
    //     $countries = Country::orderBy('name')->get();

    //     if (!empty($this->country)) {
    //         $this->cities = City::where('country_id', $this->country)->get();
    //     }
    //     return view('livewire.dropdowns', compact('countries'));
    // }
    public function render()
    {
        $provinces = Province::orderBy('name')->get();

        if (!empty($this->province)) {
            $this->regencies = Regency::where('province_id', $this->province)->get();
        }
        return view('livewire.dropdowns', compact('provinces'));
    }
}
