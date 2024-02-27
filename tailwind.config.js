module.exports = {
  content: require('fast-glob').sync([
      './**/*.php'
  ]),
  theme: {
    container: {
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