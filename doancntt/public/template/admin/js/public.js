$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(function () {
    // Ajax search
    var timeout = null;
    $(".search_product_name").keyup(function (event) {
        $(".search-result").hide();
        clearTimeout(timeout);
        var pattern = $(this).val();

        $(".search-result").html("");

        timeout = setTimeout(function () {
            if (pattern) {
                $.ajax({
                    url: "/admin/ajax/ajaxSearchProducts",
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

    //Hiển thị package khi load xong trang web
    $.ajax({
        url: "/admin/package/display",
        type: "POST",
    }).done(function (res) {
        updateRowIntoProductList(res.carts);
    });

    //Thêm sản phẩm vào package
    // $(".add-products-to-order").click(function (e) {
    //     e.preventDefault();
    //     alert("haha");
    //     return;

    //     let product_id = $("input[name=product_id]").val();
    //     let qty = $("input[name=qty]").val();

    //     if (!product_id) {
    //         alert("Vui lòng nhập mã sản phẩm");
    //         return;
    //     }
    //     if (!qty) {
    //         alert("Vui lòng nhập số lượng sản phẩm");
    //         return;
    //     }

    //     $.ajax({
    //         type: "POST",
    //         url: "/admin/package/addProductToPackage",
    //         data: { product_id, qty },
    //         dataType: "JSON",
    //         success: function (res) {
    //             if (res.isSuccess) {
    //                 updateRowIntoProductList(res.carts);
    //             } else {
    //                 alert(res.message);
    //             }
    //         },
    //     });
    // });

    $("select[name=parentCategory]").change(function (e) {
        e.preventDefault();
        let parentCategory_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/ajax/getSubCategories",
            data: { parentCategory_id },
            dataType: "JSON",
            success: function (res) {
                if (res.isSuccess) {
                    updateSelectBox(
                        res.subCategories,
                        "select[name=subCategory]"
                    );
                }
            },
        });
    });

    $("select[name=product]").change(function (e) {
        e.preventDefault();
        let product_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/ajax/getProduct",
            data: { product_id },
            dataType: "JSON",
            success: function (res) {
                if (res.isSuccess) {
                    $("input[name=unit_price]").val(res.product.sale_price);
                }
            },
        });
    });

    //Validate register form
    $("#update_private_information_form").validate({
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
                remote: "/admin/ajax/notExistingEmail", //Check email duplicate
            },

            username: {
                required: true,
                maxlength: 50,
            },

            password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
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
            username: {
                required: "Vui lòng nhập tên người dùng",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
            },
        },
    });

    // Login Form Validation
    $("#user_login_form").validate({
        rules: {
            // simple rule, converted to {required:true}
            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/admin/ajax/checkExistEmailInLoginForm", //Check email duplicate
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

    $(".custom-file-input").on("change", function () {
        const form = new FormData();
        //Lấy file image từ html
        form.append("file", $(this)[0].files[0]);

        const type = $(this)
            .parent()
            .parent()
            .parent()
            .find("#image_type")
            .val();
        form.append("type", type);

        // const imgTag = $(this)
        //     .parent()
        //     .parent()
        //     .parent()
        //     .find("#image_show")
        //     .children()
        //     .children("#upload-image");

        // const aTag = $(this)
        //     .parent()
        //     .parent()
        //     .parent()
        //     .find("#image_show")
        //     .children();

        const imageShow = $(this)
            .parent()
            .parent()
            .parent()
            .find("#image_show");

        const image = $(this).next();

        $.ajax({
            processData: false,
            contentType: false,
            type: "POST",
            url: "/admin/ajax/upload-company-file",
            data: form,
            dataType: "JSON",
            success: function (response) {
                if (response.isSuccess) {
                    $(imageShow).html(
                        '<a href="' +
                            response.url +
                            '" target="_blank"><img src="' +
                            response.url +
                            '" width="35%" height="300px""></a>'
                    );

                    $(image).val(response.storedName);

                    if (type == "page_image") {
                        $("input[name=url]").val(response.url);
                    }
                } else {
                    alert("Upload file lỗi");
                }
            },
        });
    });

    $("button.destroy").click(function (e) {
        e.preventDefault();
        $(modal).show();

        var dataUrl = $(this).attr("data-url");

        $(".swal2-fade form").attr("action", dataUrl);
    });

    $("#example tbody").on("click", "button.destroy", function (e) {
        e.preventDefault();
        $(modal).show();

        var dataUrl = $(this).attr("data-url");

        $(".swal2-fade form").attr("action", dataUrl);
    });

    // Get the modal
    var modal = document.querySelector(".swal2-fade");

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    $(".swal2-fade .swal2-cancel").click(function (e) {
        e.preventDefault();
        $(modal).hide();
    });

    // Thay đổi customer
    $("select[name=customer]").change(function (e) {
        e.preventDefault();
        var customer_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/ajax/getCustomer",
            data: { customer_id },
            dataType: "JSON",
            success: function (res) {
                if (res.isSuccess) {
                    const customer = res.customer;
                    $("input[name=shipping_name]").val(customer.name);
                    $("input[name=shipping_mobile]").val(customer.mobile);
                    $("input[name=shipping_email]").val(customer.email);
                    $("input[name=housenumber_street]").val(
                        customer.housenumber_street
                    );

                    updateSelectBox(
                        res.provinces,
                        "#province",
                        res.selected_province_id
                    );
                    updateSelectBox(
                        res.districts,
                        "#district",
                        res.selected_district_id
                    );
                    updateSelectBox(res.wards, "#ward", res.selected_ward_id);

                    $("input[name=shipping_fee]").val(res.shipping_fee);
                }
            },
        });
    });

    //Thay đổi province
    $("#province").change(function (e) {
        e.preventDefault();

        var province_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/ajax/address/districts",
            data: { province_id: province_id },
            dataType: "JSON",
        }).done(function (data) {
            //   alert(data.districts);
            updateSelectBox(data.districts, "#district");
        });

        $("#district").change(function (e) {
            e.preventDefault();
            var district_id = $(this).val();

            $.ajax({
                type: "POST",
                url: "/admin/ajax/address/wards",
                data: { district_id: district_id },
                dataType: "JSON",
            }).done(function (data) {
                //   alert(data.districts);
                updateSelectBox(data.wards, "#ward");
            });
        });

        $("#ward").change(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "/admin/ajax/transport",
                data: { province_id: province_id },
                dataType: "JSON",
            }).done(function (data) {
                var item = data.transport;

                $("input[name=shipping_fee]").val(Number(item[0].price));
            });
        });
    });

    $("#date-format1").bootstrapMaterialDatePicker({
        format: "DD-MM-YYYY HH:mm:ss",
    });
    $("#date-format2").bootstrapMaterialDatePicker({
        format: "DD-MM-YYYY HH:mm:ss",
    });

    $(".icon-soluongtru").click(function (e) {
        e.preventDefault();
        var quantityTag = $(this).next();
        var qty = $(quantityTag).val();

        if (Number(qty) == 0) {
            return;
        }

        $(quantityTag).val(Number(qty) - 1);
    });

    $(".icon-soluongcong").click(function (e) {
        e.preventDefault();
        var quantityTag = $(this).prev();
        var qty = $(quantityTag).val();

        $(quantityTag).val(Number(qty) + 1);
    });

    var colIndex = 0,
        widths = [];
    $("#example thead th").each(function () {
        widths.push(parseInt(this.style.width) + 16);
    });

    $(".right-scroll").on("click", function () {
        if (colIndex == widths.length - 1) return;
        document.querySelector(".table-responsive").scrollLeft +=
            widths[colIndex];

        document.querySelector(
            ".left-scroll"
        ).style.left += `3% + ${widths[colIndex]}px`;
        document.querySelector(
            ".right-scroll"
        ).style.left += `98% + ${widths[colIndex]}px`;
        colIndex++;
    });
    $(".left-scroll").on("click", function () {
        if (colIndex == 0) return;
        colIndex--;
        var scrollLeft = 0;
        for (var i = 0; i < colIndex; i++) {
            scrollLeft += widths[i];
        }
        document.querySelector(".table-responsive").scrollLeft = scrollLeft;
    });

    var i = 0,
        timeOut = 0;
    $(".left-scroll")
        .on("mousedown touchstart", function (e) {
            timeOut = setInterval(function () {
                if (colIndex == 0) return;
                colIndex--;
                var scrollLeft = 0;
                for (var i = 0; i < colIndex; i++) {
                    scrollLeft += widths[i];
                }
                document.querySelector(".table-responsive").scrollLeft =
                    scrollLeft;
            }, 100);
        })
        .bind("mouseup mouseleave touchend", function () {
            $(this).removeClass("active");
            clearInterval(timeOut);
        });

    var rightScrollTop = $(".right-scroll").offset().top;
    var leftScrollTop = $(".left-scroll").offset().top;
    var headerTop = document.querySelector(".header").offsetHeight;
    $(window).scroll(function (event) {
        // console.log("rightScrollTop: ", rightScrollTop);
        // console.log("headerTop: ", headerTop);
        // console.log("window: ", $(window).scrollTop());

        //Nếu top của window lớn hơn của portfolio thì xuất hiện fixed menu
        //ngược lại thì ko xuất hiện fixed menu
        if (
            $(window).scrollTop() + headerTop >= rightScrollTop &&
            $(window).scrollTop() + headerTop >= leftScrollTop &&
            !$(".right-scroll").hasClass("fixed-right-scroll") &&
            !$(".left-scroll").hasClass("fixed-left-scroll")
        ) {
            $(".right-scroll").addClass("fixed-right-scroll");
            $(".left-scroll").addClass("fixed-left-scroll");
        }

        if (
            $(window).scrollTop() + headerTop <= rightScrollTop &&
            $(window).scrollTop() + headerTop <= leftScrollTop &&
            $(".right-scroll").hasClass("fixed-right-scroll") &&
            $(".left-scroll").hasClass("fixed-left-scroll")
        ) {
            $(".right-scroll").removeClass("fixed-right-scroll");
            $(".left-scroll").removeClass("fixed-left-scroll");
        }
    });
});

function formatToCurrency(amount) {
    // return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Cập nhật các option cho thẻ select
function updateSelectBox(data, selector, selected_id = null) {
    var items = data; //decode (giải mã)

    $(selector).find("option").not(":first").remove(); //delete all old option tag
    if (!data) return;
    for (let i = 0; i < items.length; i++) {
        let item = items[i];
        selected = "";
        if (selected_id == item.id) {
            //tag is choosen
            selected = "selected";
        }
        let option =
            "<option " +
            selected +
            ' value="' +
            item.id +
            '"> ' +
            item.name +
            "</option>";
        $(selector).append(option); //add to new tag
    }
}

function updateRowIntoProductList(data) {
    if (!data) {
        $(".tbody-productlist").html(`<tr class="no-data">
        <td>No data</td>
        <td>No data</td>
        <td>No data</td>
        <td>No data</td>
        <td>No data</td>
        <td>No data</td>
    </tr>`);
        return;
    }
    var items = data;

    $(".tbody-productlist .info-order-items").remove();
    $(".tbody-productlist .no-data").remove();

    var rows = "";

    Object.keys(items).forEach((key) => {
        let item = items[key];
        rows += `<tr class="info-order-items">
        <td>${item.id}</td>
        <td>${item.name}</td>
        <td>${formatToCurrency(item.price)}</td>
        <td><div class="number_cart1" > <i class="fa fa-minus-square-o icon-soluongtru" onClick="changeQtyProductInPackage(this,'${
            item.rowId
        }', '${item.qty - 1}')" aria-hidden="true"></i>
        <input type="text" name="qty" onChange="changeQtyProductInPackage(this,'${
            item.rowId
        }', '${0}')" class="number_cart_input" value="${
            item.qty
        }" > <i class="fa fa-plus-square-o icon-soluongcong" onClick="changeQtyProductInPackage(this,'${
            item.rowId
        }', '${item.qty + 1}')" aria-hidden="true"></i>
    </div></td>
        <td>${formatToCurrency(Math.round(item.subtotal))}</td>
        <td><a class="btn btn-danger remove-product" href="javascript:void(0)" onclick="deleteProductInPackage('${
            item.rowId
        }')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>`;
    });

    $(".tbody-productlist").append(rows);
}

//Thêm sản phẩm vào package
function addProductInPackage(product_id) {
    // let product_id = $("input[name=product_id]").val();
    let qty = $(".product_quantity").val();

    if (!product_id) {
        alert("Vui lòng nhập mã sản phẩm");
        return;
    }
    if (!qty) {
        alert("Vui lòng nhập số lượng sản phẩm");
        return;
    }

    $.ajax({
        type: "POST",
        url: "/admin/package/addProductToPackage",
        data: { product_id, qty },
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                updateRowIntoProductList(res.carts);

                $(".search-result").hide();
                $(".search_product_name").val("");
                $(".product_quantity").val("");
            } else {
                alert(res.message);
            }
        },
    });
}

//Xóa package
function deleteProductInPackage(rowId) {
    $.ajax({
        url: "/admin/package/delete",
        type: "DELETE",
        data: { rowId },
    }).done(function (res) {
        if (res.isSuccess) {
            updateRowIntoProductList(res.carts);
        }
    });
}

// Thay đổi số lượng sản phẩm trong package
function changeQtyProductInPackage(tag, rowId, qty) {
    if (qty == 0) {
        qty = $(tag).val();
    }

    $.ajax({
        type: "PUT",
        url: "/admin/package/update",
        data: { rowId, qty: Number(qty) },
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                updateRowIntoProductList(res.carts);
            } else {
                alert(res.message);
            }
        },
    });
}

function checkAll(check_all) {
    $(check_all).change(function () {
        var checkboxes = $(this)
            .closest("table#example")
            .find(":checkbox")
            .not(":disabled");
        checkboxes.prop("checked", $(this).is(":checked"));
    });
}

function deleteItemInBoughtList(tag) {
    $(tag).parent().parent().html("");
}

function updateTotalPriceInOrderItem(order_id, product_id, type = null) {
    var qty = $(`.table tr.${order_id}-${product_id}`)
        .find(".number_cart_input")
        .val();

    var unit_price = $(`.table tr.${order_id}-${product_id}`)
        .find(".unit_price")
        .val();

    var totalPrice = 0;
    if (!type) {
        totalPrice = Number(unit_price) * Number(qty);
    }

    if (type == "decrease") {
        qty = Number(qty) - 1;
        totalPrice = Number(unit_price) * Number(qty);
    } else if (type == "increase") {
        qty = Number(qty) + 1;
        totalPrice = Number(unit_price) * Number(qty);
    }

    $(`.table tr.${order_id}-${product_id}`)
        .find(".total_price")
        .html(formatToCurrency(totalPrice) + " VND");
}
