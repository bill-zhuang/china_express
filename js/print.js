$(document).ready(function(){
    var css_class_prefix = '';
    if (js_data.batch == 0) {
        css_class_prefix = (js_data.express == 1) ? 'yuantong_' : 'yunda_';
    } else {
        css_class_prefix = (js_data.express == 1) ? 'yuantong_batch_' : 'yunda_batch_';
    }
    var div_content = '';
    for (var i = 0, len = js_data.user.length; i < len; i++) {
        div_content = div_content + '<div class="' + css_class_prefix + 'body_size">';
        div_content = div_content + '<div class="' + css_class_prefix + 'sender_name">' + js_data.user[i]['sender_name'] + '</div>';
        div_content = div_content + '<div class="' + css_class_prefix + 'sender_address">' + js_data.user[i]['sender_address'] + '</div>';
        div_content = div_content + '<div class="' + css_class_prefix + 'sender_phone">' + js_data.user[i]['sender_phone'] + '</div>';
        div_content = div_content + '<div class="' + css_class_prefix + 'receiver_name">' + js_data.user[i]['receiver_name'] + '</div>';
        div_content = div_content + '<div class="' + css_class_prefix + 'receiver_address">' + js_data.user[i]['receiver_address'] + '</div>';
        div_content = div_content + '<div class="' + css_class_prefix + 'receiver_phone">' + js_data.user[i]['receiver_phone'] + '</div>';
        div_content = div_content + '</div>';
        }
    $('body').empty().append(div_content);
});