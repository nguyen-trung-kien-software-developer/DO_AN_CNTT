@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.contact.index') }}">Liên hệ</a> </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <div class="bando_cavas  wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1000ms">
            <div id="mapCanvas">
                {!! $company->map !!}
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1 clearfix">
            <div class="container width1250">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-info box-contact-form  wow fadeInLeft animated" data-wow-delay="0.5s"
                            data-wow-duration="1000ms">

                            <address class="address-footer address-contact  wow fadeInDown  animated" data-wow-delay="0.2s"
                                data-wow-duration="1000ms">
                                <h1>{{ $company->name }}</h1>

                                <div class="main-address-footer">
                                    <div class="row-footer">
                                        <i class="fa fa-map-marker"></i>

                                        <p><span>|</span>{{ $company->housenumber_street . ', ' . $company->ward->name . ', ' . $company->ward->district->name . ', ' . $company->ward->district->province->name }}
                                        </p>
                                    </div>

                                    <div class="row-footer">
                                        <i class="fa fa-phone"></i>
                                        <p><span>|</span>
                                            <a href="tel:Hotline: {{ $company->hotline }}">Hotline:
                                                {{ $company->hotline }}</a>
                                        </p>
                                    </div>

                                    <div class="row-footer">
                                        <i class="fa fa-envelope-o"></i>
                                        <p><span>|</span>{{ $company->email }}</p>
                                    </div>
                                    <div class="row-footer">
                                        <i class="fa fa-globe"></i>
                                        <p><span>|</span>{{ $company->website }}</p>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-form box-contact-form  wow fadeInRight animated" data-wow-delay="0.5s"
                            data-wow-duration="1000ms">
                            <h3 class="title-8">Form liên hệ</h3>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="contactform" name="contact" method="POST"
                                action="{{ route('site.contact.sendContact') }}">
                                @csrf
                                <div class="form-group col-md-12">
                                    <input type="text" name="fullname" id="name" placeholder="Họ và tên" value=""
                                        class="textfiled form-control">
                                    <p class="p-error"> </p>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" name="email" id="email" placeholder="email" value=""
                                        class="textfiled form-control">
                                    <p class="p-error"> </p>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="mobile" class="form-control" value=""
                                        placeholder="Số điện thoại">
                                    <p class="p-error" style="clear: both; float: right;"> </p>

                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="address" class="form-control" value="" placeholder="Địa chỉ">
                                    <p class="p-error"> </p>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="title" placeholder="Tiêu đề" class="form-control" value="">

                                    <p class="p-error"> </p>
                                </div>

                                <div class="form-group col-md-12">
                                    <textarea placeholder="Nội dung" class="form-control" name="content"></textarea>
                                    <p class="p-error"> </p>
                                </div>

                                <div class="form-group col-md-12 mb-3 mt-2 send-loading" style="display: none;">

                                </div>

                                <div class="form-group col-md-12">
                                    <input type="submit" name="submitbtn" placeholder="" class="btn bt-submit pull-left "
                                        value="Gởi"><input class="btn pull-left bt-reset" type="reset" value="Làm lại">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
