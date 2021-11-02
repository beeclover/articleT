const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

const colors = {
  lighthouse: '#f4f4f4',
  basaltGrey: '#999999',
  cerebralGrey: '#cccccc',
  carbon: '#333333',
  steam: '#dddddd',
  squant: '#666666',
};

module.exports = {
  mode: 'jit',
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      // container: {
      //   padding: {
      //     DEFAULT: '2rem',
      //     sm: '2rem',
      //     lg: '4rem',
      //     xl: '5rem',
      //     '2xl': '7.1875rem',
      //   },
      // },
      padding: {
        'container-x': 'var(--container-px)',
        'container-y': 'var(--container-py)',
      },
      colors,
      borderColor: colors,
      backgroundColor: colors,
      gradientColorStops: colors,
      typography: {
        DEFAULT: {
          css: {
            maxWidth: null,
            color: null,
            a: {
              color: null,
              '&:hover': colorReset,
            },
            strong: colorReset,
            string: colorReset,
            h1: colorReset,
            h2: colorReset,
            h3: colorReset,
            h4: colorReset,
            h5: colorReset,
            h6: colorReset,
            pre: null,
            code: null,
            'code::after': null,
            'code::before': null,
            'pre code': null,
          },
        },
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
