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

$('.slider').slick({
  arrows:false,
  fade: true,
  asNavFor:'.thumb',
  speed: 1000,
});
$('.thumb').slick({
  asNavFor:'.slider',
  arrows:true,
  focusOnSelect: true,
  slidesToScroll:1,
  slidesToShow:8,
  responsive:[
    {
        breakpoint: 1200,
        settings:{
            slidesToShow:5,
        }
    },
    {
        breakpoint: 768,
        settings:{
            slidesToShow:3,
        }
    },
]
});