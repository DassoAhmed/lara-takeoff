const defaultTheme = require('tailwindcss/defaultTheme');
import colors from 'tailwindcss/colors'


/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                danger: colors.rose,
                primary: {
                    50: '#eff6ff',
                   100: '#dbeafe',
                   200: '#bfdbfe',
                   300: '#93c5fd',
                   400: '#60a5fa',
                   500: '#1e40af', // same as blue-800
                   600: '#2563eb',
                   700: '#1d4ed8',
                   800: '#1e40af',
                   900: '#1e3a8a',

                },
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')],
};
