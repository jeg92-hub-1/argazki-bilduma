$(document).ready(function() {
        $("#content1 div").hide();
        $("#tabs li:first").attr("id","current");
        $("#content1 div:first").fadeIn();
 
    $('#tabs a').click(function(e) {
        e.preventDefault();
        $("#content1 div").hide();
        $("#tabs li").attr("id","");
        $(this).parent().attr("id","current");
        $('#' + $(this).attr('title')).fadeIn();
    });
})();