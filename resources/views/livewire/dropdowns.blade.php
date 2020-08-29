{{-- <div>
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Country:</label>
        <select name="country" wire:model="country" class="border shadow p-2 bg-white">
            <option value=''>Choose a country</option>
            @foreach($countries as $country)
                <option value={{ $country->id }}>{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
    @if(count($cities) > 0)
        <div class="mb-8">
            <label class="inline-block w-32 font-bold">City:</label>
            <select name="city" wire:model="city" 
                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                <option value=''>Choose a city</option>
                @foreach($cities as $city)
                    <option value={{ $city->id }}>{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div> --}}

<div>
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Province:</label>
        <select name="province" wire:model="province" class="border shadow p-2 bg-white">
            <option value=''>Choose a province</option>
            @foreach($provinces as $province)
                <option value={{ $province->id }}>{{ $province->name }}</option>
            @endforeach
        </select>
    </div>
    @if(count($regencies) > 0)    
        <div class="mb-8">
            <label class="inline-block w-32 font-bold">Regency:</label>
            <select name="regency" wire:model="regency" 
                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                <option value=''>Choose a regency</option>
                @foreach($regencies as $regency)
                    <option value={{ $regency->id }}>{{ $regency->name }}</option>
                @endforeach
            </select>
        </div>
    @if(count($districts) > 0)
        <div class="mb-8">
            <label class="inline-block w-32 font-bold">District:</label>
            <select name="district" wire:model="district" 
                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                <option value=''>Choose a district</option>
                @foreach($districts as $district)
                    <option value={{ $district->id }}>{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    @endif
</div>