/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './views/*.php',
    './public/js/*.js',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
}