<?php

namespace App\Http\Livewire;

use App\City;
use App\Country;
use Livewire\Component;

class Dropdowns extends Component
{
    public $country;
    public $cities = [];
    public $city;

    // public function mount($country, $city)
    // {
    //     $this->country = $country;
    //     $this->city = $city;
    // }

    public function render()
    {
        $countries = Country::orderBy('name')->get();

        if (!empty($this->country)) {
            $this->cities = City::where('country_id', $this->country)->get();
        }
        return view('livewire.dropdowns', compact('countries'));
    }
}
