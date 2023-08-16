module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue,scss}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    colors: {
      'gray': '#EDEDED',
      'lightgray': '#F7F7F7',
      'darkgray': '#333333',
      'lightgrayTransparent': 'rgba(125, 125, 125, 0.8)',
      'black': '#000000',
      'white': 'antiquewhite',
      'red': '#FF0000',
      'blue': '#0000FF',
      'lightblue': '#ABEBFB', // picked from logo
      'darkblue': '#00008B',
      'green': '#00FF00',
      'yellow': '#FFFF00',
      'orange': '#FFA500',
      'purple': '#800080',
      'pink': '#FFC0CB',
      'teal': '#008080',
      'lavender': '#E6E6FA',
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
