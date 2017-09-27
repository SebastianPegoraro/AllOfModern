$("#boton").on("click", function(){
  var hayerror = false;
  $("input[type = text]").each(function(){
    if ($(this).val().trim() == "") {
      $(this).css("background-color","#f2dede");
      hayerror =true;
    }
  });
  if (hayerror) {
      $("#msgerror").modal('show');
  } else {
    $("#ble").submit();
  }
});
