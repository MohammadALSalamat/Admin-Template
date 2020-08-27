module.exports = {
    purge: [],
    theme: {
        extend: {},
    },
    variants: {
        tableLayout: ['responsive', 'hover', 'focus'],
    },
    plugins: [
        // ...
        require('tailwindcss'),
        require('autoprefixer'),
        // ...
    ],
}
