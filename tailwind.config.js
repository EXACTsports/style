const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            red: colors.red,
            green: colors.green,
            yellow: colors.yellow,
        },
        extend: {
            fontFamily: {
                sans: ['Noto Sans', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // maroon
                'maroon' : '#8E1000',
                
                // orange
                'bright-orange' : '#F28C00', // Spect8 Logo
                'pale-orange' : '#F4BE76',
                'logo-orange': '#fe5000', // EXACT Logo
                
                // grey
                'dark-gray': '#363F51',
                
                //browns
                'pale-brown' : '#B99A7B',
                'beige' : '#F8F4EA',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
};
