import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
    document.querySelector('html').classList.remove('dark');
} else {
    document.querySelector('html').classList.add('dark');
}

const lightSwitches = document.querySelectorAll('.light-switch');
if (lightSwitches.length > 0) {
    lightSwitches.forEach((lightSwitch, i) => {
        if (localStorage.getItem('dark-mode') === 'true') {
            // eslint-disable-next-line no-param-reassign
            lightSwitch.checked = true;
        }
        lightSwitch.addEventListener('change', () => {
            const { checked } = lightSwitch;
            lightSwitches.forEach((el, n) => {
                if (n !== i) {
                    // eslint-disable-next-line no-param-reassign
                    el.checked = checked;
                }
            });
            if (lightSwitch.checked) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('dark-mode', true);
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('dark-mode', false);
            }
        });
    });
}
