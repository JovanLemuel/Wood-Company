const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");

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
                display: ["Playfair Display", "serif"],
                heading: ["Fira Sans Condensed", "serif"],
                sans: ["Overpass", "sans-serif"],
            },
            colors: {
                jevon_ganteng: "#171a1a",
                jevon_ganteng_sekali: "#F88500",
                jevon_ganteng_amat: "#FF961D",
                jevon_ganteng_gila: "#E27F0D",
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
