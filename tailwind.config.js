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

                'purple-custom': '#544179',
                'skyblue-custom': '#32C1CD',
                'yellow-custom': '#FFA900',
                'red-custom': '#950101',
                'cake-custom': '#A9E4D7',
                'beige-custom': '#B4B897',
                'blue-custom': '#39A2DB',

                /* Colors Tailwind V3 */
                'tahiti':{
                    100: '#cffafe',
                    200: '#a5f3fc',
                    300: '#67e8f9',
                    400: '#22d3ee',
                    500: '#06b6d4',
                    600: '#0891b2',
                    700: '#0e7490',
                    800: '#155e75',
                    900: '#164e63',
                }

    
            },
        },
    },
    
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
