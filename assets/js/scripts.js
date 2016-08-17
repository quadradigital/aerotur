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
          // _div_pacote,
          var chec = document.getElementById(id).checked;
          // var chec2 = document.getElementById('allitem').checked;  
         
          // if(chec2 === false){

                if(chec === true){
                   // $('.'+id+'_div_pacote').show('slow');
                    arr[cont] = id;
                    cont = cont +1;

                }

                if(chec === false){
                //    $('.'+id+'_div_pacote').hide('slow');
                }

          // }else{
          //     $('.allitem_div_pacote').show('slow');
          // }

     });

     var lista_id = "";

     for (var i = 0; i < arr.length; i++) {          
          lista_id = lista_id + '.'+arr[i]+'_div_pacote';
     };
     

      $('.allitem_div_pacote').hide('slow');
      $(''+lista_id+'').show('slow');


  });

});


jQuery(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});