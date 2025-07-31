import { join } from 'path';
/** @type {import('tailwindcss').Config} */

export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    "./node_modules/flowbite/**/*.js",
    join(__dirname, './node_modules/tw-elements/dist/js/**/*.js'),
  ],
  theme: {
    extend: {
      fontFamily: {
        nunito: ['"Nunito"', 'sans-serif'],
      }
    },
  },
  plugins: [require('tw-elements/dist/plugin')],
};
