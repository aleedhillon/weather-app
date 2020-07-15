module.exports = {
  purge: [
    "app/**/*.php",
    "resources/**/*.html",
    "resources/**/*.js",
    "resources/**/*.jsx",
    "resources/**/*.ts",
    "resources/**/*.tsx",
    "resources/**/*.php",
    "resources/**/*.vue",
    "resources/**/*.twig"
  ],
  theme: {
    extend: {
      spacing: {
        '72': '18rem',
        '96': '24rem',
        '128': '32rem'
      }
    },
  },
  variants: {},
  plugins: [],
}
