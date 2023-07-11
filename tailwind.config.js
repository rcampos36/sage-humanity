/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
				'primary-red': '#ff6d6d',
				'secondary-red': '#D62B2B',
				'primary-green': '#77D7D3',
				'secondary-green': '#4bc9c4',
				'primary-black': '#2E4049',
				'secondary-black': '#727272',
				'primary-white': '#ffffff',
				'secondary-white': '#f2f2f2',
				'primary-gray': '#f1eeec',
				'secondary-gray': '#ecf1f0',
			  },
    },
  },
  plugins: [],
};

export default config;
