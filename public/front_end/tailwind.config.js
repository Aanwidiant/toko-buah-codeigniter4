/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../../app/Views/**/*.php", "./src/js/*.js"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#4CAF50",
        secondry: "#FEFAF6",
        thrid: "#f4f4f5", // zink-100
        dark: "#0f172a", // slate-900
        darkblue: "#2C3E50",
        midnightblue: "#34495E",
        turquoise: "#1ABC9C",
        lightgrey: "#ECF0F1",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
