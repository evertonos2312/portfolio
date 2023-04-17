import '../bootstrap/css/ui.css'
import '../bootstrap/css/bootstrap.css'
import '../bootstrap/css/responsive.css'
import '../bootstrap/fonts/material-icon/css/round.css'

import '../bootstrap/js/bootstrap.bundle.min.js'
import '../bootstrap/js/bootstrap.min.js'
import '../bootstrap/js/jquery-3.5.0.min.js'
import '../bootstrap/js/script.js'

import '../assets/js/main.js'
import '../css/custom.css'

import './bootstrap';


import Alpine from 'alpinejs';



import.meta.glob([ '../assets/**', ]);
import.meta.glob([ '../bootstrap/images/**', ]);

window.Alpine = Alpine;

Alpine.start();
