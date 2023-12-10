import $ from 'jquery';
import 'jquery-ui/ui/core';
import 'jquery-ui/ui/widgets/sortable';

$( function() {

    $("#sortable").sortable();

    // when any 'top' is clicked
    $(document).on('click', '.top', function() {

        // mode it to the top of the sortable
        $("#sortable").prepend($(this).parent());

        // and remove 'top' from the div just moved up
        $("#sortable .top").remove();

        // add 'top' to the element about to be moved down
        $("#sortable div:last-child").append($('<span class="top"><code>&nbsp;top</code></span>')); 

        // then move it down
        $("#static").prepend($("#sortable div:last-child"));

        // tidy static list by removing class which belongs to sortable list
        $("#static div").removeClass("ui-sortable-handle");
    });

    $("button").click(function () {
        $.ajax({
            url: "/index.php/save",
            type: 'POST',
            data: {articles: $("#sortable").sortable("serialize")},
            async: false,
            success: function (result, status, xhr) {
                console.log("result: " + result);
                console.log("status: " + status);
                console.log("xhr: " + xhr);
            },
            error: function (xhr, status, error) {
                console.log("xhr :" + xhr);
                console.log("status :" + status);
                console.log("error :" + error);
            }
        });
    });
});