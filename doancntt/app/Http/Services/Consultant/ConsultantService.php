<?php

namespace App\Http\Services\Consultant;

use App\Models\Consultant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ConsultantService
{
    public function getAllConsultantsOrderByCreatedDateDesc()
    {
        $consultants = Consultant::orderBy('created_date', 'desc')->get();

        return $consultants;
    }

    function getConsultantListOrderByCreatedDateDescHavingLimit($limit, $orderBy)
    {
        $consultants = Consultant::orderBy($orderBy, 'desc')->limit($limit)->get();

        return $consultants;
    }

    function saveRequestConsultant($request)
    {
        try {
            $fullname = $request->input('fullname');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $product_type_name = $request->input('product_type_name');
            $content = $request->input('content');

            $consultant = Consultant::create([
                'fullname' => $fullname,
                'mobile' => $mobile,
                'email' => $email,
                'product_type_name' => $product_type_name,
                'content' => $content,
                'created_date' => Carbon::now()->format("Y-m-d H:i:s"),
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            return $consultant;
        } catch (\Exception $error) {
            return false;
        }
    }

    function deleteById($consultant_id)
    {
        try {
            Consultant::where('id', $consultant_id)->delete();

            Session::flash('success', 'Xóa hỗ trợ tư vấn thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa hỗ trợ tư vấn thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}