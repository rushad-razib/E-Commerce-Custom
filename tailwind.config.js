/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        'pop': "Poppins",
      },
      maxWidth: {
        'container': '1170px',
      }
    },
  },
  plugins: [],
}