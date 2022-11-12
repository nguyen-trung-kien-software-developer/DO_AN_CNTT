<div class="cate_arrangement_pr_list_select">
    <p>Sắp xếp theo</p>
    <select class="selec_arrangementt" name="sort">
        <option value="" data-url="{{ request()->fullUrlWithQuery(['sort' => '']) }}"
            {{ empty(request()->input('sort')) }}>Tất cả</option>
        <option value="price-asc" data-url="{{ request()->fullUrlWithQuery(['sort' => 'price-asc']) }}"
            {{ request()->input('sort') == 'price-asc' ? 'selected' : '' }}>Giá từ thấp đến
            cao</option>
        <option value="price-desc" data-url="{{ request()->fullUrlWithQuery(['sort' => 'price-desc']) }}"
            {{ request()->input('sort') == 'price-desc' ? 'selected' : '' }}>Giá từ cao đến
            thấp</option>
        <option value="created-asc" data-url="{{ request()->fullUrlWithQuery(['sort' => 'created-asc']) }}"
            {{ request()->input('sort') == 'created-asc' ? 'selected' : '' }}>Từ cũ đến mới
        </option>
        <option value="created-desc" data-url="{{ request()->fullUrlWithQuery(['sort' => 'created-desc']) }}"
            {{ request()->input('sort') == 'created-desc' ? 'selected' : '' }}>Từ mới đến
            cũ</option>
        <option value="alpha-asc" data-url="{{ request()->fullUrlWithQuery(['sort' => 'alpha-asc']) }}"
            {{ request()->input('sort') == 'alpha-asc' ? 'selected' : '' }}>Từ A - Z
        </option>
        <option value="alpha-desc" data-url="{{ request()->fullUrlWithQuery(['sort' => 'alpha-desc']) }}"
            {{ request()->input('sort') == 'alpha-asc' ? 'selected' : '' }}>Từ Z - A
        </option>
    </select>
</div>
