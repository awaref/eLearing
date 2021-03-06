// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}


function myAccFunc() {
    var x = document.getElementById('demoAcc');
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-black w3-hover-black";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-black w3-hover-black", "");
    }
}

function myAccordionFunction(id) {
    var x = document.getElementById(id);
    if(id != 0){
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace("w3-black", "w3-black w3-opacity");
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace("w3-black w3-opacity", "w3-black");
        }
    }else{
        if (x.className.indexOf("w3-hide") == -1) {
            x.className += " w3-hide";
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace("w3-black w3-opacity", "w3-black");

        } else {
            x.className = x.className.replace(" w3-hide", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace("w3-black", "w3-black w3-opacity");

        }
    }

}
