<?php

namespace App\Http\Services\Branch;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BranchService
{
    function getAllBranches()
    {
        $branches = Branch::all();

        return $branches;
    }

    public function save($request)
    {
        try {
            $name = $request->input('name');
            $ward_id = $request->input('ward');
            $housenumber_street = $request->input('housenumber_street');
            $order = $request->input('order');

            $branch = Branch::create([
                'name' => $name,
                'ward_id' => $ward_id,
                'housenumber_street' => $housenumber_street,
                'order' => $order,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo mới chi nhánh thành công');
            return $branch;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo mới chi nhánh thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    public function update($request, $branch)
    {
        try {
            $name = $request->input('name');
            $ward_id = $request->input('ward');
            $housenumber_street = $request->input('housenumber_street');
            $order = $request->input('order');

            $branch->name = $name;
            $branch->ward_id = $ward_id;
            $branch->housenumber_street = $housenumber_street;
            $branch->order = $order;
            $branch->save();

            Session::flash('success', 'Cập nhật chi nhánh thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhật chi nhánh thất bại. Vui lòng thử lại !');
            return false;
        }
    }

    function deleteById($branch_id)
    {
        try {
            Branch::where('id', $branch_id)->delete();

            Session::flash('success', 'Xóa chi nhánh thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa chi nhánh thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}