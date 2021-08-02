/*
    Author: Christopher Robin Chase
*/
`use strict`;

// Open DOM Element
$(() => {

});

/* Typed*/

var typed_options = {
    strings: ["Back-end Developer", "Software Developer", "Laravel Developer"],
    typeSpeed: 100,
    fadeOut: true,
    cursorChar: '',
    shuffle: true,
    loop: true
};

var typed = new Typed('#typed-pos', typed_options);





/* ScrollMagic */


// ScrollMagic Controller

var controller = new ScrollMagic.Controller();

// Reveal 1
new ScrollMagic.Scene({
    triggerElement: "#trigger1",
    triggerHook: 0.6, 
    duration: "80%",
    offset: 50 
})
.setClassToggle("#reveal1", "visible")
.addTo(controller);

// Reveal 2
new ScrollMagic.Scene({
    triggerElement: "#trigger2",
    triggerHook: 0.3, 
    duration: "150%",
    offset: 0 
})
.setClassToggle("#reveal2", "visible") 
//.addIndicators()
.addTo(controller);

//controller.addScene();

/* Custom Functions */