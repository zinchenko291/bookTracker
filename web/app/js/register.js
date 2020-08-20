'use strict'

let inputPassword = document.querySelector('#inputPasswordReg');
let inputPasswordConfirm = document.querySelector('#inputPasswordConfirmReg');
let passwordStatus = document.querySelector('#passwordConfirmStatus');
let submitButton = document.querySelector('#submitButton');

inputPasswordConfirm.addEventListener('blur', passwordMatchCheck);

function passwordMatchCheck(e) {
    if (inputPassword.value !== inputPasswordConfirm.value) {
        passwordStatus.hidden = false;
        submitButton.setAttribute('disabled', '');
    } else {
        passwordStatus.hidden = true;
        submitButton.removeAttribute('disabled');
    }
}