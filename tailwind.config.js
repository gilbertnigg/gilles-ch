module.exports = {
  corePlugins: {
    textOpacity: false,
    borderOpacity: false,
    backgroundOpacity: false,
  },
  content: [
      './public/site/plugins/**/*.php',
      './public/site/snippets/**/*.php',
      './public/site/templates/**/*.php',
      './src/scripts/**/*.js'
  ],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1100px',
      xl: '1360px',
    },
    extend: {
      colors: {
        gb: {
          dark: '#2D3F49',
          DEFAULT: '#5A7E92',
          light: '#ACBEC8',
        },
        gray: {
          100: '#FEFEFE',
          200: '#EEEEEE'
        }
      },
      fontFamily: {
        sans: ['Ringside', 'sans-serif'],
      },
      fontSize: {
        xs: ['0.85rem', 1.3],
        sm: ['0.925rem', 1.3],
        base: ['1.2rem', 1.4],
        md: ['1.35rem', 1.3],
        lg: ['1.5rem', 1.2],
        xl: ['1.8rem', 1.2],
      },
    },
  },
  plugins: [],
};
