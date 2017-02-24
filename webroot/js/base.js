$(document).ready(function() {
    $(document).keydown(handleDocumentKeyDown);
    
    $("#art_item_type_code").bind( "change",function(){
        setText("art_item_type_code","art_item_type_name");
    });
    $("#art_price_sold, #art_price_sold_currency_code").bind( "change",function(){
        convertPrice();
    });
    $(".add-edit-art-button").hover(function(){
        addRequiredBothField(); 
    });
    convertPrice();
    convertEstimatePrice();
    $("input[type='file']").on("change", function () {
        $(this).select();
    });
    
    $("input[type=text]").focus(function() {
        $(this).select();
    });
});
function setNameBySelectbox(codeId, nameId){
    var value = $("#"+codeId).val();
    var text = $( "#"+codeId+" option:selected" ).text();
    if($.trim(value) !== ""){
        $("#"+nameId).val($.trim(text));
    } else {
        $("#"+nameId).val("");
    }
}

function handleDocumentKeyDown(event){
    if(event.which === 9){
        if(event.shiftKey){
            $.tabPrev();
        }
        else{
            $.tabNext();
        }
        event.preventDefault();
    }
}

function previewImage(input, width) {
    var fileTypes = ['jpg', 'jpeg', 'png', 'bmp', 'gif'];
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase();
        if(fileTypes.indexOf(extension) > -1){
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = '<img class="margin-bottom-10" style="width:'+width+'px;" src="'+e.target.result+'"/>';
                $(input).parent().append(img);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            $(input).parent().children("img").remove();
        }
    } else {
        $(input).parent().children("img").remove();
    }
}
