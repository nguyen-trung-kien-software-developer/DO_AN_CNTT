var propertyCodes = $('input[name=property_codes]').val().split(',');
var filterSelectHtml = $('#product_filter_select');
var itemSelectHtml = $('#block-item-select');

$(document).ready(function() {
    load_scroll();
    toogle_scroll();  
    change_layout();
    filter_mobile();
    load_filter_select();
    ajax_paginate_category();
    product_filter_propery_all();
});

function ajax_paginate_category() {
    $('.paginate-ajax-cate-child').find('a').click(function() {
        let url = $(this).attr('href');
        if (url != '') {
            let urlObj = new URL(url);
            let id = urlObj.searchParams.get("id");
            let htmlLoadProdct = $('#load_product_list_' + id);
            let header_h = $('#header1').height();
            let list_product_h = $('#load_product_list_' + id).offset().top;
            $.ajax({
                type: 'GET',
                url: url,
                beforeSend: function() {
                    $('#load_product_list_' + id).find('.ajax_loadding').show();
                },
                success:function(result) {
                    htmlLoadProdct.html(result);
                    $('#load_product_list_' + id).html(result);
                    $('#load_product_list_' + id).find('.ajax_loadding').hide();
                    $('html, body').animate({scrollTop:list_product_h - header_h - 63}, 500);
                    ajax_paginate_category();
                    $('.lazy').lazy();
                }
            });

            return false;
        }
    });
}

let filterType = '';
function load_filter_select() {
    filterSelectHtml.html('');
    let filterExist = false;
    let html = '';
    html += '<label>Lọc theo:</label>';
    let priceSelects = [];
    $('input[name="input_price[]"]:checked').each(function(i){
        let priceObj = {};
        priceObj["id"] = $(this).val();
        priceObj["name"] = $(this).data('name');
        priceSelects[i] = priceObj;
    });
    
    if (priceSelects.length > 0) {
        filterType = 'price';
        const priceLabel = $('#panel_filter_price').data('label');
        $.each(priceSelects, function(index, item) {
            html += generateFilterHtml(priceLabel, filterType, item.name, item.id);
        });
        filterExist = true;
    }

    let brandSelects = [];
    $('input[name="input_brand[]"]:checked').each(function(i){
        let brandObj = {};
        brandObj["id"] = $(this).val();
        brandObj["name"] = $(this).data('name');
        brandSelects[i] = brandObj;
    });
    
    if (brandSelects.length > 0) {
        filterType = 'brand';
        const brandLabel = $('#panel_filter_brand').data('label');
        $.each(brandSelects, function(index, item) {
            html += generateFilterHtml(brandLabel, filterType, item.name, item.id);
        });
        filterExist = true;
    }

    if (html != '') {
        filterSelectHtml.show();
        filterSelectHtml.find('label').css({'display':'inline-block'});
        itemSelectHtml.html(html);
    }

    let shopSelects = [];
    $('input[name="input_shop[]"]:checked').each(function(i){
        let shopObj = {};
        shopObj["id"] = $(this).val();
        shopObj["name"] = $(this).data('name');
        shopSelects[i] = shopObj;
    });
    
    if (shopSelects.length > 0) {
        filterType = 'shop';
        const shopLabel = $('#panel_filter_shop').data('label');
        $.each(shopSelects, function(index, item) {
            html += generateFilterHtml(shopLabel, filterType, item.name, item.id);
        });
        filterExist = true;
    }

    let productGroupSelects = [];
    $('input[name="input_product_group[]"]:checked').each(function(i){
        let productGroupObj = {};
        productGroupObj["id"] = $(this).val();
        productGroupObj["name"] = $(this).data('name');
        productGroupSelects[i] = productGroupObj;
    });
    
    if (productGroupSelects.length > 0) {
        filterType = 'product_group';
        const productGroupLabel = $('#panel_filter_product_group').data('label');
        $.each(productGroupSelects, function(index, item) {
            html += generateFilterHtml(productGroupLabel, filterType, item.name, item.id);
        });
        filterExist = true;
    }

    // property filter html
    $.each(propertyCodes, function(index, propertyCode) {
        let propertySelects = [];
        let inputName = 'input_' + propertyCode + '[]';
        $('input[name="'+ inputName +'"]:checked').each(function(i){
            let propertyObj = {};
            propertyObj["id"] = $(this).val();
            propertyObj["name"] = $(this).data('name');
            propertySelects[i] = propertyObj;
        });
        
        if (propertySelects.length > 0) {
            filterType = propertyCode;
            const propertyLabel = $('#panel_filter_' + propertyCode).data('label');
            $.each(propertySelects, function(index, item) {
                html += generateFilterHtml(propertyLabel, filterType, item.name, item.id);
            });
            filterExist = true;
        }
    });

    if (filterExist == true) {
        html += htmlRemoveFilterAll();
        filterSelectHtml.append(html);
    } else {
        filterSelectHtml.hide();
    }
}

function htmlRemoveFilterAll() {
    return `<div class="item_select">
                    <label>Xóa tất cả</label>
                    <div class="item_select_close"><i class="fa fa-times" aria-hidden="true" onclick="remove_fiter_all()"></i></div>
                </div>`;
}

function generateFilterHtml(priceLabel, filterType, name, id) {
    return html = `<div class="item_select">
                    <label>`+ priceLabel +`:</label>
                    <span>`+ name +`</span>
                    <div class="item_select_close">
                        <i class="fa fa-times" aria-hidden="true" onclick="remove_fiter_select('`+ filterType +`', `+ id +`)"></i>
                    </div>
                </div>`;
}

function load_scroll(){
    $("a[rel='load-content']").click(function(e){
        e.preventDefault();
        var url=$(this).attr("href");
        $.get(url,function(data){
            $(".list_th_scroll_1 .mCSB_container").append(data); //load new content inside .mCSB_container
            //scroll-to appended content 
            $(".list_th_scroll_1").mCustomScrollbar("scrollTo","h2:last");
        });
    });
    
    $(".list_th_scroll_1").delegate("a[href='top']","click",function(e){
        e.preventDefault();
        $(".list_th_scroll_1").mCustomScrollbar("scrollTo",$(this).attr("href"));
    });
}

function toogle_scroll(){
    $('.click_show_left').click(function(){
        let id = $(this).data('id');
        $('#' + id).toggle();

        if($(this).children('i').hasClass('a_arrow_123')){
            $(this).children('i').removeClass('a_arrow_123'); 
        }else{
            $(this).children('i').addClass('a_arrow_123');
        }
    })
}

function product_filter_propery_all() {
    $('.input-property-all').change(function() {
        let propertyName = $(this).data('type');
        let inputNameArr = $('input[name="input_'+ propertyName +'[]"]');
        if (this.checked) {
            $(inputNameArr).prop('checked', true);
        } else {
            $(inputNameArr).prop('checked', false);
        }
        
        product_filter();
    });
}

function product_filter(flag = false){

    if(flag == false){
        $('input[name=page]').val(1);
    }

    var ajax_loadding = $('.ajax_loadding');
    
    var mod = $('input[name=mod]').val();
    var mod_id = $('input[name=mod_id]').val();;
    var page = $('input[name=page]').val();
    var cate_id_search = '';
    if ($('input[name=cate_id_search]').length > 0) {
        cate_id_search = $('input[name=cate_id_search]').val();
    }
    
    var q = '';
    if ($('input[name=keyword]').length > 0) {
        q = $('input[name=keyword]').val();
    }

    var route = $('input[name=route]').val();
    var layout = $('input[name=layout]').val();
    var sort = $('select[name=sort]').val();

    var header_h = $('#header1').outerHeight();
    var list_product_h = $('#box-product-info').position().top;
    
    //get price value
    var input_price = [];
    var price_select = [];
    $ ('input[name="input_price[]"]:checked').each(function(i){
        input_price[i] = $(this).val();

        var priceObj = {};
        priceObj["id"] = $(this).val();
        priceObj["name"] = $(this).data('name');
        price_select[i] = JSON.stringify(priceObj);
    });
    var url_push = '';
    if (cate_id_search != '') {
        url_push += '&cate=' + cate_id_search;
    }

    if (q != '') {
        url_push += '&q=' + q;
    }

    if (input_price.length > 0) {
        url_push += '&price=' + input_price.join();
    }

    //get brand value
    var input_brand = [];
    var brand_select = [];
    $ ('input[name="input_brand[]"]:checked').each(function(i){
        input_brand[i] = $(this).val();

        var brandObj = {};
        brandObj["id"] = $(this).val();
        brandObj["name"] = $(this).data('name');
        brand_select[i] = JSON.stringify(brandObj);
    });
    if (input_brand.length > 0) {
        url_push += '&brand=' + input_brand.join();
    }

    //get shop value
    var input_shop = [];
    var shop_select = [];
    $('input[name="input_shop[]"]:checked').each(function(i){
        input_shop[i] = $(this).val();

        var shopObj = {};
        shopObj["id"] = $(this).val();
        shopObj["name"] = $(this).data('name');
        shop_select[i] = JSON.stringify(shopObj);
    });
    if (input_shop.length > 0) {
        url_push += '&shop=' + input_shop.join();
    }

    //get product_group value
    var input_product_group = [];
    var product_group_select = [];
    $('input[name="input_product_group[]"]:checked').each(function(i){
        input_product_group[i] = $(this).val();

        var productGroupObj = {};
        productGroupObj["id"] = $(this).val();
        productGroupObj["name"] = $(this).data('name');
        product_group_select[i] = JSON.stringify(productGroupObj);
    });
    if (input_product_group.length > 0) {
        url_push += '&product_group=' + input_product_group.join();
    }

    // property
    $.each(propertyCodes, function(index, propertyCode) {
        let inputPropertyGroups = [];
        let propertySelects = [];
        let inputName = 'input_' + propertyCode + '[]';
        $('input[name="'+ inputName +'"]:checked').each(function(i){
            inputPropertyGroups[i] = $(this).val();
            let propertyObj = {};
            propertyObj["id"] = $(this).val();
            propertyObj["name"] = $(this).data('name');
            propertySelects[i] = JSON.stringify(propertyObj);
        });

        if (inputPropertyGroups.length > 0) {
            url_push += '&property[' + propertyCode + ']=' + inputPropertyGroups.join();
        }
    });

    if (sort != '') {
        var sortObj = sort.split('-');
        if (sortObj.length > 0) {
            url_push += '&sort['+ sortObj[0] +']=' + sortObj[1];
        }
    }

    if (layout == 'list') {
        url_push += '&layout=' + layout;
    }

    if (page > 1) {
        url_push += '&page=' + page;
    }

    var url_redirect = route;
    if(url_push != ''){
        url_redirect = route + '?' + url_push.slice(1);
    }

    var urlFilter = $('input[name=url_filter]').val();
    if(url_push != ''){
        urlFilter = urlFilter + '?' + url_push.slice(1);
    }

    var urlStatistic = $('input[name=url_statistic]').val();
    if(url_push != ''){
        urlStatistic = urlStatistic + '?' + url_push.slice(1);
    }

    $.ajax({
        type: 'GET',
        url: urlFilter,
        beforeSend: function(){
            ajax_loadding.show();
        },
        success:function(res){
            $('#load_product_list').html(res);
            $.ajax({
                type: 'GET',
                url: urlStatistic,
                success:function(result){
                    $('#product_filter_element').html(result);
                    toogle_scroll();
                    $(".list_th_scroll_1").mCustomScrollbar();
                    product_filter_propery_all();
                }
            });
            $('html, body').animate({scrollTop:list_product_h - header_h - filterSelectHtml.outerHeight()}, 500);
            ajax_loadding.hide();
            ajax_paginate_category();
            load_filter_select();
            $('.lazy').lazy();
            window.history.pushState({path:url_redirect}, '', url_redirect);
        }, 
        error: function(jqXHR, exception) {
            console.log(jqXHR.status);
            console.log(exception);
        }
    });
}

function remove_fiter_select(type , id){
    switch (type)
    {
        case 'price' : {
            $('#input_price_' + id).prop('checked', false);
            $("#panelPrice").find('.fa-check-square').each(function( index ) {
                var label = $(this).parent('a').data('label');
                var value = $(this).parent('a').data('value');
                var tagId = $(this).parent('a').data('id');
                if(value == id){
                    $(this).removeClass('fa-check-square');
                    $(this).addClass('fa-square-o');
                    
                    label_select.price.splice(label_select.price.indexOf(label), 1);
                    value_select.price.splice(label_select.price.indexOf(value), 1);

                    label_select_item(type, tagId);
                }
                
            });
            break;
        }

        case 'brand' : {
            $('#input_brand_' + id).prop('checked', false);
            $("#panelBrand").find('.fa-check-square').each(function( index ) {
                var label = $(this).parent('a').data('label');
                var value = $(this).parent('a').data('value');
                var tagId = $(this).parent('a').data('id');
                if(value == id){
                    $(this).removeClass('fa-check-square');
                    $(this).addClass('fa-square-o');
                    
                    label_select.price.splice(label_select.price.indexOf(label), 1);
                    value_select.price.splice(label_select.price.indexOf(value), 1);

                    label_select_item(type, tagId);
                } 
            });
            break;
        }

        case 'shop' : {
            $('#input_shop_' + id).prop('checked', false);
            $("#panelShop").find('.fa-check-square').each(function( index ) {
                var label = $(this).parent('a').data('label');
                var value = $(this).parent('a').data('value');
                var tagId = $(this).parent('a').data('id');
                if(value == id){
                    $(this).removeClass('fa-check-square');
                    $(this).addClass('fa-square-o');
                    
                    label_select.price.splice(label_select.price.indexOf(label), 1);
                    value_select.price.splice(label_select.price.indexOf(value), 1);

                    label_select_item(type, tagId);
                } 
            });
            break;
        }

        case 'product_group' : {
            $('#input_product_group_' + id).prop('checked', false);
            $("#panelProductGroup").find('.fa-check-square').each(function( index ) {
                var label = $(this).parent('a').data('label');
                var value = $(this).parent('a').data('value');
                var tagId = $(this).parent('a').data('id');
                if(value == id){
                    $(this).removeClass('fa-check-square');
                    $(this).addClass('fa-square-o');
                    
                    label_select.price.splice(label_select.price.indexOf(label), 1);
                    value_select.price.splice(label_select.price.indexOf(value), 1);

                    label_select_item(type, tagId);
                } 
            });
            break;
        }
    }

    // property
    $.each(propertyCodes, function(index, propertyCode) {
        $('#input_'+ propertyCode +'_' + id).prop('checked', false);
        $("#panel_filter_" + propertyCode).find('.fa-check-square').each(function( index ) {
            var label = $(this).parent('a').data('label');
            var value = $(this).parent('a').data('value');
            var tagId = $(this).parent('a').data('id');
            if(value == id){
                $(this).removeClass('fa-check-square');
                $(this).addClass('fa-square-o');
                
                label_select.price.splice(label_select.price.indexOf(label), 1);
                value_select.price.splice(label_select.price.indexOf(value), 1);

                label_select_item(type, tagId);
            } 
        });
    });

    product_filter();
}

function remove_fiter_all(){
    $('#product_filter_element input[type=checkbox]').prop('checked', false);
    $( "#filter-menu" ).find('.fa-check-square').each(function( index ) {
        $(this).removeClass('fa-check-square');
        $(this).addClass('fa-square-o');
    });
    $('#filter-menu').find('.filter_select ').removeClass('hasMgTop').html('');
    label_select = [];
    label_select.price = [];
    label_select.action = [];
    label_select.brand = [];
    label_select.shop = [];
    label_select.product_group = [];
    value_select = [];
    value_select.price = [];
    value_select.action = [];
    value_select.brand = [];
    value_select.shop = [];
    value_select.product_group = [];

    product_filter();
}

function change_layout(){
    $('.long_arrangementt').click(function() {
        $('.box_product_v2').addClass('box_product_v2_list');
        $('.square_arrangementt').removeClass('active_arrangementt');
        $('.long_arrangementt').addClass('active_arrangementt');
        $('input[name=layout]').val('list');
        product_filter();
    });
    $('.square_arrangementt').click(function() {
        $('.box_product_v2').removeClass('box_product_v2_list');
        $('.long_arrangementt').removeClass('active_arrangementt');
        $('.square_arrangementt').addClass('active_arrangementt');
        $('input[name=layout]').val('grid');
        product_filter();
    })
}

var label_select = [];
label_select.price = [];
label_select.action = [];
label_select.brand = [];
label_select.shop = [];
label_select.product_group = [];
$.each(propertyCodes, function(index, propertyCode) {
    label_select[propertyCode] = [];
});


var value_select = [];
value_select.price = [];
value_select.action = [];
value_select.brand = [];
value_select.shop = [];
value_select.product_group = [];
$.each(propertyCodes, function(index, propertyCode) {
    value_select[propertyCode] = [];
});

function filter_mobile(){
    $('.filter_mobile a').click(function(){
        $('html, body').scrollTop(0);
        $('html').addClass('state-filter');
    });

    $('#filter-menu .context-back').click(function(e){
        e.preventDefault();
        $('html').removeClass('state-filter');
    });

    $('#filter-menu #filter-clear').click(function(e){
        e.preventDefault();
        $('html').removeClass('state-filter');
    });

    $('.group_toogle').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        if($(''+href+'').hasClass('in')){
            $(this).attr('aria-expanded', false);
            $(''+href+'').removeClass('in');
            $(''+href+'').slideUp(1000);
        }else{
            $(this).attr('aria-expanded', true);
            $(''+href+'').addClass('in');
            $(''+href+'').slideDown(1000);
        }
    });

    $( "#panelPrice" ).find('.fa-check-square').each(function( index ) {
        var label_current = $(this).parent('a').data('label');
        var value_current = $(this).parent('a').data('value');
        var tagId = $(this).parent('a').data('id');
        label_select.price.push(label_current); 
        value_select.price.push(value_current);
        label_select_item('price', tagId);
    });

    $( "#panelBrand" ).find('.fa-check-square').each(function( index ) {
        var label_current = $(this).parent('a').data('label');
        var value_current = $(this).parent('a').data('value');
        var tagId = $(this).parent('a').data('id');
        label_select.brand.push(label_current); 
        value_select.brand.push(value_current);
        label_select_item('brand', tagId);
    });

    $( "#panelShop" ).find('.fa-check-square').each(function( index ) {
        var label_current = $(this).parent('a').data('label');
        var value_current = $(this).parent('a').data('value');
        var tagId = $(this).parent('a').data('id');
        label_select.shop.push(label_current); 
        value_select.shop.push(value_current);
        label_select_item('shop', tagId);
    });

    $( "#panelProductGroup" ).find('.fa-check-square').each(function( index ) {
        var label_current = $(this).parent('a').data('label');
        var value_current = $(this).parent('a').data('value');
        var tagId = $(this).parent('a').data('id');
        label_select.product_group.push(label_current); 
        value_select.product_group.push(value_current);
        label_select_item('product_group', tagId);
    });

    $.each(propertyCodes, function(index, propertyCode) {
        $("#panel_" + propertyCode).find('.fa-check-square').each(function( index ) {
            let label_current = $(this).parent('a').data('label');
            let value_current = $(this).parent('a').data('value');
            let tagId = $(this).parent('a').data('id');
            label_select[propertyCode].push(label_current); 
            value_select[propertyCode].push(value_current);
            label_select_item(propertyCode, tagId);
        });
    });
    
    $('.select_filter_condition').click(function(e){
        e.preventDefault();

        var value = $(this).data('value');
        var label = $(this).data('label');
        var id = $(this).data('id'); 
        var group = $(this).data('group');

        if($(this).find('i').hasClass('fa-check-square')){
            $(this).find('i').removeClass('fa-check-square');
            $(this).find('i').addClass('fa-square-o');
            switch (group) {
                case 'price':
                    label_select.price.splice(label_select.price.indexOf(label), 1);
                    value_select.price.splice(label_select.price.indexOf(value), 1);
                    break;
                case 'brand':
                    label_select.brand.splice(label_select.brand.indexOf(label), 1);
                    value_select.brand.splice(label_select.brand.indexOf(value), 1);
                    break;
                case 'shop':
                    label_select.shop.splice(label_select.shop.indexOf(label), 1);
                    value_select.shop.splice(label_select.shop.indexOf(value), 1);
                    break;
                case 'product_group':
                    label_select.product_group.splice(label_select.product_group.indexOf(label), 1);
                    value_select.product_group.splice(label_select.product_group.indexOf(value), 1);
                    break;
            }

            $.each(propertyCodes, function(index, propertyCode) {
                if (group == propertyCode) {
                    label_select[propertyCode].splice(label_select[propertyCode].indexOf(label), 1);
                    value_select[propertyCode].splice(label_select[propertyCode].indexOf(value), 1);
                }
            });
        } else {
            $(this).find('i').removeClass('fa-check-o');
            $(this).find('i').addClass('fa-check-square');
            switch (group) {
                case 'price':
                    label_select.price.push(label); 
                    value_select.price.push(value);
                    break;
                case 'brand':
                    label_select.brand.push(label); 
                    value_select.brand.push(value);
                    break;
                case 'shop':
                    label_select.shop.push(label); 
                    value_select.shop.push(value);
                    break;
                case 'product_group':
                    label_select.product_group.push(label); 
                    value_select.product_group.push(value);
                    break;
            }

            $.each(propertyCodes, function(index, propertyCode) {
                if (group == propertyCode) {
                    label_select[propertyCode].push(label); 
                    value_select[propertyCode].push(value);
                }
            });
        }

        label_select_item(group, id);
    });


 $('#filter-apply').click(function(e){
        e.preventDefault();
        var url_push = '';
        if(value_select.price.length > 0){
            value_select.price.sort(function(a, b){return a-b});
            url_push += '&price=' + value_select.price.toString();
        } 

        if(value_select.action.length > 0){
            value_select.action.sort(function(a, b){return a-b});
            url_push += '&function=' + value_select.action.toString();
        } 

        if(value_select.brand.length > 0) {
            value_select.brand.sort(function(a, b){return a-b});
            url_push += '&brand=' + value_select.brand.toString();
        }

        if(value_select.shop.length > 0) {
            value_select.shop.sort(function(a, b){return a-b});
            url_push += '&shop=' + value_select.shop.toString();
        }

        if(value_select.product_group.length > 0) {
            value_select.product_group.sort(function(a, b){return a-b});
            url_push += '&product_group=' + value_select.product_group.toString();
        }

        $.each(propertyCodes, function(index, propertyCode) {
            if(value_select[propertyCode].length > 0) {
                value_select[propertyCode].sort(function(a, b){return a-b});
                url_push += '&property['+ propertyCode +']=' + value_select[propertyCode].toString();
            }
        });

        var route = $('input[name=route]').val();
        var url_redirect = route;
        if(url_push != ''){
            var url_redirect = route + '?' + url_push.slice(1);
        }
        if(url_push != '') window.location.href = url_redirect;
    });
}

function label_select_item(group, id) {
    var label_select_price_txt = '';
    var label_select_action_txt = '';
    var label_select_brand_txt = '';
    var label_select_shop_txt = '';
    var label_select_product_group_txt = '';
    var label_select_property_txt = [];
    var label_select_group = [];
    $.each(propertyCodes, function(index, propertyCode) {
        label_select_property_txt[propertyCode] = [];
    });
    var x;

    switch (group) {
        case 'price':
            label_select_group = label_select.price; 
            break;
        case 'brand':
            label_select_group = label_select.brand; 
            break;
        case 'shop':
            label_select_group = label_select.shop; 
            break;
        case 'product_group':
            label_select_group = label_select.product_group; 
            break;
    }

    $.each(propertyCodes, function(index, propertyCode) {
        if (group == propertyCode) {
            label_select_group = label_select[propertyCode]; 
        }
    });

    for (x in label_select_group) {
        switch (group) {
            case 'price':
                if(x > 0) label_select_price_txt += ', ' + label_select_group[x];else label_select_price_txt += label_select_group[x];
                break;
            case 'brand':
                if(x > 0) label_select_brand_txt += ', ' + label_select_group[x];else label_select_brand_txt += label_select_group[x];
                break;
            case 'shop':
                if(x > 0) label_select_shop_txt += ', ' + label_select_group[x];else label_select_shop_txt += label_select_group[x];
                break;
            case 'product_group':
                if(x > 0) label_select_product_group_txt += ', ' + label_select_group[x];else label_select_product_group_txt += label_select_group[x];
                break;
        }

        $.each(propertyCodes, function(index, propertyCode) {
            if (group == propertyCode) {
                if(x > 0) {
                    label_select_property_txt[propertyCode] += ', ' + label_select_group[x];
                } else {
                    label_select_property_txt[propertyCode] += label_select_group[x];
                }
            }
        });
    }
   
    switch (group) {
        case 'price':
            $(''+id+'').addClass('hasMgTop').html(label_select_price_txt);
            if(label_select_price_txt == '') $(''+id+'').removeClass('hasMgTop'); 
            break;
        case 'brand':
            $(''+id+'').addClass('hasMgTop').html(label_select_brand_txt);
            if(label_select_brand_txt == '') $(''+id+'').removeClass('hasMgTop');
            break;
        case 'shop':
            $(''+id+'').addClass('hasMgTop').html(label_select_shop_txt);
            if(label_select_shop_txt == '') $(''+id+'').removeClass('hasMgTop');
            break;
        case 'product_group':
            $(''+id+'').addClass('hasMgTop').html(label_select_product_group_txt);
            if(label_select_product_group_txt == '') $(''+id+'').removeClass('hasMgTop');
            break;
    }

    $.each(propertyCodes, function(index, propertyCode) {
        if (group == propertyCode) {
            $(''+id+'').addClass('hasMgTop').html(label_select_property_txt[propertyCode]);
            if(label_select_property_txt[propertyCode] == '') {
                $(''+id+'').removeClass('hasMgTop');
            }
        }
    });
}
