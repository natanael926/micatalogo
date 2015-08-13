$(document).ready(function(){



    $.deleteRegister = function(url){
        console.log('Entro a ');
        console.log(url);
        $.ajax({
            type: "DELETE",
            url: url
        }).done(function(msg){
            alert("data saved: " + msg);
        });
    }


});