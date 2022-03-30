const newCostBtn = document.getElementById("add_cost").addEventListener("click", addNewCost)
const removeCostBtn = document.getElementById("remove_cost").addEventListener("click", removeCost)

const newStepBtn = document.getElementById("add_step").addEventListener("click", addNewStep)
const removeStepBtn = document.getElementById("remove_step").addEventListener("click", removeStep)

const newIngredientBtn = document.getElementById("add_ingredient").addEventListener("click", addNewIngredient)
const removeIngredientBtn = document.getElementById("remove_ingredient").addEventListener("click", removeIngredient)

//Spawn new cost entity 
function addNewCost() {
  var div = document.createElement('p')

  var elements = document.getElementsByClassName('single-cost')

  div.setAttribute('class', 'single-cost')
  div.setAttribute('contentEditable', 'true')
  div.setAttribute('id', 'cost_' + (elements.length + 1))
  div.innerHTML = 'enter cost value for ' + (elements.length + 1);

  document.getElementById('cost_area').appendChild(div);
}

// Remove the most recently made cost entity
function removeCost() {
  var elements = document.getElementsByClassName('single-cost')
  if (elements.length > 0) {
    document.getElementById("cost_" + elements.length).remove();
  }
}

// Add new step entity for the recipe
function addNewStep() {
  var div = document.createElement('div')

  var elements = document.getElementsByClassName('single-instruction')

  div.setAttribute('class', 'single-instruction')
  div.setAttribute('id', 'step_' + (elements.length + 1))
  div.innerHTML = '<header><p>' + 'STEP ' + (elements.length + 1) +'</p><div></div></header><p contentEditable="true" id="' + 'step_details_' + (elements.length + 1) + '">enter details here</p>';
  document.getElementById('steps_area').appendChild(div);
}

// Remove the most recently made step entity
function removeStep() {
  var elements = document.getElementsByClassName('single-instruction')
  if (elements.length > 0) {
    document.getElementById("step_" + elements.length).remove();
  }
}

// add new ingredient entity for the recipe
function addNewIngredient() {
  var div = document.createElement('p')

  var elements = document.getElementsByClassName('single-ingredient')
  div.setAttribute('class', 'single-ingredient')
  div.setAttribute('contentEditable', 'true')
  div.setAttribute('id', 'ingredient_' + (elements.length + 1))
  div.innerHTML = 'enter ingredient information for ' + (elements.length + 1);

  document.getElementById('ingredient_area').appendChild(div);
}

// Remove the most recently made ingredient entity
function removeIngredient() {
  var elements = document.getElementsByClassName('single-ingredient')
  if (elements.length > 0) {
    document.getElementById("ingredient_" + elements.length).remove();
  }
}