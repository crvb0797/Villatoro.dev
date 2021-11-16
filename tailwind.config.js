const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins'],
            },
            colors:{
                'metalic-100': '#D6D6D6',
                'metalic-200': '#2F2F2F',
                'metalic-900':'#2A2A2A',
                'yellow-500': '#F5AF31',
                skyblue: '#3FAFDD',
                purple: '#8472AD',
                pink: '#D843AB',
    
            },
        },
    },
    
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
