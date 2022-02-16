const plugin = require('tailwindcss/plugin');
const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

const colors = {
  // deepSpaceRodeo: '#332878',
  primary: '#0064b2',
  secondary: '#cdce00',
  lighthouse: '#f4f4f4',
  basaltGrey: '#999999',
  cerebralGrey: '#cccccc',
  carbon: '#333333',
  steam: '#dddddd',
  squant: '#666666',
  gravelFint: '#bbbbbb',
  blackOut: '#222222',
  dugong: '#707070',
  cultured: '#f8f8f8',
  brightGray: '#eeeeee',
  davyGrey: '#555555',
  jet: '#343434',
  raisinBlack: '#212121',
  seaSerpent: '#58bbd5',
  darkSilver: '#6f6f6f',
  aero: '#6bc5db',
  celticBlue: '#2c72b8',
};

module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1300px',
    },
    extend: {
      padding: {
        'container-x': 'var(--container-px)',
        'container-y': 'var(--container-py)',
      },
      margin: {
        full: 'calc(-1 * var(--container-px))',
      },
      container: {
        padding: {
          DEFAULT: 'var(--container-px)',
        },
      },
      maxWidth: {
        desktop: '1920px',
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
        mj: ['"Nanum Myeongjo"', ...defaultTheme.fontFamily.sans],
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
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    plugin(function ({ addComponents }) {
      addComponents({
        '.position-center': {
          position: 'absolute',
          top: '50%',
          left: '50%',
          transform: 'translate(-50%, -50%)',
        },
      });
    }),
  ],
};
