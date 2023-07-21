module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue,scss}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    colors: {
      'gray': '#EDEDED',
    },
    fontFamily: {
      'sans': 'Inter, Helvetica, Arial, sans-serif',
    },
    extend: {
      'sm': '1rem',
    },
  },
  plugins: [],
};
