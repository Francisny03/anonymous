<?php
include('include/login_header.php');
?>

<form id="onboardingStep" action="index.php">
    <div class="connect_items phone_size flex width">
        <div class="step_onboarding">
            <h2>Généralement</h2>
            <br>
            <h3>On utilise un texte en faux (le texte ne veut rien dire, il a été modifié), le Lorem.</h3>
            <br>
            <br>
        </div>
        <div class="step_onboarding">
            <h2>Texte 2</h2>
            <br>
            <h3>On utilise un texte en faux (le texte ne veut rien dire, il a été modifié), le Lorem.</h3>
            <br>
            <br>
        </div>
        <div class="step_onboarding">
            <h2>Généralement</h2>
            <br>
            <h3>On utilise un texte en faux (le texte ne veut rien dire, il a été modifié), le Lorem.</h3>
            <br>
            <br>
        </div>

        <div class="inscription_box">
            <button class="onboard_prev_next" type="button" id="prevBtn" onclick="nextPrev(-1)">
                <img src="image/left_arrow.svg" alt="Flèche gauche">
            </button>
            <button class="onboard_prev_next" type="button" id="nextBtn" onclick="nextPrev(1)">
                Suivant <img src="image/right_arrow.svg" alt="Flèche droite">
            </button>
        </div>

        <div>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </div>

    </div>
</form>




<?php
include('include/footer.php');
?>