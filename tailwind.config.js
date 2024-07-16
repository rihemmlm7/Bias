module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
    colors: {
      'red': '#FF2222',
    }
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
  }),
  ],
}
