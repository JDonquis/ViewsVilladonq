/**
***
	Import all functions for index.php
**
*/

import loader_screen from "../functions/loader_screen.js";

import { openModalDown,links_animation,transitionsElements }from "../functions/animations.js";

const d = document;

d.addEventListener("DOMContentLoaded", e=>{

	loader_screen(".screenShow");
	openModalDown();
	links_animation();
	transitionsElements("h1", "bottomToUp", .15)
	transitionsElements(".logo img", 'leftToRight', .4)
	transitionsElements(".text_logo", 'opacity_1', .6)
	transitionsElements(".link_to_inscribe", 'width_0', .6)
	
	// transitionsElements(".entrar-btn", 'opacity_1', .4)
	

})
