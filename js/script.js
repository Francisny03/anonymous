// Form for Onboarding
var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    var x = document.getElementsByClassName("step_onboarding");
    x[n].style.display = "block";

    // Affichage des boutons précédent et suivant
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = 'Continuer <img src="image/right_arrow.svg" alt="Flèche droite">';
        document.getElementById("nextBtn").setAttribute("onclick", "redirectToLogin()");
    } else {
        document.getElementById("nextBtn").innerHTML = 'Suivant <img src="image/right_arrow.svg" alt="Flèche droite">';
        document.getElementById("nextBtn").setAttribute("onclick", "nextPrev(1)");
    }

    fixStepIndicator(n);
}


function nextPrev(n) {
    var x = document.getElementsByClassName("step_onboarding");
    x[currentTab].style.display = "none";
    currentTab += n;

    if (currentTab >= x.length) return false;

    showTab(currentTab);
}

function redirectToLogin() {
    window.location.href = "login.php";
}

function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}


// tabs function
function openPage(pageName, elmnt, borderBottom) {
    // Hide all elements with class="tabcontent" by default
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the border-bottom of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.borderBottom = "none";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific border-bottom to the button used to open the tab content
    elmnt.style.borderBottom = borderBottom;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
