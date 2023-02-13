// swatch video changer

$(document).ready(function(){
    $('.swatchPick').click(function(){
        $("#swatchPreview").replaceWith("<video id='swatchPreview' class=\"embed-responsive-item\" autoplay loop controls></video>");
        if (this.firstElementChild.nextElementSibling.getAttribute("value").length > 0){
            $("#swatchPreview").attr("src",this.firstElementChild.nextElementSibling.getAttribute("value"));
            $("#swatchImage").attr("src",this.firstElementChild.nextElementSibling.nextElementSibling.getAttribute("value"));
        }else {
            $("#swatchPreview").replaceWith("<p id='swatchPreview'>No preview is available.</p>");
        }
    });
});

// end swatch video changer

// levels video changer

$(document).ready(function(){
    $('.levelPick').click(function(){
        $("#levelPreview").replaceWith("<video id='levelPreview' class=\"embed-responsive-item\" autoplay loop controls></video>");
        if (this.nextElementSibling.nextElementSibling.getAttribute("value").length > 0){
            $("#levelPreview").attr("src",this.nextElementSibling.nextElementSibling.getAttribute("value"));
        }else {
            $("#levelPreview").replaceWith("<p id='levelPreview'>No preview is available.</p>");
        }


    });
});

// end levels video changer
