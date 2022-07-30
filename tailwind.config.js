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
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', 'Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'twitter-blue-1': '#1DA1F2',
                'twitter-blue-2': '#1A91DA',
                'discord-purple-1': '#5766f2',
                'discord-purple-2': '#3d45a5',
                'primary': '#44a4d7',
                'blue-light': '#1c263c',
                'blue-lighter': '#1a2336'
            },
            fontSize: {
                '2xs': '0.625rem'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
