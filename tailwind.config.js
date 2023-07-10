/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}",
    './donor/**/*.{html,js}',
    './hospital/**/*.{html,js}'],

  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
    },
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif']
      },
      colors: {
        almostWhite: "#F9F4f5",
        almostGray: "#D0CCD0",
        lightBlue: "#235789",
        almostYellow: "#ADEFD1FF",
        darkBlue: "#00203FFF",
        overlay: "hsla(0, 0%, 0%, 0.3)",
      },
    },
  },
  plugins: [],
};
