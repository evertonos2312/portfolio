import './bootstrap';

import Alpine from 'alpinejs';

import '../assets/js/main.js'
import '../css/custom.css'

import.meta.glob([ '../assets/**', ]);

window.Alpine = Alpine;

Alpine.start();
