import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
import 'intl-tel-input/build/js/intlTelInput.js';


document.addEventListener("DOMContentLoaded", () => {
    const input = document.querySelector("#phone");
    const form = document.querySelector("#form_register");
    if (input) {
        const iti = intlTelInput(input, {
            initialCountry: "pa",
            autoPlaceholder: "polite",
            placeholderNumberType: 'MOBILE',
            nationalMode: false,
            hiddenInput: () => ({
                phone: "full_phone",
                country: "country_code",

              }),
            loadUtils: () => import("intl-tel-input/utils"), // esta es la forma correcta con Vite
        });
    
        form.onsubmit = () => {
            if (!iti.isValidNumber()) {
            let error_message = '';
            const error = iti.getValidationError();
            if (error === intlTelInput.utils.validationError.TOO_SHORT) {
                error_message = 'the number is too short';
            }
              message.innerHTML = `Invalid number, Please try again. ${error_message}`;
              return false;
            }
          };

        // (Opcional) guardar el número formateado antes de enviar el formulario
        document.querySelector("#form_register")?.addEventListener("submit", () => {
            input.value = iti.getNumber();
        });
    }
});

