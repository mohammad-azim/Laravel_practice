module.exports = {
  theme: {
    extend: {},
  },
  variants: {
  	fontStyle: ['responsive', 'hover', 'focus'],
  },
  plugins: [
  	require('tailwindcss'),
    require('autoprefixer'),
  ],
}
