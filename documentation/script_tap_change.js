// Tap - Trigger



// [ADD THIS TO THE SPARK AR STUDIO PROJECT]
// - A plane called "plane0"



// [IGNORE]

// Required modules
const Scene = require('Scene');
const TouchGestures = require('TouchGestures');

// Locate the plane in the Scene
const plane = Scene.root.find('plane0');

// [IGNORE]



// [EDIT]
TouchGestures.onTap(plane).subscribe(function(gesture) {
  
	// [EDIT HERE]
	// Call the action function here
	// [PASTE HERE]
	Changematerial();

});






// Toggle material - Action



// [ADD THIS TO THE SPARK AR STUDIO PROJECT]
// - A material called "defaultMaterial0"
// - A material called "defaultMaterial1"



// [IGNORE]

// Required modules
const Materials = require('Materials');

// Locate the materials in the Assets
const material = Materials.get('defaultMaterial0');
const material2 = Materials.get('defaultMaterial1');

// [IGNORE]



// [CALL FUNCTION]
// How to call this function:
// Changematerial(); [COPY THIS]

function Changematerial() {
  // Switch materials depending on which one is currently applied to the plane
  if (plane.materialIdentifier === material.identifier) {
    plane.material = material2;
  } else {
    plane.material = material;
  }
}
