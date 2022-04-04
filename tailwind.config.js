module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      boxShadow: {
        '2xl': '0 35px 60px -15px rgba(116, 59, 89, 0.8)',
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]

}
