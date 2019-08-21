$( document ).ready(function()
{


$("#"+$("#mostra_vista").val()).addClass("active");

$("#usuario").load("/intranet/inc/authentic/usuario_p1.php",function(){
    $("#contenedor_usuario").click(function(e){
});


});
$("#sub").click(function(){
  $(this)[0].addClass("active");
});
$("#rerelogin-modal").load("/intranet/inc/authentic/formula.php",function(){
    reloginSesion();
});

});
function cerrar_ventana() {
window.close();
}
