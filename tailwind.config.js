const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                display: ["Playfair Display", "serif"],
                heading: ["Fira Sans Condensed", "serif"],
                sans: ["Overpass", "sans-serif"],
            },
        },
    },
    variants: {},
    plugins: [require("@tailwindcss/forms")],
    plugins: [require("@tailwindcss/typography")],
};
