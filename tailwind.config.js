/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      green :  '#0FBA68',
      white : '#ffffff',
      lightgray : '#E6E6E7',
      gray: '#808189',
      black : '#010414',
    },
    extend: {
    },
  },
  plugins: [],
}