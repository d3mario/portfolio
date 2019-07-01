
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { getSlider } from '../../node_modules/simple-slider/src/simpleslider';

    let thumbnails = Array.from(document.querySelectorAll("[rel^='smallThumbnail']"));
    let slideButtons = Array.from(document.querySelectorAll("[rel^='slideButton']"));
    let leftSlideButton = slideButtons[0];
    let rightSlideButton = slideButtons[1];


    let size = thumbnails.length;

    if(size <= 1){
        slideButtons[0].classList.add("hide");
        slideButtons[1].classList.add("hide");
    }
function updateCurrentIndex() {
        console.log(x.currentIndex());
}
let slider = getSlider({
    container: document.getElementById('myslider'),
    children: document.getElementsByClassName('slides'),
    prop: 'opacity',
    unit: '',
    init: 0,
    show: 1,
    end: 0,
    delay: 3,
});



// leftSlideButton.addEventListener("click", fadeSmallDisplayItem);
// rightSlideButton.addEventListener("click", fadeSmallDisplayItem);

leftSlideButton.addEventListener("click", function(){
    slider.change(slider.prevIndex());
});
rightSlideButton.addEventListener("click", function(){
    slider.change(slider.nextIndex());
});
slider.pause();
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

