//Switch iframe width and button name
$(document).ready(
$('#mobile').click(function(){
    var value = $(this).html();
    if(value=='Switch to Mobile'){
        $(this).html('Back to Desktop'); 
        $('.shell').css('width',"400px");
    }else{
    $(this).html('Switch to Mobile');
    $('.shell').css('width',"100%");
    }
    
})
)
// iframe switcher onclick
$('#email1').click(function(){
    $('#frame').attr('src', 'emails_library/amazon.html');
});
$('#email2').click(function(){
    $('#frame').attr('src', 'emails_library/upromise_olm.html');
});
$('#email3').click(function(){
    $('#frame').attr('src', 'emails_library/upromise.html');
});
$('#email4').click(function(){
    $('#frame').attr('src', 'emails_library/starbucks_dynamic_banner_3.html');
});
// active menu button
$('#menu li a').on('click', function(){
    $('li a.active2').removeClass('active2');
    $(this).addClass('active2');
});