    $('.nextC').click(function(){
        let id=$(this).parent().parent().attr('id');
        id = id.split("_");
        id = id[1];
        console.log(id);
        let page='#card_'+id;
        $(`${page}`).fadeOut();
        id++;
        let pageNext='#card_'+id;
        console.log(pageNext);
        $(`${pageNext}`).delay(1000).fadeIn('slow');
    });

$(document).ready(()=>{

    let winWidth= $(window).width();
    console.log(winWidth);
    if(winWidth>=650){
    }else if ( winWidth<=700 && winWidth>=450) {

    }else if (winWidth<650) {
      $('#taskChart').addClass('d-none');

    }

  // set image


  //reset on change

  $(window).on('resize', function(){
    let winWidth= $(window).width();
   console.log(winWidth);
    if(winWidth>=800){
      console.log('big');
      if($('#taskChart').hasClass('d-none'))
        $('#taskChart').removeClass('d-none');
  }
    else if (winWidth<800) {
      $('#taskChart').addClass('d-none');
  }
})

})
