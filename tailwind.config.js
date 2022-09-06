/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js"
  ],
  theme: {
    extend: {
        colors: {
            'brand-red': '#AD1616',
            'brand-cream': '#FFF9D9',
            'brand-green': '#8fad16',
            'brand-blue': '#1652ad',
            'brand-dark-gray': '#303030',

        },
        textColor: {
            'brand-red': '#AD1616',
            'brand-cream': '#FFF9D9',
            'brand-green': '#8fad16',
            'brand-blue': '#1652ad',
            'brand-dark-gray': '#303030',
        },
        borderColor: {
            'brand-red': '#AD1616',
            'brand-cream': '#FFF9D9',
            'brand-green': '#8fad16',
            'brand-blue': '#1652ad',
            'brand-dark-gray': '#303030',
        },
        backgroundColor:{
            'brand-red': '#AD1616',
            'brand-cream': '#FFF9D9',
            'brand-green': '#8fad16',
            'brand-blue': '#1652ad',
            'brand-dark-gray': '#303030',
        },
        
    },
  },
  plugins: [],
}
