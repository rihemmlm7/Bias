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
      'bleu':'#0C0C34',
      'gray':'#575B66',
    },
    gap: {
      '8': '1rem', // Example custom gap size
    },
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
  }),
  ],
}
