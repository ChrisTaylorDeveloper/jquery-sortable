import $ from 'jquery';
import 'jquery-ui/ui/core';
import 'jquery-ui/ui/widgets/sortable';

$( function() {
    $("#sortable").sortable();
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