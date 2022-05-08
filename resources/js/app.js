import '@splidejs/splide/css';
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';


new Splide('#testimonials', {
    type: 'loop',
    pagination: false,
    arrows: false,
    autoplay: true
}).mount();

new Splide('#carousel', {
    arrows: false,
    autoplay: true
}).mount();

new Splide('#directors', {
    arrows: false,
    autoplay: true
}).mount();

new Splide('#full-carousel', {
    arrows: false,
    pagination: false,
    autoplay: true
}).mount();
