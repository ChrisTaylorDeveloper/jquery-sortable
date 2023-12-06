import _ from 'lodash';
import $ from 'jquery';
import 'jquery-ui/ui/core';
import 'jquery-ui/ui/widgets/sortable';

function component() {
    const element = document.createElement('div');
    element.innerHTML = _.join(['Hello', 'webpack'], ' ');
    return element;
}

$( function() {
    $( "#sortable" ).sortable();
} );

document.body.appendChild(component());
