@php
if (Auth::guard('customer')->check()) {
    $customer = Auth::guard('customer')->user();
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
        // $shipping_fee = $selected_province->transport->price;

        // var_dump($shipping_fee); exit;
    }
}

@endphp

<div>
    <select name="province_id" id="province">
        <option value="" selected>Chon tỉnh / thành</option>
        @foreach ($provinces as $province)
            <option value="{{ $province->id }}"
                {{ !empty($customer->ward_id) && $customer->ward->district->province->id == $province->id ? 'selected' : '' }}>
                {{ $province->name }}</option>
        @endforeach
    </select>

    @if (!empty($errors->first('province')))
        <div class="col-sm-12" style="color:red; margin-bottom:20px;">
            {{ $errors->first('province') }}</div>
    @endif
</div>

<div>
    <select name="district_id" id="district">
        <option value="" selected>Chon quận huyện</option>
        @if (!empty($districts))
            @foreach ($districts as $district)
                <option value="{{ $district->id }}"
                    {{ !empty($selected_district_id) && $selected_district_id == $district->id ? 'selected' : '' }}>
                    {{ $district->name }}</option>
            @endforeach
        @endif
    </select>

    @if (!empty($errors->first('district')))
        <div class="col-sm-12" style="color:red; margin-bottom:20px;">
            {{ $errors->first('district') }}</div>
    @endif
</div>

<div>
    <select name="ward_id" id="ward">
        <option value="" selected>Chon phường xã</option>
        @if (!empty($districts))
            @foreach ($wards as $ward)
                <option value="{{ $ward->id }}"
                    {{ !empty($selected_ward_id) && $selected_ward_id == $ward->id ? 'selected' : '' }}>
                    {{ $ward->name }}</option>
            @endforeach
        @endif
    </select>

    @if (!empty($errors->first('ward')))
        <div class="col-sm-12" style="color:red; margin-bottom:20px;">
            {{ $errors->first('ward') }}</div>
    @endif
</div>
