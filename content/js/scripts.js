$(document).ready(function(){
    
});

var navMenuStatus = 0;

$('.navCollapseButton').on('click',function(){
    var menuButton = $('.navCollapseButton');
    var menuContainer = $('body > header > div > div.navMenu > div.menu-topmenu-container');
    var menuDisplay = menuContainer.css('display');
    menuContainer.addClass('ready');
    if(menuButton.attr("expanded")=="false"){
        console.log('expand');
        menuContainer.addClass('open');
        $(this).addClass('open');
        menuButton.attr("expanded","true");
    }
    else{
        console.log('close');
        menuContainer.removeClass('open');
        $(this).removeClass('open');
        menuButton.attr("expanded","false");
    }
})


$(window).resize(function(){
    if($(window).width()>1000){
        var menuContainer = $('body > header > div > div.navMenu > div.menu-topmenu-container');
        menuContainer.removeClass('ready');
        menuContainer.removeClass('open');
    }
})

$(window).on('scroll',function(){
    
    /*
    var scrollPosition = $(document).scrollTop();
    if(scrollPosition>50){
        $('body > header').addClass('filled');
    }
    else{
        $('body > header').removeClass('filled');
    }
    */

});