$(document).ready( function (){
    var optgroups = $("optgroup");
    $.each(optgroups, function(key, opt){
        var links = $("#" + $(opt).attr("class")+" a");
        if (links.length<1){
            console.log(opt);
            $(opt).remove();
        }
        else{
        $.each(links, function( key, link){
            $(opt).append(" <option value='" + $(link).attr("href") +"'>"+$(link).text()+ "</option>");
        });
        }
    });

    $("#navigation").change(function(){
       window.location =  $(this).val();
    });
});
