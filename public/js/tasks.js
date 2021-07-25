//$(document).ready(function(){


//});







 let num=1;
 let page=1;
 $('.next').click(function(){

    let nextNum=num+1;
    let oddVals=['i','s','e'];
    let evenVals=['i','s','e'];
    console.log(`num ${num}&& nextnum ${nextNum}`)
    oddVals.i =$('#l'+num+'i').val();
    oddVals.s =$('#l'+num+'s').val();
    oddVals.e =$('#l'+num+'e').val();
    evenVals.i=$('#l'+nextNum+'i').val();
    evenVals.s=$('#l'+nextNum+'s').val();
    evenVals.e=$('#l'+nextNum+'e').val();

    console.log(`vals ${oddVals.i }.....${oddVals.s }......${oddVals.e } && even ${evenVals.i}.....${evenVals.s}----${evenVals.e}`)
if(oddVals.i==-1|| oddVals.s ==-1||oddVals.e ==-1|| evenVals.i==-1|| evenVals.s==-1|| evenVals.e==-1){

    $('#t'+page+'>.errbox>.error').text('لطفا خالی نگذارید :)');
    $('#t'+page+'>.errbox').fadeIn('slow');
    $('#t'+page+'>.errbox').fadeOut('slow');
}else{
    $('#t'+page).fadeOut('fast');
    num++;num++;
    page++;
    $('#t'+page).delay(500).fadeIn();
}
});


















      $('#l1i').on('input',function(){
        if($(this).val()>-1){
        $('#div-l1>.vali').text(' ');
        $('#div-l1>.vali').text($(this).val());
      }else {$('#div-l1>.vali').text(' ');}
    });
        $('#l1s').on('input',function(){
          if($(this).val()>-1){
        $('#div-l1>.vals').text(' ');
        $('#div-l1>.vals').text($(this).val());
      }else {$('#div-l1>.vals').text(' ');}});
        $('#l1e').on('input',function(){
        if($(this).val()>-1){
        $('#div-l1>.vale').text(' ');
        $('#div-l1>.vale').text($(this).val());
      }else {$('#div-l1>.vale').text(' ');}});




        $('#l2i').on('input',function(){
        if($(this).val()>-1){
        $('#div-l2>.vali').text(' ');
        $('#div-l2>.vali').text($(this).val());
      }else {$('#div-l2>.vali').text(' ');}});
        $('#l2s').on('input',function(){
        if($(this).val()>-1){
        $('#div-l2>.vals').text(' ');
        $('#div-l2>.vals').text($(this).val());
      }else {$('#div-l2>.vals').text(' ');}});
        $('#l2e').on('input',function(){
        if($(this).val()>-1){
        $('#div-l2>.vale').text(' ');
        $('#div-l2>.vale').text($(this).val());
      }else {$('#div-l2>.vale').text(' ');}});



        $('#l3i').on('input',function(){
        $('#div-l3>.vali').text(' ');
        $('#div-l3>.vali').text($(this).val());
        });
        $('#l3s').on('input',function(){
        $('#div-l3>.vals').text(' ');
        $('#div-l3>.vals').text($(this).val());
        });
        $('#l3e').on('input',function(){
        $('#div-l3>.vale').text(' ');
        $('#div-l3>.vale').text($(this).val());
        });


        $('#l4i').on('input',function(){
        $('#div-l4>.vali').text(' ');
        $('#div-l4>.vali').text($(this).val());
        });
        $('#l4s').on('input',function(){
        $('#div-l4>.vals').text(' ');
        $('#div-l4>.vals').text($(this).val());
        });
        $('#l4e').on('input',function(){
        $('#div-l4>.vale').text(' ');
        $('#div-l4>.vale').text($(this).val());
        });


        $('#l5i').on('input',function(){
        $('#div-l5>.vali').text(' ');
        $('#div-l5>.vali').text($(this).val());
        });
        $('#l5s').on('input',function(){
        $('#div-l5>.vals').text(' ');
        $('#div-l5>.vals').text($(this).val());
        });
        $('#l5e').on('input',function(){
        $('#div-l5>.vale').text(' ');
        $('#div-l5>.vale').text($(this).val());
        });


        $('#l6i').on('input',function(){
        $('#div-l6>.vali').text(' ');
        $('#div-l6>.vali').text($(this).val());
        });
        $('#l6s').on('input',function(){
        $('#div-l6>.vals').text(' ');
        $('#div-l6>.vals').text($(this).val());
        });
        $('#l6e').on('input',function(){
        $('#div-l6>.vale').text(' ');
        $('#div-l6>.vale').text($(this).val());
        });


        $('#l7i').on('input',function(){
        $('#div-l7>.vali').text(' ');
        $('#div-l7>.vali').text($(this).val());
        });
        $('#l7s').on('input',function(){
        $('#div-l7>.vals').text(' ');
        $('#div-l7>.vals').text($(this).val());
        });
        $('#l7e').on('input',function(){
        $('#div-l7>.vale').text(' ');
        $('#div-l7>.vale').text($(this).val());
        });


        $('#l8i').on('input',function(){
        $('#div-l8>.vali').text(' ');
        $('#div-l8>.vali').text($(this).val());
        });
        $('#l8s').on('input',function(){
        $('#div-l8>.vals').text(' ');
        $('#div-l8>.vals').text($(this).val());
        });
        $('#l8e').on('input',function(){
        $('#div-l8>.vale').text(' ');
        $('#div-l8>.vale').text($(this).val());
        });


        $('#l9i').on('input',function(){
        $('#div-l9>.vali').text(' ');
        $('#div-l9>.vali').text($(this).val());
        });
        $('#l9s').on('input',function(){
        $('#div-l9>.vals').text(' ');
        $('#div-l9>.vals').text($(this).val());
        });
        $('#l9e').on('input',function(){
        $('#div-l9>.vale').text(' ');
        $('#div-l9>.vale').text($(this).val());
        });



        $('#l10i').on('input',function(){
        $('#div-l10>.vali').text(' ');
        $('#div-l10>.vali').text($(this).val());
        });
        $('#l10s').on('input',function(){
        $('#div-l10>.vals').text(' ');
        $('#div-l10>.vals').text($(this).val());
        });
        $('#l10e').on('input',function(){
        $('#div-l10>.vale').text(' ');
        $('#div-l10>.vale').text($(this).val());
        });



        $('#l11i').on('input',function(){
        $('#div-l11>.vali').text(' ');
        $('#div-l11>.vali').text($(this).val());
        });
        $('#l11s').on('input',function(){
        $('#div-l11>.vals').text(' ');
        $('#div-l11>.vals').text($(this).val());
        });
        $('#l11e').on('input',function(){
        $('#div-l11>.vale').text(' ');
        $('#div-l11>.vale').text($(this).val());
        });




        $('#l12i').on('input',function(){
        $('#div-l12>.vali').text(' ');
        $('#div-l12>.vali').text($(this).val());
        });
        $('#l12s').on('input',function(){
        $('#div-l12>.vals').text(' ');
        $('#div-l12>.vals').text($(this).val());
        });
        $('#l12e').on('input',function(){
        $('#div-l12>.vale').text(' ');
        $('#div-l12>.vale').text($(this).val());
        });



        $('#l13i').on('input',function(){
        $('#div-l13>.vali').text(' ');
        $('#div-l13>.vali').text($(this).val());
        });
        $('#l13s').on('input',function(){
        $('#div-l13>.vals').text(' ');
        $('#div-l13>.vals').text($(this).val());
        });
        $('#l13e').on('input',function(){
        $('#div-l13>.vale').text(' ');
        $('#div-l13>.vale').text($(this).val());
        });


        $('#l14i').on('input',function(){
        $('#div-l14>.vali').text(' ');
        $('#div-l14>.vali').text($(this).val());
        });
        $('#l14s').on('input',function(){
        $('#div-l14>.vals').text(' ');
        $('#div-l14>.vals').text($(this).val());
        });
        $('#l14e').on('input',function(){
        $('#div-l14>.vale').text(' ');
        $('#div-l14>.vale').text($(this).val());
        });


        $('#l15i').on('input',function(){
        $('#div-l15>.vali').text(' ');
        $('#div-l15>.vali').text($(this).val());
        });
        $('#l15s').on('input',function(){
        $('#div-l15>.vals').text(' ');
        $('#div-l15>.vals').text($(this).val());
        });
        $('#l15e').on('input',function(){
        $('#div-l15>.vale').text(' ');
        $('#div-l15>.vale').text($(this).val());
        });


        $('#l16i').on('input',function(){
        $('#div-l16>.vali').text(' ');
        $('#div-l16>.vali').text($(this).val());
        });
        $('#l16s').on('input',function(){
        $('#div-l16>.vals').text(' ');
        $('#div-l16>.vals').text($(this).val());
        });
        $('#l16e').on('input',function(){
        $('#div-l16>.vale').text(' ');
        $('#div-l16>.vale').text($(this).val());
        });


        $('#l17i').on('input',function(){
        $('#div-l17>.vali').text(' ');
        $('#div-l17>.vali').text($(this).val());
        });
        $('#l17s').on('input',function(){
        $('#div-l17>.vals').text(' ');
        $('#div-l17>.vals').text($(this).val());
        });
        $('#l17e').on('input',function(){
        $('#div-l17>.vale').text(' ');
        $('#div-l17>.vale').text($(this).val());
        });


        $('#l18i').on('input',function(){
        $('#div-l18>.vali').text(' ');
        $('#div-l18>.vali').text($(this).val());
        });
        $('#l18s').on('input',function(){
        $('#div-l18>.vals').text(' ');
        $('#div-l18>.vals').text($(this).val());
        });
        $('#l18e').on('input',function(){
        $('#div-l18>.vale').text(' ');
        $('#div-l18>.vale').text($(this).val());
        });


        $('#l19i').on('input',function(){
        $('#div-l19>.vali').text(' ');
        $('#div-l19>.vali').text($(this).val());
        });
        $('#l19s').on('input',function(){
        $('#div-l19>.vals').text(' ');
        $('#div-l19>.vals').text($(this).val());
        });
        $('#l19e').on('input',function(){
        $('#div-l19>.vale').text(' ');
        $('#div-l19>.vale').text($(this).val());
        });



        $('#l20i').on('input',function(){
        $('#div-l20>.vali').text(' ');
        $('#div-l20>.vali').text($(this).val());
        });
        $('#l20s').on('input',function(){
        $('#div-l20>.vals').text(' ');
        $('#div-l20>.vals').text($(this).val());
        });
        $('#l20e').on('input',function(){
        $('#div-l20>.vale').text(' ');
        $('#div-l20>.vale').text($(this).val());
        });



        $('#l21i').on('input',function(){
        $('#div-l21>.vali').text(' ');
        $('#div-l21>.vali').text($(this).val());
        });
        $('#l21s').on('input',function(){
        $('#div-l21>.vals').text(' ');
        $('#div-l21>.vals').text($(this).val());
        });
        $('#l21e').on('input',function(){
        $('#div-l21>.vale').text(' ');
        $('#div-l21>.vale').text($(this).val());
        });




        $('#l22i').on('input',function(){
        $('#div-l22>.vali').text(' ');
        $('#div-l22>.vali').text($(this).val());
        });
        $('#l22s').on('input',function(){
        $('#div-l22>.vals').text(' ');
        $('#div-l22>.vals').text($(this).val());
        });
        $('#l22e').on('input',function(){
        $('#div-l22>.vale').text(' ');
        $('#div-l22>.vale').text($(this).val());
        });



        $('#l23i').on('input',function(){
        $('#div-l23>.vali').text(' ');
        $('#div-l23>.vali').text($(this).val());
        });
        $('#l23s').on('input',function(){
        $('#div-l23>.vals').text(' ');
        $('#div-l23>.vals').text($(this).val());
        });
        $('#l23e').on('input',function(){
        $('#div-l23>.vale').text(' ');
        $('#div-l23>.vale').text($(this).val());
        });


        $('#l24i').on('input',function(){
        $('#div-l24>.vali').text(' ');
        $('#div-l24>.vali').text($(this).val());
        });
        $('#l24s').on('input',function(){
        $('#div-l24>.vals').text(' ');
        $('#div-l24>.vals').text($(this).val());
        });
        $('#l24e').on('input',function(){
        $('#div-l24>.vale').text(' ');
        $('#div-l24>.vale').text($(this).val());
        });


        $('#l25i').on('input',function(){
        $('#div-l25>.vali').text(' ');
        $('#div-l25>.vali').text($(this).val());
        });
        $('#l25s').on('input',function(){
        $('#div-l25>.vals').text(' ');
        $('#div-l25>.vals').text($(this).val());
        });
        $('#l25e').on('input',function(){
        $('#div-l25>.vale').text(' ');
        $('#div-l25>.vale').text($(this).val());
        });


        $('#l26i').on('input',function(){
        $('#div-l26>.vali').text(' ');
        $('#div-l26>.vali').text($(this).val());
        });
        $('#l26s').on('input',function(){
        $('#div-l26>.vals').text(' ');
        $('#div-l26>.vals').text($(this).val());
        });
        $('#l26e').on('input',function(){
        $('#div-l26>.vale').text(' ');
        $('#div-l26>.vale').text($(this).val());
        });


        $('#l27i').on('input',function(){
        $('#div-l27>.vali').text(' ');
        $('#div-l27>.vali').text($(this).val());
        });
        $('#l27s').on('input',function(){
        $('#div-l27>.vals').text(' ');
        $('#div-l27>.vals').text($(this).val());
        });
        $('#l27e').on('input',function(){
        $('#div-l27>.vale').text(' ');
        $('#div-l27>.vale').text($(this).val());
        });


        $('#l28i').on('input',function(){
        $('#div-l28>.vali').text(' ');
        $('#div-l28>.vali').text($(this).val());
        });
        $('#l28s').on('input',function(){
        $('#div-l28>.vals').text(' ');
        $('#div-l28>.vals').text($(this).val());
        });
        $('#l28e').on('input',function(){
        $('#div-l28>.vale').text(' ');
        $('#div-l28>.vale').text($(this).val());
        });


        $('#l29i').on('input',function(){
        $('#div-l29>.vali').text(' ');
        $('#div-l29>.vali').text($(this).val());
        });
        $('#l29s').on('input',function(){
        $('#div-l29>.vals').text(' ');
        $('#div-l29>.vals').text($(this).val());
        });
        $('#l29e').on('input',function(){
        $('#div-l29>.vale').text(' ');
        $('#div-l29>.vale').text($(this).val());
        });



        $('#l30i').on('input',function(){
        $('#div-l30>.vali').text(' ');
        $('#div-l30>.vali').text($(this).val());
        });
        $('#l30s').on('input',function(){
        $('#div-l30>.vals').text(' ');
        $('#div-l30>.vals').text($(this).val());
        });
        $('#l30e').on('input',function(){
        $('#div-l30>.vale').text(' ');
        $('#div-l30>.vale').text($(this).val());
        });



        $('#l31i').on('input',function(){
        $('#div-l31>.vali').text(' ');
        $('#div-l31>.vali').text($(this).val());
        });
        $('#l31s').on('input',function(){
        $('#div-l31>.vals').text(' ');
        $('#div-l31>.vals').text($(this).val());
        });
        $('#l31e').on('input',function(){
        $('#div-l31>.vale').text(' ');
        $('#div-l31>.vale').text($(this).val());
        });




        $('#l32i').on('input',function(){
        $('#div-l32>.vali').text(' ');
        $('#div-l32>.vali').text($(this).val());
        });
        $('#l32s').on('input',function(){
        $('#div-l32>.vals').text(' ');
        $('#div-l32>.vals').text($(this).val());
        });
        $('#l32e').on('input',function(){
        $('#div-l32>.vale').text(' ');
        $('#div-l32>.vale').text($(this).val());
        });



        $('#l33i').on('input',function(){
        $('#div-l33>.vali').text(' ');
        $('#div-l33>.vali').text($(this).val());
        });
        $('#l33s').on('input',function(){
        $('#div-l33>.vals').text(' ');
        $('#div-l33>.vals').text($(this).val());
        });
        $('#l33e').on('input',function(){
        $('#div-l33>.vale').text(' ');
        $('#div-l33>.vale').text($(this).val());
        });


        $('#l34i').on('input',function(){
        $('#div-l34>.vali').text(' ');
        $('#div-l34>.vali').text($(this).val());
        });
        $('#l34s').on('input',function(){
        $('#div-l34>.vals').text(' ');
        $('#div-l34>.vals').text($(this).val());
        });
        $('#l34e').on('input',function(){
        $('#div-l34>.vale').text(' ');
        $('#div-l34>.vale').text($(this).val());
        });


        $('#l35i').on('input',function(){
        $('#div-l35>.vali').text(' ');
        $('#div-l35>.vali').text($(this).val());
        });
        $('#l35s').on('input',function(){
        $('#div-l35>.vals').text(' ');
        $('#div-l35>.vals').text($(this).val());
        });
        $('#l35e').on('input',function(){
        $('#div-l35>.vale').text(' ');
        $('#div-l35>.vale').text($(this).val());
        });


        $('#l36i').on('input',function(){
        $('#div-l36>.vali').text(' ');
        $('#div-l36>.vali').text($(this).val());
        });
        $('#l36s').on('input',function(){
        $('#div-l36>.vals').text(' ');
        $('#div-l36>.vals').text($(this).val());
        });
        $('#l36e').on('input',function(){
        $('#div-l36>.vale').text(' ');
        $('#div-l36>.vale').text($(this).val());
        });


        $('#l37i').on('input',function(){
        $('#div-l37>.vali').text(' ');
        $('#div-l37>.vali').text($(this).val());
        });
        $('#l37s').on('input',function(){
        $('#div-l37>.vals').text(' ');
        $('#div-l37>.vals').text($(this).val());
        });
        $('#l37e').on('input',function(){
        $('#div-l37>.vale').text(' ');
        $('#div-l37>.vale').text($(this).val());
        });


        $('#l38i').on('input',function(){
        $('#div-l38>.vali').text(' ');
        $('#div-l38>.vali').text($(this).val());
        });
        $('#l38s').on('input',function(){
        $('#div-l38>.vals').text(' ');
        $('#div-l38>.vals').text($(this).val());
        });
        $('#l38e').on('input',function(){
        $('#div-l38>.vale').text(' ');
        $('#div-l38>.vale').text($(this).val());
        });


        $('#l39i').on('input',function(){
        $('#div-l39>.vali').text(' ');
        $('#div-l39>.vali').text($(this).val());
        });
        $('#l39s').on('input',function(){
        $('#div-l39>.vals').text(' ');
        $('#div-l39>.vals').text($(this).val());
        });
        $('#l39e').on('input',function(){
        $('#div-l39>.vale').text(' ');
        $('#div-l39>.vale').text($(this).val());
        });


        $('#l40i').on('input',function(){
        $('#div-l40>.vali').text(' ');
        $('#div-l40>.vali').text($(this).val());
        });
        $('#l40s').on('input',function(){
        $('#div-l40>.vals').text(' ');
        $('#div-l40>.vals').text($(this).val());
        });
        $('#l40e').on('input',function(){
        $('#div-l40>.vale').text(' ');
        $('#div-l40>.vale').text($(this).val());
        });
