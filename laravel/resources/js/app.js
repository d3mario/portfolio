
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');
import React from 'react';
import Demo from './components/Showcase';
import ReactDOM from 'react-dom';

import { getSlider } from '../../node_modules/simple-slider/src/simpleslider';
import tingle from '../../node_modules/tingle.js';

//let modal = new VanillaModal();
// instanciate new modal
// var modal = new tingle.modal({
//     footer: true,
//     stickyFooter: false,
//     closeMethods: ['overlay', 'button', 'escape'],
//     closeLabel: "Close",
//     cssClass: ['custom-class-1', 'custom-class-2'],
//     onOpen: function() {
//         console.log('modal open');
//     },
//     onClose: function() {
//         console.log('modal closed');
//     },
//     beforeClose: function() {
//         // here's goes some logic
//         // e.g. save content before closing the modal
//         return true; // close the modal
//         return false; // nothing happens
//     }
// });

// // set content
// modal.setContent('<h1>here\'s some content</h1>');

// // add a button
// modal.addFooterBtn('Button label', 'tingle-btn tingle-btn--primary', function() {
//     // here goes some logic
//     modal.close();
// });

// // add another button
// modal.addFooterBtn('Dangerous action !', 'tingle-btn tingle-btn--danger', function() {
//     // here goes some logic
//     modal.close();
// });

// // open modal
// modal.open();

// // close modal
// modal.close();
// console.log(modal);
let thumbnails = Array.from(document.querySelectorAll("[rel^='smallThumbnail']"));
let slideButtons = Array.from(document.querySelectorAll("[rel^='slideButton']"));
let moreButton = document.querySelector("[rel^='showMoreText']");
let leftSlideButton = slideButtons[0];
let rightSlideButton = slideButtons[1];

let bodyText = document.querySelector("[rel^='caseText']");
let viewContentButton = document.querySelector("[rel='viewContent']");
let viewProvidedServiceModalButton = document.querySelector("[rel='viewServices']");

viewContentButton.addEventListener("click", function(){
    ReactDOM.render(
    <Demo name= {thumbnails[0].src}/>, 
    document.querySelector('#app')
    );

    let casestudyModal = document.querySelector("[rel='caseStudyModal']");
   // casestudyModal.classList.toggle('opacity-100');
});

viewProvidedServiceModalButton.addEventListener("click", function(){
    let servicesProvidedModal = document.querySelector("[rel='servicesProvidedModal']");
    servicesProvidedModal.classList.toggle('opacity-100');
});

// let caseStudy = document.querySelector("[rel^='project-caseStudy']");
// let caseStudyText = caseStudy.innerHTML;
// let previewCaseStudy = caseStudyText.slice(0, 100);
// let remainingCaseStudy = caseStudyText.slice(100, caseStudyText.length);
//
// let holder = document.querySelector("[rel='project-caseStudy']");
// holder.innerHTML = previewCaseStudy;

let smallSlider = getSlider({
    container: document.getElementById('myslider'),
    children: document.getElementsByClassName('slides'),
    prop: 'opacity',
    unit: '',
    init: 0,
    show: 1,
    end: 0,
    delay: 3,
    paused: true
});


leftSlideButton.addEventListener("click", function(){
    smallSlider.change(smallSlider.prevIndex());
});
rightSlideButton.addEventListener("click", function(){
    smallSlider.change(smallSlider.nextIndex());
});
smallSlider.resume();

moreButton.addEventListener("click", function(e){
    e.stopPropagation();
    e.preventDefault();
    toggleText();
});



/**
 * function toggleText displays more or less information in a case study
 */
function toggleText() {

    let dots = document.querySelector("[rel^='caseStudy-dots']");
    let moreText = document.querySelector("[rel^='caseStudy-more']");
    let moreTask = document.querySelector("[rel^='caseStudy-tasks']");

    let buttonText = document.querySelector("[rel^='showMoreText']");

    if(dots.style.display === "none"){
        dots.style.display = "inline";
        let spanElement = document.createElement("SPAN");
        let spanText = document.createTextNode("More");
        spanElement.appendChild(spanText);
        buttonText.innerHTML = "View ";
        spanElement.className ="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full";
        buttonText.appendChild(spanElement);
        moreTask.style.display = "none";
        moreText.style.display = "none";
    }else{
        dots.style.display = "none";
        let spanElement = document.createElement("SPAN");
        let spanText = document.createTextNode("Less");
        spanElement.appendChild(spanText);

        buttonText.innerHTML = "View";
        spanElement.className ="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full";
        buttonText.appendChild(spanElement);
        moreText.style.display = "inline";
        moreTask.style.display = "inline";
    }

}

let size = thumbnails.length;

if(size <= 1){
    slideButtons[0].classList.add("hide");
    slideButtons[1].classList.add("hide");
}



let largeSlider = getSlider({
    container: document.getElementById('my-slider'),
    children: document.getElementsByClassName('fader'),
    prop: 'opacity',
    unit: '',
    init: 0,
    show: 1,
    end: 0,
    delay: 3,
});



// leftSlideButton.addEventListener("click", fadeSmallDisplayItem);
// rightSlideButton.addEventListener("click", fadeSmallDisplayItem);




