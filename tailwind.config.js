const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    purge: ["./**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                display: ["Playfair Display", "serif"],
                heading: ["Fira Sans Condensed", "serif"],
                sans: ["Overpass", "sans-serif"],
            },
        },
    },
    variants: {},
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
