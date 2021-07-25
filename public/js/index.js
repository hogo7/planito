
    let pageNum = 1;

    $('.nextP').click(function(){

        let page='#page'+pageNum;
        $(`${page}`).fadeOut();
        pageNum++;
        let  pageNext='#page'+pageNum;
        console.log(pageNext);
        $(`${pageNext}`).delay(1000).fadeIn('slow');

    });


$(document).ready(()=>{

  let winWidth= $(window).width();
  console.log(winWidth);
  if(winWidth>=700){
    $('.showS').addClass('d-none');
  }else if ( winWidth<=700 && winWidth>=450) {

  }else if (winWidth<449) {
    $('.showL').addClass('d-none');

  }

  $('#carouselExampleIndicators').carousel({
    interval: 1000,
    pause:false
  })

})
// set image


//reset on change

$(window).on('resize', function(){
  let winWidth= $(window).width();
//  console.log(winWidth);
  if(winWidth>=720){
  //  console.log('big');
    $('.showS').addClass('d-none');
    if($('.showL').hasClass('d-none'))
    $('.showL').removeClass('d-none');
}
  else if (winWidth<720) {
    $('.showL').addClass('d-none');
    if($('.showS').hasClass('d-none'))
        $('.showS').removeClass('d-none');

}
});


/*


$('#heightSpan').html($(window).height());
$('#widthSpan').html($(window).width());

$(window).on('resize', function(){
    $('#heightSpan').html($(window).height());
    $('#widthSpan').html($(window).width());
});

//Native javascript solution
window.onresize = function(){
    if (window.innerHeight > 500)
    {
        console.log('JAVASCRIPT BLOWIN UP YER LOGS, LOGS');
    }

    if (window.innerWidth > 500)
    {
        console.log('JAVASCRIPT BLOWIN UP YER LOGS, LOGS');
    }
}


*/
