/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {
      borderRadius: {
        'custom-radius': '47% 53% 61% 39% / 45% 51% 49% 55%',
        'custom-radius-2': '45% 51% 49% 55% / 47% 53% 61% 39% ',
        'custom-half': '50%',
    },
    colors: {
        'custom-color-1': 'rgb(0 0 0 / 30%)',
        'custom-color-2': 'rgb(0 0 0 / 28%)',
        'cream1': 'rgb(255, 242, 215)',
        'cream2': 'rgb(255, 224, 181)',
        'cream3': 'rgb(248, 199, 148)',
        'cream4': 'rgb(216, 174, 126)',
        'cream5': 'rgb(167, 146, 119)',
        'cream6': 'rgb(196, 223, 223)',
        'cream7':  'rgb(210, 233, 233)',
        'cream8': 'rgb(227, 244, 244)',
        'cream9': 'rgb(248, 246, 244)',
        'cream10': 'rgb(255, 245, 228)',
        'cream11': 'rgb(255, 196, 196)',
        'cream12': 'rgb(238, 105, 131)',
        'cream13': 'rgb(133, 14, 53)',
        'cream14': 'rgb(255, 182, 185)',
        'cream15': 'rgb(250, 227, 217)',
        'cream16': 'rgb(187, 222, 214)',
        'cream17': 'rgb(138, 198, 209)',
        'cream18': 'rgb(10, 151, 176)',
        'custom-3': 'rgba(255, 203, 203, 1)',
        'custom-4': 'rgb(254, 73,42)',
        'custom-5': 'rgb(58,17,10)',
        'custom-6': 'rgb(255,203,203)',

    },
    margin:{
        'custom-margin-1':'0 0 38px',
        'custom-margin-2': '0 0 44px',
    },
    zIndex:{
        'custom-z-index': '3',
    },
    width:{
        'custom-w-1':'94%',
        'custom-w-2': '80%',
    },
    fontSize:{
        'custom-font-size': '70%',
    },
    borderWidth:{
        'cstm-1': '2px'
    },
    animation:{
        'slideUp': '0.3s ease-in-out forwards',
    }
    },
  },
  plugins: [],
}

