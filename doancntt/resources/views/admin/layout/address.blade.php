@php
if (!empty($order)) {
    $districts = [];
    $wards = [];
    $selected_ward = $order->ward;
    $selected_province_id = null;
    $selected_district_id = null;
    $selected_ward_id = null;
    $shipping_fee = 0;

    // var_dump($selected_ward); exit;

    if (!empty($selected_ward)) {
        $selected_ward_id = $selected_ward->id; // 2 selected_ward_id
        $selected_district = $selected_ward->district;
        $selected_district_id = $selected_district->id; //3 selected_district_id
        $selected_province = $selected_district->province;
        $selected_province_id = $selected_province->id; //4 selected_province_id

        $districts = $selected_province->districts; // 5 districts
        $wards = $selected_district->wards; //6 wards

        // var_dump($shipping_fee); exit;
    }
} elseif (!empty($customer)) {
    $districts = [];
    $wards = [];
    $selected_ward = $customer->ward;
    $selected_province_id = null;
    $selected_district_id = null;
    $selected_ward_id = null;
    $shipping_fee = 0;

    // var_dump($selected_ward); exit;

    if (!empty($selected_ward)) {
        $selected_ward_id = $selected_ward->id; // 2 selected_ward_id
        $selected_district = $selected_ward->district;
        $selected_district_id = $selected_district->id; //3 selected_district_id
        $selected_province = $selected_district->province;
        $selected_province_id = $selected_province->id; //4 selected_province_id

        $districts = $selected_province->districts; // 5 districts
        $wards = $selected_district->wards; //6 wards

        // var_dump($shipping_fee); exit;
    }
} elseif (!empty($company)) {
    $districts = [];
    $wards = [];
    $selected_ward = $company->ward;
    $selected_province_id = null;
    $selected_district_id = null;
    $selected_ward_id = null;
    $shipping_fee = 0;

    if (!empty($selected_ward)) {
        $selected_ward_id = $selected_ward->id; // 2 selected_ward_id
        $selected_district = $selected_ward->district;
        $selected_district_id = $selected_district->id; //3 selected_district_id
        $selected_province = $selected_district->province;
        $selected_province_id = $selected_province->id; //4 selected_province_id

        $districts = $selected_province->districts; // 5 districts
        $wards = $selected_district->wards; //6 wards
    }
} elseif (!empty($branch)) {
    $districts = [];
    $wards = [];
    $selected_ward = $branch->ward;
    $selected_province_id = null;
    $selected_district_id = null;
    $selected_ward_id = null;
    $shipping_fee = 0;

    if (!empty($selected_ward)) {
        $selected_ward_id = $selected_ward->id; // 2 selected_ward_id
        $selected_district = $selected_ward->district;
        $selected_district_id = $selected_district->id; //3 selected_district_id
        $selected_province = $selected_district->province;
        $selected_province_id = $selected_province->id; //4 selected_province_id

        $districts = $selected_province->districts; // 5 districts
        $wards = $selected_district->wards; //6 wards
    }
}
@endphp

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label class="text-label">Tỉnh / Thành Phố</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </span>
                </div>

                <select class="form-control" name="province" id="province">
                    <option value="">Vui lòng chọn tỉnh, thành phố</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}"
                            {{ !empty($customer->ward_id) && $customer->ward->district->province->id == $province->id ? 'selected' : '' }}
                            {{ !empty($company->ward_id) && $company->ward->district->province->id == $province->id ? 'selected' : '' }}
                            {{ !empty($order->shipping_ward_id) && $order->ward->district->province->id == $province->id ? 'selected' : '' }}
                            {{ !empty($branch->ward_id) && $branch->ward->district->province->id == $province->id ? 'selected' : '' }}>
                            {{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
            @if (!empty($errors->first('province')))
                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                    {{ $errors->first('province') }}</div>
            @endif
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label class="text-label">Quận / Huyện</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </span>
                </div>

                <select class="form-control" name="district" id="district">
                    <option value="">Vui lòng chọn quận, huyện</option>
                    @if (!empty($districts))
                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}"
                                {{ !empty($selected_district_id) && $selected_district_id == $district->id ? 'selected' : '' }}>
                                {{ $district->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @if (!empty($errors->first('district')))
                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                    {{ $errors->first('district') }}</div>
            @endif
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label class="text-label">Phường / Xã</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </span>
                </div>

                <select class="form-control" name="ward" id="ward">
                    <option value="">Vui lòng chọn phường, xã</option>
                    @if (!empty($districts))
                        @foreach ($wards as $ward)
                            <option value="{{ $ward->id }}"
                                {{ !empty($selected_ward_id) && $selected_ward_id == $ward->id ? 'selected' : '' }}>
                                {{ $ward->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @if (!empty($errors->first('ward')))
                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                    {{ $errors->first('ward') }}</div>
            @endif
        </div>
    </div>
</div>
