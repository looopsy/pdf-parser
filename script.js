document.addEventListener("DOMContentLoaded", function(event) {
    const firstSignContainer = document.getElementById("firstSignContainer");
    const firstClone = document.getElementById("firstClone");
    const firstSign = document.getElementById("firstSign");
    
    firstClone.onclick = function() {
        const clonedFirst = firstSign.cloneNode(true);
        firstSignContainer.appendChild(clonedFirst);
    }

    const secondSignContainer = document.getElementById("secondSignContainer");
    const secondClone = document.getElementById("secondClone");
    const secondSign = document.getElementById("secondSign");

    secondClone.onclick = function() {
        const clonedSecond = secondSign.cloneNode(true);
        secondSignContainer.appendChild(clonedSecond);
    }

    const selectElement = document.getElementById('option');
    const inputElement = document.getElementById('input-field');
    selectElement.addEventListener('change', function() {
        if (selectElement.value === '2') {
          inputElement.disabled = true;
        }
        else if(selectElement.value === '4') {
            inputElement.disabled=true;
        } else {
          inputElement.disabled = false;
        }
      });


});