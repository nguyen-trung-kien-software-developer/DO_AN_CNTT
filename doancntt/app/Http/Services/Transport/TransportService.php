<?php

namespace App\Http\Services\Transport;

use App\Models\Transport;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\Transport\TransportCollection;
use Carbon\Carbon;

class TransportService
{
    public function getTransportByProvinceId($request)
    {
        $id = $request->input('province_id');

        $transport = Transport::where('province_id', $id)->get();

        return $transport;
    }

    public function getAll()
    {
        $transports = Transport::all();

        return $transports;
    }

    public function getTransport($transport)
    {
        $transport = Transport::where('id', $transport->id)->get()->first();

        return $transport;
    }

    public function save($request)
    {
        try {
            $province_id = $request->input('province');
            $price = $request->input('price');

            $transport = Transport::create([
                'province_id' => $province_id,
                'price' => $price,
            ]);

            Session::flash('success', 'Tạo mới vận chuyển thành công');
            return $transport;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới vận chuyển thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $transport)
    {
        try {
            $province_id = $request->input('province');
            $price = $request->input('price');

            $transport->province_id = $province_id;
            $transport->price = $price;
            $transport->save();

            Session::flash('success', 'Cập nhật vận chuyển thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật vận chuyển thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($transport_id)
    {
        try {
            Transport::where('id', $transport_id)->delete();

            Session::flash('success', 'Xóa vận chuyển thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa vận chuyển thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}