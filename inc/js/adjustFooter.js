$(document).ready(function() {
    
    var screenHeight = $(window).height();
    var mainHeight = $("main").height();
    var footerHeight = $('#dropupFooter').height();
    var actualHeight = screenHeight - mainHeight - footerHeight- 263.5;
    console.log(screenHeight);

    $("main").css("min-height", actualHeight.toString() + "px");
});