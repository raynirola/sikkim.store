const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
            },
            colors: {
                teal: colors.teal
            },
            spacing: {
                '100': '25rem',
                '104': '26rem',
                '108': '27rem',
                '112': '28rem',
            },
        },
        truncate: {
            lines: {
                1: '1',
                2: '2',
                3: '3',
                4: "4",
                5: '5',
            }
        },
    },
    variants: {
        extend: {
            ringColor: ['hover'],
            opacity: ['disabled'],
            scale: ['active'],
            textColor: ['disabled']
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-truncate-multiline')(),
        require("kutty"),
        require('@tailwindcss/line-clamp')
    ],
}
