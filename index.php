<?php
include('include/header.php');
?>

<div id="tabs" class="tab_button">
    <button class="tablink" onclick="openPage('feed', this, '3px solid #FFCC00')" id="defaultOpen">Mon fil
        d'actualité</button>
    <button class="tablink" onclick="openPage('following', this, '3px solid #FFCC00')">Mes abonnements</button>

</div>


<?php
include('include/feed.php');
?>

<?php
include('include/following.php');
?>


<script>
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



// Initialize the last scroll position variable
let lastScrollPosition = 0;

// Get the navbar and tabs elements
const navbar = document.getElementById("head");
const tabs = document.getElementById("tabs");

// Add a scroll event listener
window.addEventListener("scroll", () => {
    const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollPosition < lastScrollPosition) {
        // User is scrolling up, show the navbar and tabs
        navbar.style.transform = "translateY(0)";
        tabs.style.transform = "translateY(0)";
    } else {
        // User is scrolling down, hide the navbar and tabs
        navbar.style.transform = "translateY(-100%)";
        tabs.style.transform = "translateY(-100%)";
    }

    // Update the last scroll position
    lastScrollPosition = currentScrollPosition;
});
</script>

<?php
include('include/footer.php');
?>