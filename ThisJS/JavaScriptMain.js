$(window).scroll(function(){
   var scrollval = $(this).scrollTop();
    
    $("#logo").css("transform",'translate(0px,-'+scrollval/2+'%)');
    $("#sub2").css("transform",'translate(-50%,'+scrollval/3+'%)');
});