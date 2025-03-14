import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/preline/dist/*.js",
        "./node_modules/jquery/dist/jquery.min.js",
        "./node_modules/datatables.net/js/dataTables.min.js",
    ],

    theme: {
        extend: {
            keyframes: {
                customBounce: {
                    "0%, 100%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(-10px)" },
                },
            },
            fontFamily: {
                primary: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#1570EF",
                secondary: "#53B1FD",
                navy: "#1B2559",
                purple: "#707EAE",
                body: "#F4F7FE",
                success: "#05CD99",
                successHover: "#6FEACA",
            },
            animation: {
                CustomBounce : "customBounce 2s ease-in-out infinite"
            }
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
    },

    plugins: [
        forms,
        require("preline/plugin"),
        require("flowbite/plugin")({
            datatables: true,
        }),
    ],
};
