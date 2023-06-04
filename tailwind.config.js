import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./node_modules/flowbite/**/*.js",
    "node_modules/preline/dist/*.js",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Poppins", ...defaultTheme.fontFamily.sans],
        inter: ["Inter", "sans-serif"],
      },
      keyframes: {
        pulse: {
          "100%": {
            transform: "scale(1.3)",
            opacity: "0",
          },
        },
        carousel: {
          "100%": {
            transform: "translateX(-400px)",
          },
        },
      },
      animation: {
        pulse: "pulse 2s ease-out infinite",
        "pulse-delay": "pulse 2s 1s ease-out infinite",
        carousel: "carousel 4s linear infinite",
      },
      scale: {
        "-100": "-1",
      },
    },
  },

  plugins: [
    forms,
    require("flowbite/plugin"),
    require("preline/plugin"),
    require("daisyui"),
  ],

  daisyui: {
    themes: false, // true: all themes | false: only light + dark | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: false, // name of one of the included themes for dark mode
  },
};
