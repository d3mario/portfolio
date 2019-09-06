/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import React from 'react';
import LightboxDisplay from './components/LightboxDisplay';
import ReactDOM from 'react-dom';
import Demo from './components/Example';

import { getSlider } from '../../node_modules/simple-slider/src/simpleslider';


let thumbnails = Array.from(document.querySelectorAll("[rel^='smallThumbnail']"));
let slideButtons = Array.from(document.querySelectorAll("[rel^='slideButton']"));
let displayImages = Array.from(document.querySelectorAll("[rel^='displayImage']"));
let moreButton = document.querySelector("[rel^='showMoreText']");
let leftSlideButton = slideButtons[0];
let rightSlideButton = slideButtons[1];
let viewProvidedServiceModalButton = document.querySelector("[rel='viewServices']");

let viewContentButton = document.querySelector("[rel='viewContent']");

viewContentButton.addEventListener("click", function(e){
    ReactDOM.render(
        <LightboxDisplay images={displayImages} isOpen="true" />,
        // <ModalDisplay />,
        // <Demo name= {displayImages[0].src}/>, 
    document.querySelector('#app')
    );
});

viewProvidedServiceModalButton.addEventListener("click", function(e){
    ReactDOM.render(
        // <ModalDisplay />,

        <Demo name= {displayImages[0].src} isOpen="true"/>, 
    document.querySelector('#app')
    );
});



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
