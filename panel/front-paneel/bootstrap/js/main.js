//پنل مدیریت
$(document).ready(function() {
    $('.admin-menu > ul > li.users').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-users").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});


$(document).ready(function() {
    $('.admin-menu > ul > li.staff').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-staff").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});


$(document).ready(function() {
    $('.admin-menu > ul > li.patients').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-patients").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.accounting').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-accounting").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.records').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-records").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.connections').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-connections").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    },
    navText:Array ('<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'),
    dots:true,
    autoplay:true,
});



