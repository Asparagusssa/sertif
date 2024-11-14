/** @type {import('tailwindcss/types').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'ibm-plex-mono': ['"IBM Plex Mono"', 'serif'],
      },
      fontSize: {
        'xs': '0.75rem',
      },
    },
  },
  plugins: [],
}
