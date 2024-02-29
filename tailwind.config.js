module.exports = {
  content: require('fast-glob').sync([
      './**/*.php'
  ]),
  theme: {
    container: {
      screens: {
        sm: '600px',
        md: '769px',
        lg: '1023px',
        xl: '1240px',
        '2xl': '1240px'
      },
    },
    extend: {
      fontFamily: {
        inter: ["Inter", "sans-serif"],
        halveticaLight: ["halveticaLight", "sans-serif"],
        halveticaBold: ["halveticaBold", "sans-serif"],
      },
      colors: { 
        'darkBlue': '#414059',
        'red': '#D93B58',
        'gray': '#F2F2F2'
    },
    },
  },
  plugins: [],
}