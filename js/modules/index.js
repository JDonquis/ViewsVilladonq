/**
***
	Import all functions for index.php
**
*/

import loader_screen from "../functions/loader_screen.js";

import { openModalDown,links_animation,transitionsElements }from "../functions/animations.js";
console.log('jsjsjsjss')

const d = document;

d.addEventListener("DOMContentLoaded", e=>{

	loader_screen(".screenShow");
	openModalDown();
	links_animation();
	transitionsElements("h1", "bottomToUp", .15)
	transitionsElements(".logo img", 'leftToRight', .4)

})
