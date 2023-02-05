function toggleNav() {
    if($('#mySidenav').attr('data-active') == 'false') {
        $('#mySidenav').attr('data-active','true');
        $("#mySidenav").css("width","250px");
        $("#main").css("margin-left","250px");
    } else {
        $('#mySidenav').attr('data-active','false');
        $("#mySidenav").css("width","0");
        $("#main").css("margin-left","0");
    }
}

$('.totop').click(function(e){
    e.preventDefault();

    $('html, body').animate({
        scrollTop: 0
    });
});

$(window).scroll(function(e) {
    if($(window).scrollTop()>=500) {
        $('div.scroll').fadeIn(200);
    } else {
        $('div.scroll').fadeOut(200);
    }
});
