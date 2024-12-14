import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                primary: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#1570EF",
                secondary: "#53B1FD",
                navy: "#1B2559",
                purple: "#707EAE",
                body: "#F4F7FE",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
