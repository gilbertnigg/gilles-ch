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
      transitionTimingFunction: {
        overlay: 'cubic-bezier(.87,0,.13,1)',
      },
      animation: {
        fadein: 'fadein 0.4s ease-in-out forwards',
        navfadein: 'navfadein 0.4s ease-out forwards',
      },
      keyframes: {
        fadein: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
        navfadein: {
          '0%': { opacity: 0, transform: 'translateY(2rem)' },
          '100%': { opacity: 1, transform: 'translateY(0rem)' },
        }
      },
      height: {
        overlay: 'calc(100vh - 7rem)',
      },
      colors: {
        gb: {
          dark: '#2D3F49',
          DEFAULT: '#58788E',
          light: '#ACBEC8',
        },
        logo: '#5b7f95',
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
        '2xl': ['2.1rem', 1.25],
        '3xl': ['2.8rem', 1.25],
      }
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
};
