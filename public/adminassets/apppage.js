

/**##############add image holder##################**/
//add image holder
function addImageHolder() {
    var jeffNewImageHolder = document.getElementById("imageUploadElementJefflilcot");
    var jeffNewImageHolderClone = jeffNewImageHolder.cloneNode(true);

    //remove the id attribute from the tr element.
    jeffNewImageHolderClone.removeAttribute("id");

    //function
    updateElementsAppend(jeffNewImageHolderClone);

}

function updateElementsAppend(jeffNewImageHolderClone) {

    var elementItemId = '';

    //function
    var specificElementObject = inputByName("idsHolder");
    var dynamicElementIds = specificElementObject.value;
    //alert(dynamicRulesIdInputSpecificValue);

    elementItemId = getUniqueIdValue(dynamicElementIds);

    //update the value of the dyanamicRulesIdInput
    //function
    updateReplaceElementValue(specificElementObject, 'update', elementItemId);

      //remove hidden attribute
//      jeffNewImageHolderClone.style.display = "inline";
      jeffNewImageHolderClone.removeAttribute("style");
//      jeffNewImageHolderClone.style.ma = "inline";
//      jeffNewImageHolderClone.setAttribute("style");
    //set the attribute ruleItemId and Id to tr
//    jeffNewImageHolderClone.setAttribute("ruleItemId", elementItemId);
//    jeffNewImageHolderClone.setAttribute("id", elementItemId);

    //set the names of all the select and input values with the value of ruleItemId
    //function
    setElementInputNames(jeffNewImageHolderClone, elementItemId);

    //append to the main table
    document.getElementById("imageUploadContainerJefflilcot").appendChild(jeffNewImageHolderClone);
}

//dynacmic
function inputByName(inputName) {
    var dynamicRulesIdInputValues = document.getElementsByName(inputName);
    return dynamicRulesIdInputValues[0];
}

//dynamic
function getUniqueIdValue(inputValsString) {

    var uniquIdValCust = 1;

    if (inputValsString == "") {

        //set the value to 1 if input is empty ie no rule items exist.
        //function
        uniquIdValCust = randomIntInclusive("", "");

    } else {
        //generate a random identifier and confirm that it does not exist among the values of the input
        //function
        var itemRandId = randomIntInclusive("", "");
        //elementItemId = itemRandId;
        //function
        var inputValuesArrayed = stringToArray(inputValsString, ",");

        //ensure the random value does not exist.
        //function
        while (arrayOps(inputValuesArrayed, "check", itemRandId) == true) {
            //function
            itemRandId = randomIntInclusive("", "");
        }

        uniquIdValCust = itemRandId;

    }
    return uniquIdValCust;
}

//dynamic
function updateReplaceElementValue(elementObject, alOpType, alValue) {
    /**updates or replaces the value of an element**/
    //alOpType = replace/update

    if (alOpType == "update") {

        //update with "," separator
        var inputVal = elementObject.value;
        if (inputVal == "") {
            //if empty
            elementObject.value = alValue;
        } else {
            elementObject.value = inputVal + "," + alValue;
        }

    }

    if (alOpType == "replace") {
        elementObject.value = alValue;
    }


}

//dynamic
function randomIntInclusive(min, max) {
    //returns a random integer min and max included
    //var min,max;
    if (min == "") {
        min = 1;
    }

    if (max == "") {
        max = 1000000;
    }
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

//dynamic
function stringToArray(custString, custSeparator) {
    //converts a string to an array object
    return custString.split(custSeparator);
}

//dynamic
function arrayToString(custArray, custSeparator) {
    //converts array to string
    return custArray.join(custSeparator);
}

//dynamic
function arrayOps(custArray, op, itemNeedle) {
    //check,remove item from an array
    //op = check,remove
    var opstatus = false;
    for (i in custArray) {

        //if check
        if (op == "check") {
            //confirm if item exists
            if (custArray[i] == itemNeedle) {
                opstatus = true;
            }
        }

        //if remove
        if (op == "remove") {
            //remove item if exists from the array 
            if (custArray[i] == itemNeedle) {
                custArray.splice(i, 1);
            }
        }

    }

    //return operations
    //if check
    if (op == "check") {
        //return true/false
        return opstatus;
    }

    //if remove
    if (op == "remove") {
        //return the newly formed array
        return custArray;
    }

}


function setElementInputNames(custParentElement, elementItemId) {
    //sets the names of all children input elements

    /**get the children
     get the attribute ie setiddynamically="true"
     if true increment a counter and set the name of the input element**/

//    console.log(custParentElement.childNodes);
    var children = custParentElement.childNodes;

    for (var i = 0; i < children.length; i++) {
        if (children[i].className == "jefflilcot-image-holder") {
//          console.log(children[i]);
//          var nextChild = children[i].childNodes[1];
//          console.log(nextChild);
            var inputChild = children[i].childNodes[1].childNodes[7];
            console.log(inputChild);
            inputChild.setAttribute("name", "file_" + elementItemId);
//          for (var i = 0; i < nextChild.length; i++) {
//              
//          }
        }
        // do something with each child as children[i]
        // NOTE: List is live, Adding or removing children will change the list
    }
    //var kids = custParentElement.children;
//    var kidsCounter = 0;
//
//    for (var i = 0; i < kids.length; i++) {
//
//        var kidsChildren = kids[i].children;
//
//        for (var j = 0; j < kidsChildren.length; j++) {
//
//            if (kidsChildren[j].getAttribute("setiddynamically") == 'true') {
//                //increment the counter
//                kidsCounter += 1;
//
//                //set the name,id of the input element
//                //function
//                elementSetRuleInputNamesIds(kidsChildren[j], custParentId, kidsCounter);
//
//            }
//        }
//
//
//    }

    //use the parent id and a random id to insert names
    //update the attributes of the conditional rules
    //function
    //conditionElementRuleNamesId(custParentElement)

}