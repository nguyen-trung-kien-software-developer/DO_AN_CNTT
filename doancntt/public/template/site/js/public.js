$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(function () {
    // Ajax search
    var timeout = null;
    $(".search_heder #form_search .input_search").keyup(function (event) {
        $(".search-result").hide();
        clearTimeout(timeout);
        var pattern = $(this).val();

        $(".search-result").html("");

        timeout = setTimeout(function () {
            if (pattern) {
                $.ajax({
                    url: "/ajax/ajaxSearchProducts",
                    type: "GET",
                    data: { pattern: pattern },
                    dataType: "JSON",
                }).done(function (data) {
                    if (data.isSuccess) {
                        $(".search-result").html(data.html); //update data are returned
                        $(".search-result").show(); //display all list are searching
                    } else {
                        $(".search-result").html(data.message); //update data are returned
                        $(".search-result").show(); //display all list are searching
                    }
                });
            }
        }, 500);
    });

    //Validate change password form
    $("#reset_password_form").validate({
        rules: {
            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/ajax/checkExistEmailInLoginForm", //Check email duplicate
            },
            password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },

            password_confirmation: {
                required: true,
                equalTo: "[name=password]",
            },
        },

        messages: {
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email không tồn tại !!",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                // regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },

            password_confirmation: {
                required: "Vui lòng nhập lại mật khẩu",
                equalTo: "Nhập lại mật khẩu phải trùng khớp",
            },
        },
    });

    //Validate change password form
    $("#change_password_form").validate({
        rules: {
            current_password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
                remote: "/ajax/checkExistCurrentPassword", //Check email duplicate
            },

            password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },

            password_confirmation: {
                required: true,
                equalTo: "[name=password]",
            },
        },

        messages: {
            current_password: {
                required: "Vui lòng nhập mật khẩu hiện tại",
                // regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
                remote: "Password không tồn tại !!!",
            },

            password: {
                required: "Vui lòng nhập mật khẩu",
                // regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },

            password_confirmation: {
                required: "Vui lòng nhập lại mật khẩu",
                equalTo: "Nhập lại mật khẩu phải trùng khớp",
            },
        },
    });

    //Validate account information form
    $("#account_information_form").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
            },

            email: {
                required: true,
                maxlength: 50,
                email: true,
            },

            housenumber_street: {
                required: true,
            },
            province_id: {
                required: true,
            },
            district_id: {
                required: true,
            },
            ward_id: {
                required: true,
            },
        },

        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                regex: "Vui lòng nhập số và ký tự đặc biệt",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
            },
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email đã tồn tại",
            },
            housenumber_street: {
                required: "Vui lòng nhập địa chỉ",
            },
            province_id: {
                required: "Vui lòng chọn tỉnh/thành phố",
            },

            district_id: {
                required: "Vui lòng chọn quận/huyện",
            },

            ward_id: {
                required: "Vui lòng chọn phường/xã",
            },
        },
    });

    //Validate register form
    $(".login_form_user").validate({
        rules: {
            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/ajax/checkExistEmailInLoginForm", //Check email duplicate
            },

            password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },
        },

        messages: {
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email không tồn tại !!",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                // regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },
        },
    });

    //Validate register form
    $(".register_form_user").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
            },

            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/ajax/notExistingEmail", //Check email duplicate
            },

            address: {
                required: true,
            },

            password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },

            password_confirmation: {
                required: true,
                equalTo: "[name=password]",
            },

            // hiddenRecaptcha: {
            //     //true: lỗi
            //     //false: passed
            //     required: function () {
            //         if (grecaptcha.getResponse() == "") {
            //             return true;
            //         } else {
            //             return false;
            //         }
            //     },
            // },
        },

        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                regex: "Vui lòng nhập số và ký tự đặc biệt",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
            },
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email đã tồn tại",
            },
            address: {
                required: "Vui lòng nhập địa chỉ",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                // regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },

            password_confirmation: {
                required: "Vui lòng nhập lại mật khẩu",
                equalTo: "Nhập lại mật khẩu phải trùng khớp",
            },

            // hiddenRecaptcha: {
            //     required: "Vui lòng xác nhận Google reCAPTCHA",
            // },
        },
    });

    //Validate order form
    $("#frm_order").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
            },

            email: {
                required: true,
                maxlength: 50,
                email: true,
            },
            numberhouse_street: {
                required: true,
            },
            province_id: {
                required: true,
            },
            district_id: {
                required: true,
            },
            ward_id: {
                required: true,
            },
        },

        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                regex: "Vui lòng nhập số và ký tự đặc biệt",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
            },
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email đã tồn tại",
            },
            numberhouse_street: {
                required: "Vui lòng số nhà, tên đường ...",
            },
            province_id: {
                required: "Vui lòng chọn tỉnh/thành phố",
            },

            district_id: {
                required: "Vui lòng chọn quận/huyện",
            },

            ward_id: {
                required: "Vui lòng chọn phường/xã",
            },
        },
    });

    //Thay đổi province
    $("#province").change(function (e) {
        e.preventDefault();

        var provinceId = $(this).val();

        $.ajax({
            type: "POST",
            url: "/ajax/address/districts",
            data: { province_id: provinceId },
            dataType: "JSON",
        }).done(function (data) {
            //   alert(data.districts);
            updateSelectBox(data.districts, "#district");
        });

        $("#district").change(function (e) {
            e.preventDefault();
            var districtId = $(this).val();

            $.ajax({
                type: "POST",
                url: "/ajax/address/wards",
                data: { district_id: districtId },
                dataType: "JSON",
            }).done(function (data) {
                //   alert(data.districts);
                updateSelectBox(data.wards, "#ward");
            });
        });
    });

    $("#ward").change(function (e) {
        e.preventDefault();
        var province_id = $("#province").val();
        var shippingFee = $("#shipping_fee p span").html();

        $.ajax({
            type: "POST",
            url: "/ajax/transport",
            data: { province_id: province_id },
            dataType: "JSON",
        }).done(function (data) {
            var item = data.transport;

            var totalPrice = $("#total_price p span").html();
            totalPrice =
                Number(totalPrice.replace(/[^0-9.-]+/g, "")) -
                Number(shippingFee.replace(/[^0-9.-]+/g, ""));

            if (Number(totalPrice) >= 500000) {
                $("#shipping_fee p span").html(formatToCurrency(Number(0)));
                totalPrice = Number(totalPrice);
            } else {
                $("#shipping_fee p span").html(
                    formatToCurrency(Number(item[0].price))
                );
                totalPrice = Number(totalPrice) + Number(item[0].price);
            }

            $("#total_price p span").html(formatToCurrency(totalPrice));

            return;
        });
    });

    $(".cate_arrangement_pr_list_select select.selec_arrangementt").change(
        function (e) {
            e.preventDefault();
            const url = $(
                ".cate_arrangement_pr_list_select select.selec_arrangementt option:selected"
            ).attr("data-url");

            window.location.href = url;
        }
    );

    $(".ul_list_recieve_text_1 input[name=filter-price]").click(function (e) {
        e.preventDefault();
        var url = $(this).attr("data-url");
        window.location.href = url;
        // var price_range = $(this).val();

        // const params = new Proxy(new URLSearchParams(window.location.search), {
        //     get: (searchParams, prop) => searchParams.get(prop),
        // });
        // let brand_id = params.brand_id;

        // if (brand_id) {
        //     window.location.href = `?price_range=${price_range}&brand_id=${brand_id}`;
        //     return;
        // }

        // redirectProductFilter(price_range, null);
    });

    $(".list_th_scroll_ul input[name=filter-brand]").click(function (e) {
        var url = $(this).attr("data-url");
        window.location.href = url;
        // var brand_id = $(this).val();

        // const params = new Proxy(new URLSearchParams(window.location.search), {
        //     get: (searchParams, prop) => searchParams.get(prop),
        // });
        // let price_range = params.price_range;

        // if (price_range) {
        //     window.location.href = `?brand_id=${brand_id}&price_range=${price_range}`;
        //     return;
        // }

        // redirectProductFilter(null, brand_id);
    });

    // contact form jquery validation
    $("#contactform").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                // regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            email: {
                required: true,
                maxlength: 50,
                email: true,
            },
            mobile: {
                required: true,
                // regex: /^0([0-9]{9,9})$/,
                maxlength: 13,
            },
            address: {
                required: true,
            },
            title: {
                required: true,
            },
            content: {
                required: true,
            },
        },
        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên !",
                maxlength: "Vui lòng không nhập họ và tên quá 50 kí tự !",
                // regex: "Vui lòng nhập số và ký tự đặc biệt !",
            },
            email: {
                required: "Vui lòng nhập email !",
                maxlength: "Vui lòng nhập không quá 50 ký tự !",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại cá nhân !",
                // regex: "Vui lòng nhập 10 con số bắt đầu là 0 !",
                maxlength: "Vui lòng nhập số điện thoại không quá 13 số !",
            },
            address: {
                required: "Vui lòng nhập địa chỉ !",
            },
            title: {
                required: "Vui lòng nhập tiêu đề liên hệ !",
            },
            content: {
                required: "Vui lòng nhập nội dung tư vấn !",
            },
        },
        submitHandler: function (form) {
            var post_url = $(form).attr("action"); //get form action url
            var request_method = $(form).attr("method"); //get form GET/POST method

            //Lấy tất cả dữ liệu trong thẻ form và mã hóa
            var form_data = $(form).serialize(); //Encode form elements for submission

            $("#contactform .send-loading").html(
                '<div class="bg bg-warning"><span class="text text-white"><strong>Vui lòng đợi trong vài giây !</strong> <i class="fas fa-sync fa-spin"></i></span></div>'
            );
            $("#contactform .send-loading").show();

            $.ajax({
                type: request_method,
                url: post_url,
                data: form_data,
                dataType: "JSON",
                success: function (response) {
                    if (response.isSuccess) {
                        $("#contactform .send-loading").html(
                            '<div class="bg bg-success"><span class="text text-white"><strong>Gửi mail thành công !</strong></div>'
                        );
                    } else {
                        $("#contactform .send-loading").html(
                            '<div class="bg bg-danger"><span class="text text-white"><strong>Gửi mail thất bại !!!</strong></div>'
                        );
                    }
                },
            });
        },
    });

    // form support jquery validation
    $("#form_support").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                // regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            email: {
                required: true,
                maxlength: 50,
                email: true,
            },
            mobile: {
                required: true,
                // regex: /^0([0-9]{9,9})$/,
                maxlength: 13,
            },
            product_type_name: {
                required: true,
            },
            content: {
                required: true,
            },
        },
        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên !",
                maxlength: "Vui lòng không nhập họ và tên quá 50 kí tự !",
                // regex: "Vui lòng nhập số và ký tự đặc biệt !",
            },
            email: {
                required: "Vui lòng nhập email !",
                maxlength: "Vui lòng nhập không quá 50 ký tự !",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại cá nhân !",
                // regex: "Vui lòng nhập 10 con số bắt đầu là 0 !",
                maxlength: "Vui lòng nhập số điện thoại không quá 13 số !",
            },
            product_type_name: {
                required: "Vui lòng chọn loại sản phẩm !",
            },
            content: {
                required: "Vui lòng nhập nội dung tư vấn !",
            },
        },
        submitHandler: function (form) {
            var post_url = $(form).attr("action"); //get form action url
            var request_method = $(form).attr("method"); //get form GET/POST method

            //Lấy tất cả dữ liệu trong thẻ form và mã hóa
            var form_data = $(form).serialize(); //Encode form elements for submission

            $("#form_support .send-loading").html(
                '<div class="bg bg-warning"><span class="text text-white"><strong>Vui lòng đợi trong vài giây !</strong> <i class="fas fa-sync fa-spin"></i></span></div>'
            );
            $("#form_support .send-loading").show();

            $.ajax({
                type: request_method,
                url: post_url,
                data: form_data,
                dataType: "JSON",
                success: function (response) {
                    if (response.isSuccess) {
                        $("#form_support .send-loading").html(
                            '<div class="bg bg-success"><span class="text text-white"><strong>Gửi mail thành công !</strong></div>'
                        );
                    } else {
                        $("#form_support .send-loading").html(
                            '<div class="bg bg-danger"><span class="text text-white"><strong>Gửi mail thất bại !!!</strong></div>'
                        );
                    }
                },
            });
        },
    });

    $(".number_cart_input").change(function (e) {
        e.preventDefault();
        var qty = $(".number_cart_input").val();

        $("input[name=qty_in_cart]").val(qty);
    });

    $(".img_click_minus").click(function (e) {
        e.preventDefault();
        var qty = $(".number_cart_input").val();

        $("input[name=qty_in_cart]").val(qty);
    });

    $(".img_click_plus").click(function (e) {
        e.preventDefault();
        var qty = $(".number_cart_input").val();

        $("input[name=qty_in_cart]").val(qty);
    });

    $(".img_click_minus1").click(function (e) {
        e.preventDefault();
        var number_cart_input = $(this).next(".number_cart_input");
        var qty = parseInt(number_cart_input.val());

        if (qty <= 1) {
            number_cart_input.val(1);
            return;
        }
        number_cart_input.val(qty - 1);
    });

    $(".img_click_plus1").click(function (e) {
        e.preventDefault();
        var number_cart_input = $(this).prev(".number_cart_input");
        var qty = parseInt(number_cart_input.val());

        number_cart_input.val(qty + 1);
    });

    rating_submit();
    let options = {
        max_value: 5,
        step_size: 1,
        update_input_field_name: $("input[name=rating]"),
    };
    $(".rate").rate(options);
    let readOptions = {
        readonly: true,
    };
    $(".rate_list").rate(readOptions);
});

function rating_submit() {
    let form = $("#frm-product-rating");
    form.submit(function (e) {
        e.preventDefault();
        let rating_message = $("#rating-message");
        let rating = form.find($("input[name=rating]")).val();
        let review_name = form.find($("input[name=review_name]")).val();
        let review_phone = form.find($("input[name=review_phone]")).val();
        let review_email = form.find($("input[name=review_email]")).val();
        let review_body = form.find($("textarea[name=review_body]")).val();
        if (rating == "" || rating == 0) {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Bạn chưa đánh giá điểm sao, vui lòng đánh giá." +
                    "</div>"
            );
            return false;
        }
        if (review_body == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập nội dung đánh giá về sản phẩm." +
                    "</div>"
            );
            form.find($("textarea[name=review_body]")).focus();
            return false;
        } else if (review_body.length < 40) {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Nội dung đánh giá quá ít. Vui lòng nhập thêm nội dung đánh giá về sản phẩm." +
                    "</div>"
            );
            form.find($("textarea[name=review_body]")).focus();
            return false;
        }
        if (review_name == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập họ tên." +
                    "</div>"
            );
            form.find($("input[name=review_name]")).focus();
            return false;
        }
        if (review_phone == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập số điện thoại." +
                    "</div>"
            );
            form.find($("input[name=review_phone]")).focus();
            return false;
        } else if (!phone_regex.test(review_phone)) {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Số điện thoại không hợp lệ." +
                    "</div>"
            );
            form.find($("input[name=phone]")).focus();
            return false;
        }
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
            dataType: "JSON",
            success: function (result) {
                if (result.isSuccess) {
                    rating_message.html(
                        '<div class="txt_success w3-right-align text text-success">' +
                            result.message +
                            "</div>"
                    );
                    form.find(
                        "input[type=text], input[type=email], textarea, select"
                    ).val("");
                    $(".rate").rate("setValue", 0);
                } else {
                    rating_message.html(
                        '<div class="show_error w3-right-align text text-danger">' +
                            result.message +
                            "</div>"
                    );
                }
            },
            // error: function (response) {
            //     // var errors = $.parseJSON(response.responseText);
            //     // $.each(errors, function (index, value) {
            //     //     toastr.error(value);
            //     //     rating_message.html(
            //     //         '<div class="show_error w3-right-align">' +
            //     //             value +
            //     //             "</div>"
            //     //     );
            //     // });
            //     rating_message.html(
            //         '<div class="show_error w3-right-align">' +
            //             response.message +
            //             "</div>"
            //     );
            // },
        });
    });
}

function formatToCurrency(amount) {
    // return amount.toFixed(0).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// function redirectProductFilter(price_range, brand_id) {
//     if (price_range != null) {
//         window.location.href = `?price_range=${price_range}`;
//     } else {
//         window.location.href = `?brand_id=${brand_id}`;
//     }
// }

function goToPage(
    clickedTag,
    url,
    page,
    category_id,
    price_range,
    brand_id,
    sort
) {
    let ajax_loadding = $(
        `#load_product_list_8 .product_list_in_sub_category_id_${category_id} ~ .ajax_loadding`
    );

    $.ajax({
        type: "GET",
        url: url,
        beforeSend: function () {
            ajax_loadding.show();
        },
        data: {
            page: Number(page),
            category_id: Number(category_id),
            price_range,
            brand_id,
            sort,
        },
        dataType: "JSON",
        success: function (res) {
            console.log(res.products);
            if (res.isSuccess) {
                $(
                    `#load_product_list_8 .product_list_in_sub_category_id_${category_id} ~ div.box_product_v2`
                ).remove();

                let productListHtml = "";

                res.products.forEach((e) => {
                    let priceHtml = "";
                    if (e.price == 0 && e.sale_price == 0) {
                        priceHtml = `<p class="price_v1">Liên hệ</p>`;
                    } else {
                        if (e.price > e.sale_price) {
                            priceHtml = `<p class="price_v1_old">${formatToCurrency(
                                e.price
                            )} VND</p>
                            <p class="price_v1">${formatToCurrency(
                                e.sale_price
                            )} VND</p>`;
                        } else {
                            priceHtml = `<p class="price_v1">${formatToCurrency(
                                e.sale_price
                            )} VND</p>`;
                        }
                    }

                    let discountPercentageHtml = "";
                    let discount_percentage = 0;
                    discount_percentage =
                        ((e.price - e.sale_price) * 100) / e.price;

                    if (
                        e.price != 0 &&
                        e.sale_price != 0 &&
                        e.price > e.sale_price
                    ) {
                        discountPercentageHtml = `<p class="price_percent">${Math.round(
                            discount_percentage
                        )}%</p>`;
                    }

                    productListHtml += `<div class="box_product_v2">
                    <div class="box_product_v2_img"> <a href="#" title="${e.name}">
                            <img class="lazy" src="storage/uploads/${e.featured_image}"
                                alt="${e.name}" style="display: block;"> </a> </div>
                    <div class="box_product_v2_name_element">
                        <div class="box_product_v2_name"> <a href="#" title="${e.name}">${e.name}</a> </div>
                        <div class="box_product_v2_price clearfix">
                            <div class="box_product_v2_price_num">${priceHtml}</div>
                            <div class="box_product_v2_price_percent"><button class="btn_cart"><span>Mua
                                        ngay</span><i class="icon-muahang"></i></button></div>
                        </div>
                    </div>
                    ${discountPercentageHtml}
                </div>
                `;
                });

                $(
                    `#load_product_list_8 .product_list_in_sub_category_id_${category_id}`
                ).html(productListHtml);

                if (
                    $(
                        `#load_product_list_8 .product_list_in_sub_category_id_${category_id} ~ #page_cate_8 .paging ul.pagination li`
                    ).hasClass("active")
                ) {
                    $(
                        `#load_product_list_8 .product_list_in_sub_category_id_${category_id} ~ #page_cate_8 .paging ul.pagination li`
                    ).removeClass("active");
                }

                const liTag = $(clickedTag).parent();
                $(liTag).addClass("active");

                ajax_loadding.hide();
            }
        },
    });
}

function updateQtyInCart(url, tag, rowId) {
    if ($(tag).hasClass("img_click_minus1")) {
        const number_cart_input = $(tag).next(".number_cart_input");
        var qty = parseInt(number_cart_input.val());
        qty--;

        $.ajax({
            type: "PUT",
            url: url,
            data: { rowId, qty },
            dataType: "JSON",
            success: function (res) {
                if (res.isSuccess) {
                    var total_price = res.total_price;
                    var oneCart = res.oneCart;
                    var product_qty = res.product_qty;

                    $(`.product_in_cart_${rowId} #sub_total_one_product`).html(
                        formatToCurrency(
                            Number(oneCart.price) * Number(oneCart.qty)
                        ) + " VND"
                    );

                    // $(".totail_11 .totail_1_2").html(total_price + " VND");
                    // $("#qty_in_cart span").html(product_qty);
                } else {
                    alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                }
            },
        });
    } else if ($(tag).hasClass("img_click_plus1")) {
        var number_cart_input = $(tag).prev(".number_cart_input");
        var qty = parseInt(number_cart_input.val());
        qty++;

        $.ajax({
            type: "PUT",
            url: url,
            data: { rowId, qty },
            dataType: "JSON",
            success: function (res) {
                var total_price = res.total_price;
                var oneCart = res.oneCart;
                var product_qty = res.product_qty;

                if (res.isSuccess) {
                    $(`.product_in_cart_${rowId} #sub_total_one_product`).html(
                        formatToCurrency(
                            Number(oneCart.price) * Number(oneCart.qty)
                        ) + " VND"
                    );

                    $(".totail_11 .totail_1_2").html(total_price + " VND");
                    $("#qty_in_cart span").html(product_qty);
                } else {
                    alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                }
            },
        });
    } else {
        var number_cart_input = $(tag);
        var qty = parseInt(number_cart_input.val());

        $.ajax({
            type: "PUT",
            url: url,
            data: { rowId, qty },
            dataType: "JSON",
            success: function (res) {
                var total_price = res.total_price;
                var oneCart = res.oneCart;
                var product_qty = res.product_qty;

                if (res.isSuccess) {
                    $(`.product_in_cart_${rowId} #sub_total_one_product`).html(
                        formatToCurrency(
                            Number(oneCart.price) * Number(oneCart.qty)
                        ) + " VND"
                    );

                    $(".totail_11 .totail_1_2").html(total_price + " VND");
                    $("#qty_in_cart span").html(product_qty);
                } else {
                    alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                }
            },
        });
    }
}

function deleteItemInCart(url, rowId) {
    $.ajax({
        type: "DELETE",
        url: url,
        data: { rowId },
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                window.location.reload();
            } else {
                alert("Xóa sản phẩm mua thất bại !!");
            }
        },
    });
}

// Cập nhật các option cho thẻ select
function updateSelectBox(data, selector) {
    // var items = JSON.parse(data);
    var items = data;

    //Tìm tất cả các option tag và trừ thẻ đầu tiên
    $(selector).find("option").not(":first").remove();

    if (!data) return;
    for (let i = 0; i < items.length; i++) {
        let item = items[i];
        let option =
            '<option value="' + item.id + '"> ' + item.name + "</option>";

        $(selector).append(option);
    }
}

// Check exist discount code in database
function checkExistDiscountCode(url) {
    const discountCode = $("input[name=voucher_code]").val();
    const discountPrice = $("#discount_code p span").html();

    if (!discountCode) {
        $(".show_error").html("Vui lòng nhập mã giảm giá !").show();
        return;
    }
    $(".show_error").html("").hide();

    $.ajax({
        type: "POST",
        url: url,
        data: { discountCode },
        dataType: "JSON",
        success: function (res) {
            var shippingFee = $("#shipping_fee p span").html();

            if (res.isSuccess) {
                $("#discount_code p span").html(
                    formatToCurrency(res.discountCode.discount_price)
                );

                var totalPrice = $("#total_price p span").html();

                totalPrice =
                    Number(totalPrice.replace(/[^0-9.-]+/g, "")) -
                    Number(res.discountCode.discount_price) +
                    Number(discountPrice.replace(/[^0-9.-]+/g, "")) -
                    Number(shippingFee.replace(/[^0-9.-]+/g, ""));

                if (Number(totalPrice) >= 500000) {
                    $("#shipping_fee p span").html(formatToCurrency(Number(0)));
                } else {
                    totalPrice += Number(shippingFee.replace(/[^0-9.-]+/g, ""));
                }

                $("#total_price p span").html(formatToCurrency(totalPrice));

                $(".show_success")
                    .html(`Mã giảm giá ${discountCode} hợp lệ !`)
                    .show();
            } else {
                $("#discount_code p span").html("");
                var totalPrice = $("#total_price p span").html();
                totalPrice =
                    Number(totalPrice.replace(/[^0-9.-]+/g, "")) +
                    Number(discountPrice.replace(/[^0-9.-]+/g, ""));

                $("#total_price p span").html(formatToCurrency(totalPrice));

                $(".show_error")
                    .html(`Mã giảm giá ${discountCode} không hợp lệ !!!`)
                    .show();
            }
        },
    });
}
