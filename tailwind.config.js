/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                red: {
                    500: "#ff0000",
                    600: "#cc0000",
                    // Add more shades if needed
                },
            },
        },
    },
    plugins: [],
};
