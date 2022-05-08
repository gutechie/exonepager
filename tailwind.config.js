module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'deep-cerulean': {
                    '100': '#b3dae2',
                    '400': '#00A5C8',
                    '500': '#00839F',
                    '600': '#005567',
                    '700': '#00272F',
                },
                secondary: '#ee7500',
                accent: '#f3f8fb'
            },
            width: {
               '128': '32rem'
            }
        },
    },
    plugins: [],
}
