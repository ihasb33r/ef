var vote = function(path, id){

    var vote = $("#vote-score-"+id).val();
    var comment = $("#vote-comment-"+id).val();
    $.ajax({
        type: "GET",
        url: path,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: {"vote":vote, "comment": comment},
        success: function (response) {
            $("#vote-"+id).parent().hide();
            console.log(success);
        },
        failure: function (msg) {
        }
    });

}

var transformVotes = function (){
    $.each($(".score"), function(key, val){

        $value = parseInt($(val).text());

        $(val).empty();

        for(i=0;i<5;i++){
            if (i<$value){
                console.log(i);
                $(val).append("<span class='vote'><span>");
            }
            else{
                $(val).append("<span class='novote'><span>");

            }

        }
    });
}
