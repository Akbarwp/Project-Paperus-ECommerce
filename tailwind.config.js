const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                inter: ['Inter']
            },
            colors: {
                redMain: '#E62129',
                greyMain: '#585659',
                blackMain: '#1A202C',
                pinkkMain: '#FDEDEE',
            },
            animation: {
                'spin-slow': 'spin 2s linear infinite',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tailwind-scrollbar')({ nocompatible: true }),
        require("daisyui"),
    ],

    variants: {
        scrollbar: ['rounded']
    }
};
