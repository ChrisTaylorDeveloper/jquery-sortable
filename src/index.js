import _ from 'lodash';
import $ from 'jquery';

function component() {
    const element = document.createElement('div');
    element.innerHTML = _.join(['Hello', 'webpack'], ' ');
    return element;
}

$( function() {
    // $( "#sortable" ).sortable();
} );

document.body.appendChild(component());
