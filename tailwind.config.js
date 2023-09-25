/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./views/**/*.{html,php,js}'],
  darkMode:'class',
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin'),],
}

