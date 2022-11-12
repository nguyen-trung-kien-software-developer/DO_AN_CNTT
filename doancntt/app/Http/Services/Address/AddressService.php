<?php

namespace App\Http\Services\Address;

use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Ward;

class AddressService
{
    public function getAllProvinces()
    {
        $provinces = Province::all();
        return $provinces;
    }

    public function getAllDistricts()
    {
        $districts = District::all();
        return $districts;
    }

    public function getAllWards()
    {
        $wards = Ward::all();
        return $wards;
    }

    public function getDistrictByProvinceId($request)
    {
        $id = (int) $request->input('province_id');

        $districts = District::where('province_id', '=', $id)->get();

        return $districts;
    }

    public function getWardByDistrictId($request)
    {
        $id = (int) $request->input('district_id');


        $districts = Ward::where('district_id', '=', $id)->get();

        return $districts;
    }
}