$("#button2").on("click", function(){
  var hayerror = false;
  $("input[type = text]").each(function(){
    if ($(this).val().trim() == "") {
      $(this).css("background-color","#f2dede");
      hayerror =true;
    }
  });
  $("textarea").each(function(){
    if ($(this).attr("id") != "obser9" && $(this).attr("id") != "obser10") {
      if ($(this).val().trim() == "") {
        $(this).css("background-color","#f2dede");
        hayerror =true;
      }
    }
  });
  if (hayerror) {
      $("#msgerror").modal('show');
  } else {
    $("#ble").submit();
  }
});
