module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'custom-green': 'rgb(6, 113, 59)',
        },
        backgroundColor: {
            'bg-custom-green': 'rgb(6, 113, 59)',
        },
        textColor:{
            'text-custom-green': 'rgb(6, 113, 59)',
        },
        borderColor:{
            'border-custom-green' : 'rgb(6, 113, 59)',
        },
        height: {
            'h-100' : '500px',
        },
    },
  },
  plugins: [],
}
