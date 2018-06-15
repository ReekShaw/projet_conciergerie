// Archiver les tâches réalisées (à finir)
$("td").on("click", ".archiver", function(){
    if ($( this ).is(':checked')) {
        $(this).next().css("color" , "green");
        $(this).next().next().html('<i>Tâche réalisée à ' + new Date($.now()) + '</i>')
    } else {
        $(this).next().css("color" , "#636b6f");   
        $(this).next().next().html('')    
    }    
});
//---------------------------------------

// Afficher formulaire selon choix radio
$(function(){

    $("#permanence").hide();
    $("#dediee").hide();
    $("#personalisee").hide();

    $("input[name=choix_livraison]").change(function() {
        if($("input[type=radio]:checked").val() === "permanence"){
            $("#permanence").show();
            $("#dediee").hide();
            $("#personalisee").hide();
        } else if($("input[type=radio]:checked").val() === "dediee"){
            $("#permanence").hide();
            $("#dediee").show();
            $("#personalisee").hide();
        } else if($("input[type=radio]:checked").val() === "personalisee"){
            $("#permanence").hide();
            $("#dediee").hide();
            $("#personalisee").show();
        }
    });
});
//--------------------------------------