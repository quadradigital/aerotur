jQuery(document).ready(function(){
  jQuery('#slippry-demo').slippry({
  	controls: false
  	//pager: false // remove o pager do slider
  })
});

jQuery(document).ready(function(){
  jQuery('#slider-topo').slippry({
  	controls: false,
  	pager: false,
  	controls: true
  	//pager: false // remove o pager do slider
  })
});

jQuery(document).ready(function(){
  
  $('input[type="checkbox"]').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
  });


      $('.filtro_pacote').change(function() {

          var arr = [];
          var cont = 0;
          $('.filtro_pacote').each(function() {

                      var id = $(this).attr('id');
                      var chec = document.getElementById(id).checked;
                    
                      if(chec === true){
                          arr[cont] = id;
                          cont = cont +1;

                      }

           });

           var lista_id = "";

           for (var i = 0; i < arr.length; i++) {          
                lista_id = lista_id + '.'+arr[i]+'_div_pacote';
           };
           
           $('.allitem_div_pacote').hide('slow').removeClass('pacote_ativo');

          $(''+lista_id+'').each(function() {
            
                  var has = $(this).hasClass('preco_ativo');

                  if( has === true){
                    // console.log('hassa');
                      
                      $(this).show('slow').addClass('pacote_ativo');

                  }

           });
                
      });


      $('.filtro_pacote_parcela').change(function(){ 
         
          var id3 = $(this).attr('id');
          var de = parseInt($(this).attr('de'));
          var ate = parseInt($(this).attr('ate'));

          if(id3 == 'allitem_parcela'){
            // console.log('aa');

            $('.allitem_div_pacote').each(function() {  

                  var has2 = $(this).hasClass('pacote_ativo');

                  if( has2 === true ){
                       
                       $(this).show('slow').addClass('preco_ativo'); 
                  }

            });


          }else{

             
              $('.allitem_div_pacote').each(function() {
                     var id2 = $(this).attr('id');
                     var valor = parseInt($('.parcela_'+id2).text().replace(".", ""));
                     
                     // console.log('de '+de);
                     // console.log('ate '+ate);
                     // console.log('valor '+valor);
                     
                     var has = $('#'+id2+'').hasClass('pacote_ativo');
                         if( has === true){

                           if((valor >= de) && (valor <= ate)){
                                $('#'+id2).show('slow');
                               
                                $('#'+id2).addClass('preco_ativo');

                              
                           }else{
                                $('#'+id2).hide('slow');
                                 $('#'+id2).removeClass('preco_ativo');
                           }
                      }
               });

          }


      });


      // $('.monte-box-form-footer').mouseover(function() {

      //     $('.outer-form').css({ opacity: '1'});

      // }); 

      // $('.monte-box-form-footer').mouseout(function() {

      //     $('.outer-form').css({ opacity: '0'});

      // }); 


});


      jQuery(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });


      jQuery(document).ready(function(){
       
        $('.btn_tenho_int').click(function(){
              $('html, body').animate({scrollTop: $('#sessao_contato').offset().top -120});
          });

        $('#btncontato').click(function(){
              $('html, body').animate({scrollTop: $('#sessao_contato').offset().top -120});
          });

        

        $('#btnlojas').click(function(){
              $('html, body').animate({scrollTop: $('#sessao_lojas').offset().top -120});
          });

        $('#btnempresa').click(function(){
              $('html, body').animate({scrollTop: $('#sessao_empresa').offset().top -580});
          });





        $('.monte-box-form-footer').mouseover(function() {

              $('.outer-form').show();
              $('.outer-form').css({
                opacity: '1'
              });
        });


          $('.container_testehover').mouseenter(function() {
                  $('.outer-form').css({
                      opacity: '0'
                    });
          });


        $('.monte-box-form-footer').mouseleave(function() {

                  //    console.log($('.outer-div').is(":hover"));
            

                  // console.log('=='+$('.monte-box-form-footer').is(":hover"));
                  
      

              if($('.outer-div').is(":hover")){
                  
                   // console.log('aqui');
                      // console.log('éé'+$('.outer-form').is(":hover"));
              }else{
                    $('.outer-form').css({
                      opacity: '0'
                    });

                    $('.outer-form').hide();
                   // console.log('aqui2');
              }
        });

        $('.outer-form').mouseleave(function() {

              if(! ($('.monte-box-form-footer').is(":hover")) ){
                    $('.outer-form').css({
                      opacity: '0'
                    });

                    $('.outer-form').hide();
              }
        });

      });
       


        $(document).ready(function(){
        $('selector').slippry();

         $('#slippry').slippry();

         $('#slippry50anos').slippry();

        });
        