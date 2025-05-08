import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
import 'intl-tel-input/build/js/intlTelInput.js';


document.addEventListener("DOMContentLoaded", () => {
    const input = document.querySelector("#phone");

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

        // (Opcional) guardar el número formateado antes de enviar el formulario
        document.querySelector("#form_register")?.addEventListener("submit", () => {
            input.value = iti.getNumber();
        });
    }
});

