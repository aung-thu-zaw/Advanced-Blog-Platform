import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "./node_modules/preline/preline.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
                openSans: ["Open Sans", "sans-serif"],
                merriweather: ["Merriweather", "serif"],
                playfairDisplay: ["Playfair Display", "serif"],
            },
        },
    },

    plugins: [forms, require("preline/plugin")],
};
