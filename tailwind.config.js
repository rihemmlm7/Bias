module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
     "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      'red': '#FF2222',
      'bleu':'#0C0C34',
      'gray':'#575B66',
      'blue1':'#161659',
      'gr':'#E3DCDC',
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
