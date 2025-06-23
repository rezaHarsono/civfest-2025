/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/*.{html,js}",
        "./node_modules/flowbite/**/*.js", // Moved this here
    ],
    plugins: [require("taos/plugin"), require("flowbite/plugin")],
    safelist: [
        "!duration-[0ms]",
        "!delay-[0ms]",
        "html.js :where([class*='taos:']:not(.taos-init))",
    ],
    transform: {
        // Ensure `transform` is correctly nested under `content`
        transform: (content) => content.replace(/taos:/g, ""),
    },
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
                body: [
                    "Inter",
                    "ui-sans-serif",
                    "system-ui",
                    "-apple-system",
                    "system-ui",
                    "Segoe UI",
                    "Roboto",
                    "Helvetica Neue",
                    "Arial",
                    "Noto Sans",
                    "sans-serif",
                    "Apple Color Emoji",
                    "Segoe UI Emoji",
                    "Segoe UI Symbol",
                    "Noto Color Emoji",
                ],
            },
            colors: {
                primary: {
                    50: "#eff6ff",
                    100: "#dbeafe",
                    200: "#bfdbfe",
                    300: "#93c5fd",
                    400: "#60a5fa",
                    500: "#3b82f6",
                    600: "#2563eb",
                    700: "#1d4ed8",
                    800: "#1e40af",
                    900: "#1e3a8a",
                    950: "#172554",
                },
            },
            backgroundImage: {
                "hero-pattern": "url('../../img/bg-hero.jpg')",
            },
        },
    },
};
