$(function()
{
    $.ajaxSetup({ cache: false });	



    var options = 
    {
        target: "#error",
        success: ajaxify,
        "ajax": true

    }


    function ajaxify(response, status, xhr, form)
    {

        $("#LineUpload").ajaxForm(options);

    }

    $("#LineUpload").ajaxForm(options);

    $('#LineUpload').submit(function() {
        $(this).ajaxSubmit(options);
        return false;
    });





});


