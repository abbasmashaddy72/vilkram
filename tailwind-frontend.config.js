const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './resources/views/components/frontend/**/*.blade.php',
        './resources/views/components/common/**/*.blade.php',
        './resources/views/layouts/frontend/**/*.blade.php',
        './resources/views/layouts/guest.blade.php',
        './resources/views/livewire/form/frontend/**/*.blade.php',
        './resources/views/pages/frontend/**/*.blade.php',
        './resources/views/vendor/form-components/tailwind-3/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans]
            }
        }
    },

    plugins: [require('@tailwindcss/forms')]
}
