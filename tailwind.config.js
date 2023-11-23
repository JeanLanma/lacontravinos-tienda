import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'main-black': '#0A0A0A',
                'main-black-2': '#666666',
                'main-red': '#FF0013',
                'main-red-2': '#BE161D',
                'acent-blue': '#2EA3F2'
            },
        },
    },

    plugins: [forms],
};
