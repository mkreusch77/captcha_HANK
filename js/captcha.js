
  var ret = "";
    $.post("url_do_projeto/randomCaptcha.php", function(data) {
    var obj = JSON.parse(data);
    ret = obj.nome;
    $("#aqui").html("");
    $("#aqui").css("background-image","url(images/"+obj.code+".gif"+")");
  });

  function Valida_captcha() {
    if(!$("#validCaptcha").val()) {
        alert("Digite algo...");
    } else {
      if(ret == $("#validCaptcha").val()) {
          alert ("Aqui você submete seu formulário!!!")
          // redireciona... submete formulário ... envia dados ...

      } else {
        alert("Texto inválido, tente novamente!");
        setTimeout(function() {
          location.reload();
        }, 5000);
      }
    }
  }
