const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
       extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors : {
                'primary' : '#0D2772',
                'secondary' : '#ECAD43',
                'dark' : '#0f172a',
                'gray' : '#64748b',
                'mode' : '#cbd5e1',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require("daisyui")],
};
