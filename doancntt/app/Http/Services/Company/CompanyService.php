<?php

namespace App\Http\Services\Company;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CompanyService
{
    protected function fetchCompanyInformation($attributes = [])
    {
        $company = [];
        if (!empty($attributes)) {
            $company = Company::select($attributes)->first();
        } else {
            $company = Company::first();
        }

        return $company;
    }

    function getCompanyAllInformation()
    {
        $company = $this->fetchCompanyInformation([]);

        return $company;
    }

    function getCompanyInformationBySelectAttributes($attributes = [])
    {
        $company = $this->fetchCompanyInformation($attributes);

        return $company;
    }

    function updateCompanyInformation($request, $company)
    {
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $hotline = $request->input('hotline');
            $advise_phone = $request->input('advise_phone');
            $website = $request->input('website');
            $ward_id = $request->input('ward');
            $bank_account = $request->input('bank_account');
            $favicon = $request->input('favicon');
            $logo = $request->input('logo');
            $housenumber_street = $request->input('housenumber_street');
            $facebook_url = $request->input('facebook_url');
            $google_url = $request->input('google_url');
            $twitter_url = $request->input('twitter_url');
            $youtube_url = $request->input('youtube_url');
            $map_url = $request->input('map_url');
            $map = $request->input('map');
            $facebook = $request->input('facebook');
            $shipping_commit = $request->input('shipping_commit');
            $seo_keyword = $request->input('seo_keyword');

            $company->name = $name;
            $company->email = $email;
            $company->hotline = $hotline;
            $company->advise_phone = $advise_phone;
            $company->website = $website;
            $company->housenumber_street = $housenumber_street;
            $company->ward_id = $ward_id;
            $company->bank_account = $bank_account;
            $company->favicon = $favicon;
            $company->logo = $logo;
            $company->facebook_url = $facebook_url;
            $company->google_url = $google_url;
            $company->twitter_url = $twitter_url;
            $company->youtube_url = $youtube_url;
            $company->map_url = $map_url;
            $company->map = $map;
            $company->facebook = $facebook;
            $company->shipping_commit = $shipping_commit;
            $company->seo_keyword = $seo_keyword;
            $company->save();

            Session::flash('success', 'Cập nhật thông tin công ty thành công');
            return $company;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}