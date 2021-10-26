module.exports = {
  purge: [
    require('@tailwindcss/custom-forms'),
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
      pagination: theme => ({
          color: theme('colors.green.600'),
      }),
    extend: {},
  },
  variants: {
    extend: {},
  },
    plugins: [
        require('tailwindcss-plugins/pagination'),({
            color: colors['green-dark'],
        }),
    ],
}
