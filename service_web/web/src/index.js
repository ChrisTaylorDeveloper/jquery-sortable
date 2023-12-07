import $ from 'jquery';
import 'jquery-ui/ui/core';
import 'jquery-ui/ui/widgets/sortable';

$( function() {

    $( "#sortable" ).sortable();

    $( "#sortable" ).on( "sortstop", function( event, ui ) {
        console.log( $( "#sortable" ).sortable( "serialize", { key: "sort" } ) );
    } );

    $("button").click(
        function(){
            $.post(
                "/index.php/save",
                {
                    foo: $( "#sortable" ).sortable( "serialize", { key: "sort" } )
                },
                function(data, status){
                    console.log("Data: " + data + "\nStatus: " + status);
                }
            );
        }
    );
} );
