module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    // extend: {},
    boxShadow: {
      'r-3-xl': '0 0 1em rgba(0, 0, 0, 0.3)',
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
