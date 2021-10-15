const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Noto Sans', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // maroon
                'maroon' : '#8E1000',
                
                // orange
                'bright-orange' : '#F28C00',
                'pale-orange' : '#F4BE76',
                'logo-orange': '#fe5000',
                
                // grey
                'dark-gray': '#363F51',
                
                //browns
                'pale-brown' : '#B99A7B',
                'beige' : '#F8F4EA',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
};
