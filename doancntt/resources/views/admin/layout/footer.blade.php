<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed <a href="{{ $footerData->company['website'] }}"
                target="_blank">{{ $footerData->company['name'] }}</a> 2022</p>
    </div>
</div>
</div>

<div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto; display: none;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show"
        tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-header">
            <ul class="swal2-progresssteps" style="display: none;"></ul>
            <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span
                        class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>
            <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span></div>
            <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;"><span
                    class="swal2-icon-text">!</span></div>
            <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span></div>
            <div class="swal2-icon swal2-success" style="display: none;">
                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div><span
                    class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                <div class="swal2-success-ring"></div>
                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div><img class="swal2-image" style="display: none;">
            <h2 class="swal2-title" id="swal2-title" style="display: flex;"></h2><button type="button"
                class="swal2-close" style="display: none;">Xác nhận xóa !!×</button>
        </div>
        <div class="swal2-content">
            <div id="swal2-content" style="display: block;">Bạn có chắc chắn xóa ?</div>
            <input class="swal2-input" style="display: none;"><input type="file" class="swal2-file"
                style="display: none;">
            <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox"
                style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label>
            <textarea class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        </div>
        <div class="swal2-actions" style="display: flex;">
            <form action="#" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="swal2-confirm swal2-styled" aria-label=""
                    style="background-color: rgb(221, 107, 85); border-left-color: rgb(221, 107, 85); border-right-color: rgb(221, 107, 85);">Xác
                    nhận</button>
            </form>

            <button type="button" class="swal2-cancel swal2-styled" aria-label=""
                style="display: inline-block;">Hủy</button>
        </div>
        <div class="swal2-footer" style="display: none;"></div>
    </div>
</div>

<!--**********************************
        Scripts
    ***********************************-->
<script src="{{ asset('template/site/vendor/jquery.min.js') }}"></script>
<!-- Required vendors -->
<script src="{{ asset('template/admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('template/admin/js/quixnav-init.js') }}"></script>
<script src="{{ asset('template/admin/js/custom.min.js') }}"></script>

{{-- <script src="{{ asset('template/admin/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ asset('template/admin/js/plugins-init/sweetalert.init.js') }}"></script> --}}
<!-- Datatable -->
<script src="{{ asset('template/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/admin/js/plugins-init/datatables.init.js') }}"></script>

<!-- Daterangepicker -->
<!-- momment js is must -->
<script src="{{ asset('template/admin/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/admin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- clockpicker -->
<script src="{{ asset('template/admin/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
<!-- asColorPicker -->
<script src="{{ asset('template/admin/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('template/admin/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
<script src="{{ asset('template/admin/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
<!-- Material color picker -->
<script
src="{{ asset('template/admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>
<!-- pickdate -->
<script src="{{ asset('template/admin/vendor/pickadate/picker.js') }}"></script>
<script src="{{ asset('template/admin/vendor/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('template/admin/vendor/pickadate/picker.date.js') }}"></script>



<!-- Daterangepicker -->
<script src="{{ asset('template/admin/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
<!-- Clockpicker init -->
<script src="{{ asset('template/admin/js/plugins-init/clock-picker-init.js') }}"></script>
<!-- asColorPicker init -->
<script src="{{ asset('template/admin/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
<!-- Material color picker init -->
<script src="{{ asset('template/admin/js/plugins-init/material-date-picker-init.js') }}"></script>
<!-- Pickdate -->
<script src="{{ asset('template/admin/js/plugins-init/pickadate-init.js') }}"></script>



<script src="{{ asset('template/site/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('template/admin/js/public.js') }}"></script>

@yield('foot')
