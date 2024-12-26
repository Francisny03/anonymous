<div class="card width">
    <div class="card_items space_card">
        <div class="picture_name_time_points flex space_bottom2">
            <div class="picture_name_time flex">
                <div class="profile_pic profil_photo">
                    <a href=""><img src="image/profil.png" alt=""></a>
                </div>
                <div class="username">
                    <p>Adef Khalil Oba</p>
                </div>
                <div class="username_point"></div>
                <div class="time_post username">
                    <p>4 min</p>
                </div>
            </div>
            <div class="tree_dots flex" id="tree_dots">
                <button class="tree_dotsBtn flex" onclick="">
                    <div class="tree_dots_items"></div>
                    <div class="tree_dots_items"></div>
                    <div class="tree_dots_items"></div>
                </button>

            </div>
        </div>

        <div class="card_text space_bottom2" id="card_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
        </div>

        <div class="action_button space_card flex">
            <div class="first_action">
                <button class="button_like button_action" onclick="toggleLike(this)">
                    <span class="icon"><i class="fa-regular fa-heart"></i></span>
                    <span class="count">0</span>
                </button>
                <button class="button_comment button_action">
                    <span class="icon"><i class="fa-regular fa-comment-dots"></i></span>
                    <span class="count">0</span>
                </button>
                <button class="button_share button_action">
                    <span class="icon"><i class="fa-regular fa-share-from-square"></i></span>
                    <span class="count">0</span>
                </button>
            </div>
            <div class="second_action">
                <button class="button_star button_action" onclick="toggleStar(this)">
                    <span class="icon"><i class="fa-regular fa-star"></i></span>
                    <span class="count">0</span>
                </button>
            </div>

        </div>

        <div class="card_rectangle"></div>
    </div>

</div>

<script>
/* Script JavaScript pour gérer l'affichage du texte */
function toggleText() {
    const text = document.getElementById("card_text");
    const fullText = text.dataset.fullText;
    const maxLength = 250;

    if (text.dataset.truncated === "true") {
        text.innerHTML = fullText +
            ' <button class="readBtn" onclick="toggleText()">Lire moins</button>';
        text.dataset.truncated = "false";
    } else {
        const truncatedText = fullText.substring(0, maxLength) +
            '<span id="dots">...</span>' +
            ' <button class="readBtn" onclick="toggleText()">Lire plus</button>';
        text.innerHTML = truncatedText;
        text.dataset.truncated = "true";
    }
}

/* Initialisation */
window.onload = function() {
    const text = document.getElementById("card_text");
    const maxLength = 250;
    const fullText = text.innerHTML;

    if (fullText.length > maxLength) {
        text.dataset.fullText = fullText;
        text.dataset.truncated = "true";
        const truncatedText = fullText.substring(0, maxLength) +
            '<span id="dots">...</span>' +
            ' <button class="readBtn" onclick="toggleText()">Lire plus</button>';
        text.innerHTML = truncatedText;
    }
};
</script>

<script>
/* Fonction JavaScript pour gérer le clic sur le bouton */
function toggleLike(button) {
    const countElement = button.querySelector(".count");
    const iconElement = button.querySelector(".icon i");
    let count = parseInt(countElement.textContent);

    // Basculer l'icône et le compteur
    if (iconElement.classList.contains("fa-regular")) {
        iconElement.classList.remove("fa-regular", "fa-heart");
        iconElement.classList.add("fa-solid", "fa-heart");
        count++; // Incrémenter
    } else {
        iconElement.classList.remove("fa-solid", "fa-heart");
        iconElement.classList.add("fa-regular", "fa-heart");
        count--; // Décrémenter
    }

    // Mettre à jour le texte du compteur
    countElement.textContent = count;
}
</script>

<script>
/* Fonction JavaScript pour gérer le clic sur le bouton */
function toggleStar(button) {
    const countElement = button.querySelector(".count");
    const iconElement = button.querySelector(".icon i");
    let count = parseInt(countElement.textContent);

    // Basculer l'icône et le compteur
    if (iconElement.classList.contains("fa-regular")) {
        iconElement.classList.remove("fa-regular", "fa-star");
        iconElement.classList.add("fa-solid", "fa-star");
        count++; // Incrémenter
    } else {
        iconElement.classList.remove("fa-solid", "fa-star");
        iconElement.classList.add("fa-regular", "fa-star");
        count--; // Décrémenter
    }

    // Mettre à jour le texte du compteur
    countElement.textContent = count;
}
</script>