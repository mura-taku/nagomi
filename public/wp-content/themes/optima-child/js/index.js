$(function(){
  $(window).scroll(function(){
    const scrollAmount = $(window).scrollTop();
    const wHeight = $(window).height();
    const wWidth = $(window).width();
      if(wWidth > 1200){
        if(scrollAmount < 150){
          $('.reserve-btn').removeClass('on');
        }else{
          $('.reserve-btn').addClass('on');
        }
      }
  })
})