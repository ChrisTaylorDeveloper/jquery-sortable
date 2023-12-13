import $ from 'jquery';
import 'jquery-ui/ui/core';
import 'jquery-ui/ui/widgets/sortable';

$(document).ready(function() {
    // DEMO A
    $("#sortable").sortable();
    $(document).on('click', '#demo-a .top', function() {
        // move it to the top of the sortable
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
    $("#button-a").click(function () {
        $.ajax({
            url: "/index.php/save-a",
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

    // DEMO B
    $(document).on('click', '#demo-b .up-one', function() {
        $(this.parentElement).insertBefore($(this.parentElement).prev());
    });
    $(document).on('click', '#demo-b .dn-one', function() {
        $(this.parentElement).insertAfter($(this.parentElement).next());
    });
    $(document).on('click', '#demo-b .top', function() {
        $("#demo-b-articles").prepend($(this).parent());
    });
    $("#button-b").click(function () {
        var data_array = [];
        $("#demo-b-articles .article").each(function(){
            data_array.push($(this).data('article-id'));
        });
        $.ajax({
            url: "/index.php/save-b",
            type: 'POST',
            data: {articles: JSON.stringify(data_array)},
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