
$("#id").val(Cookies.get('key'));      
if($("#id").val() != ""){
    $("#idSaveCheck").attr("checked", true);
}

$("#idSaveCheck").change(function(){
if($("#idSaveCheck").is(":checked")){
    Cookies.set('key', $("#id").val(), { expires: 7 });
}else{
      Cookies.remove('key');
}
});
 
$("#id").keyup(function(){
if($("#idSaveCheck").is(":checked")){
    Cookies.set('key', $("#id").val(), { expires: 7 });
}
});
