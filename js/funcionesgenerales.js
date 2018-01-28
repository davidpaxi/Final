function cargarmodulo(m,actual)
{
	$.ajax({
		type: "GET",
		url: "modulos/"+m+"/php/content.php",
		async: true,
	  	//complete: function(x,s){console.log("complete:"+x.responseText)	},
		success: function(respuesta){
      	//alert("funciones");
			  $("#sidemenu> li").removeClass("active");
        $("#page-content").html(respuesta);
    		$(actual).addClass("active");
		    //$.unblockUI();   

      }
  });
}

/*function cargarmodulo(m,actual){
	$.ajax({
		type:"get",
		url:"modulos/"+m+"/php/content.php"
	})
	.done(function(data){
		$("#sidemenu> li").removeClass("active");
    $("#page-content").html(data);
    $(actual).addClass("active");
	})
}*/