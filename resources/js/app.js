import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

var Turbolinks = require("turbolinks")
Turbolinks.start()

Alpine.plugin(focus);

Alpine.start();
