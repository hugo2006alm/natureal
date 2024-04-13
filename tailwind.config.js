/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.php", "./src/**/*.html"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["light", "dark"],
  },
}

