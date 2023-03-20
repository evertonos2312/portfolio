import './bootstrap';

// import '../assets';

import '../assets/js/main.js'

import.meta.glob([ '../assets/**', ]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
