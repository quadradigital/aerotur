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

  $('.filtro_pacote').change(function() {
    
    
    var id = $(this).attr('id');
    // _div_pacote,
    var chec = document.getElementById(id).checked;
    
    var chec2 = document.getElementById('allitem').checked;  
   
    if(chec2 === false){

          if(chec === true){
              $('.'+id+'_div_pacote').show();
          }

          if(chec === false){
              $('.'+id+'_div_pacote').hide();
          }

    }else{
        $('.allitem_div_pacote').show();
    }


  });

});