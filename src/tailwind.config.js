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
  gravelFint: '#bbbbbb',
  blackOut: '#222222',
  deepSpaceRodeo: '#332878',
  dugong: '#707070',
  cultured: '#f8f8f8',
  brightGray: '#eeeeee',
  davyGrey: '#555555',
  jet: '#343434',
  raisinBlack: '#212121',
  seaSerpent: '#58bbd5',
  darkSilver: '#6f6f6f',
  aero: '#6bc5db',
};

module.exports = {
  mode: 'jit',
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        xxl: '1536px',
        desktop: '1919px',
      },
      padding: {
        'container-x': 'var(--container_px)',
        'container-y': 'var(--container_py)',
      },
      margin: {
        full: 'calc(-1 * var(--container_px))',
      },
      container: {
        padding: {
          DEFAULT: 'var(--container_px)',
        },
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
        sans: ['"Noto Sans KR"', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {
      filter: ['hover', 'focus'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
