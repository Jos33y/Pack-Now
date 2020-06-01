$('#all').click(function () {
    $('div').show();
});

$('#custombox').click(function () {
    $('div[id^=div]').hide();
    $('#div1').show();
});
$('#satinbag').click(function () {
    $('div[id^=div]').hide();
    $('#div2').show();
});

$('#paperbag').click(function () {
    $('div[id^=div]').hide();
    $('#div3').show();
});

$('#giftbox').click(function () {
    $('div[id^=div]').hide();
    $('#div4').show();

});