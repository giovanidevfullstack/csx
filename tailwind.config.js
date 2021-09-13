module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class' | future: add toogle button to set dark into body - class strategy
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
