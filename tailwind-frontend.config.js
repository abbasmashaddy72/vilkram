module.exports = {
    content: [
        './resources/views/components/frontend/**/*.blade.php',
        './resources/views/components/common/**/*.blade.php',
        './resources/views/errors/**/*.blade.php',
        './resources/views/layouts/frontend/**/*.blade.php',
        './resources/views/layouts/guest.blade.php',
        './resources/views/livewire/form/frontend/**/*.blade.php',
        './resources/views/pages/frontend/**/*.blade.php',
        './resources/views/vendor/form-components/tailwind-3/**/*.blade.php',
        './resources/views/vendor/livewire/**/*.blade.php'
    ],
    theme: {
        screens: {
            sm: '540px',
            // => @media (min-width: 576px) { ... }

            md: '720px',
            // => @media (min-width: 768px) { ... }

            lg: '960px',
            // => @media (min-width: 992px) { ... }

            xl: '1140px',
            // => @media (min-width: 1200px) { ... }

            '2xl': '1320px'
            // => @media (min-width: 1400px) { ... }
        },
        container: {
            center: true,
            padding: '16px'
        },
        extend: {
            colors: {
                black: '#212b36',
                dark: '#090E34',
                'dark-700': '#090e34b3',
                primary: '#3056D3',
                secondary: '#C63091',
                'body-color': '#637381',
                body: '#f2ffff',
                warning: '#FBBF24'
            },
            boxShadow: {
                input: '0px 7px 20px rgba(0, 0, 0, 0.03)',
                pricing: '0px 39px 23px -27px rgba(0, 0, 0, 0.04)',
                'switch-1': '0px 0px 5px rgba(0, 0, 0, 0.15)',
                testimonial: '0px 0px 10px 5px #4361ee'
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: [require('@tailwindcss/aspect-ratio')]
}
