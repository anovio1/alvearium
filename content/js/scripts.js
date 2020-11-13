$(document).ready(function(){
    $('body > div > div.main-content-content-container > .main-content-content-left > div>  div > div.alvear-dnd-button-container > a:nth-child(1) > button:nth-child(1)').on('click',function(){
        console.log($(this).closest('div.alvear-dnd-card-container').children('.alvear-dnd-card-content').children('.alvear-dnd-card-content-extended').css('height'));
        $(this).closest('div.alvear-dnd-card-container').children('.alvear-dnd-card-content').children('.alvear-dnd-card-content-extended').css('max-height','750px');
    })

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