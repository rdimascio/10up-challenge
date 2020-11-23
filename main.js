'use strict';

(() => {
    document.addEventListener('click', handleDocumentClick);

    document
        .getElementById('headerMenuIcon')
        .addEventListener('click', handleMenuIconClick);

    document
        .getElementById('headerMenuClose')
        .addEventListener('click', handleMenuCloseClick);
})();

function handleMenuIconClick(event) {
    event.preventDefault();

    document
        .getElementById('headerMenu')
        .classList.remove('hide');
}

function handleMenuCloseClick(event) {
    event.preventDefault();

    document
        .getElementById('headerMenu')
        .classList.add('hide');
}
