// $(document).ready(function(){
//     $('.up').hide();

//     $(window).scroll(function(){
//         if($(this).scrollTop() >10){
//             $('.up').fadeIn('1000');
//         }else{
//             $('.up').fadeOut('1000');
//         }
//     });

//     $('.up').click(function(){
//         $('body,html').animate({
//             scrollTop: '0'
//         },150);
//     });
// });


$(document).ready(function(){     /*Cuando el documento este listo ejecuta lo siguiente*/

        $('.up').hide();  /*Ocultar el boton*/
  
        $(window).scroll(function(){    /*cuando hagamos scroll que haga lo siguiente*/
            if($(this).scrollTop() > 10 ){      /*Si cuando hagas scroll y bajes 10 pixeles */
                $('.up').fadeIn('800');   /*que aparezca el boton*/
            }else{
                $('.up').fadeOut('200');   /*que desaparezca*/
            }
        });
  
        $('.up').click(function(){   /*aca el efecto a programar sera al dar clic*/
           $('body, html').animate({
               scrollTop: '0'       /*me debe de llevar al principio de mi página */
    },150);   /*EL VALOR DE 150 ES PARA QUE SUBA MAS RAPIDO*/
   });
});