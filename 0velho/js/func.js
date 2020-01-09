$(function(){    
    var exp = /^\w+([\.-]\w+)*@\w+\.(\w+\.)*\w{2,3}$/;// ER valida mail    
   
    $("#botao").click(function(){
        
        if($("#nome").val().length < 3){$("#mensagemOK").slideUp(500);
            $("#mensagem").slideUp(500).html("Digite o campo Nome Corretamente!").slideDown(500);
            $("#nome").val('').focus().keydown(function(){$("#mensagem").slideUp(500);});return false;
        }       
        else if (!exp.test($("#mail").val())){$("#mensagemOK").slideUp(500);
            $("#mensagem").slideUp(500).html("E-Mail Inválido!").slideDown(500);
            $("#mail").val('').focus().keydown(function(){$("#mensagem").slideUp(500);});return false;
        }        
        else if ($("#msg").val().length < 3){$("#mensagemOK").slideUp(500);
            $("#mensagem").slideUp(500).html("Digite uma Mensagem ..").slideDown(500);
            $("#msg").val('').focus().keydown(function(){$("#mensagem").slideUp(500);});return false;
        }
        else{$("#mensagem").slideUp(500);
            var nome = $("#nome").val();var mail = $("#mail").val(); var msg = $("#msg").val();
            var botao = $("#botao").val();
            $.post("./enviar.php", {nome: nome, mail: mail, msg: msg, botao: botao}, function(mostrar){
            $('#mensagemOK').slideUp(500).html(mostrar).slideDown(500);});
            $("#nome").val("OK");$("#mail").val("OK");$("#msg").val("OK");
        }
        
});

});