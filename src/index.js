import _ from 'lodash';

function component() {
    const element = document.createElement('div');
    element.innerHTML = _.join(['Hello', 'webpack'], ' ');
    return element;
}

// $( function() {
//     $( "#sortable" ).sortable();
// } );

document.body.appendChild(component());
