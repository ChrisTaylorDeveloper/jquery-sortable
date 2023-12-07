import _ from 'lodash';
import $ from 'jquery';
import 'jquery-ui/ui/core';
import 'jquery-ui/ui/widgets/sortable';

function component() {
    const element = document.createElement('div');
    element.innerHTML = _.join(['Hello', 'from lodash'], ' ');
    return element;
}

$( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).on( "sortstop", function( event, ui ) {
        console.log( $( "#sortable" ).sortable( "serialize", { key: "sort" } ) );
    } );
    $("button").click(
        function(){
            $.post(
                "demo_test_post.asp",
                {
                    name: "Donald Duck",
                    city: "Duckburg"
                },
                function(data,status){
                    alert("Data: " + data + "\nStatus: " + status);
                }
            );
        }
    );
} );

document.body.appendChild(component());
