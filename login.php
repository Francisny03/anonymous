<?php
include('include/login_header.php');
?>

<form class="loginForm flex" id="loginStep" action="index.php" method="POST">
    <div class="login_items connect_items flex">
        <div class="login_items_all flex">
            <div class="step_login flex">
                <h2>Se connecter</h2>
                <div class="phone_number flex">
                    <input id="phone_number" name="phone_number" type="number" placeholder=" " required>
                    <label for="phone_number">Numéro de téléphone</label>
                </div>
                <div class="terms_condition">
                    <p>En cliquant sur connecter, vous acceptez nos <span><a href="terms.php">termes et
                                conditions</a></span>
                    </p>
                </div>
            </div>
            <div class="step_login flex" style="display:none;">
                <h2>Se connecter</h2>
                <div class="otp_container">
                    <h4>Tapez le code reçu par SMS</h4>
                    <div class="otp_input">
                        <input type="number" maxlength="1" />
                        <input type="number" maxlength="1" />
                        <input type="number" maxlength="1" />
                        <input type="number" maxlength="1" />
                    </div>
                    <div class="terms_condition">
                        <button><span>Renvoyer le code</span></button>
                    </div>
                </div>

            </div>

            <div class="loginBtn flex">
                <button class="login_button onboard_prev_next" type="button" id="continueBtn"
                    onclick="continueSubBtn(1)">
                    Vérifier le numéro
                </button>
            </div>

            <div>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </div>
        <br>
        <br>
        <br>

    </div>
</form>

<script>
var currentTabs = 0;
showTabs(currentTabs);

function showTabs(n) {
    var x = document.getElementsByClassName("step_login");
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[n].style.display = "flex";

    document.getElementById("continueBtn").innerHTML = (n == x.length - 1) ? "Continuer" : "Vérifier le numéro";
    fixStepIndicator(n);
}

function continueSubBtn(n) {
    var x = document.getElementsByClassName("step_login");
    if (!validateForm()) return false;
    x[currentTabs].style.display = "none";
    currentTabs += n;
    if (currentTabs >= x.length) {
        document.getElementById("loginStep").submit();
        return false;
    }
    showTabs(currentTabs);
}

function validateForm() {
    var x = document.getElementsByClassName("step_login");
    var y = x[currentTabs].getElementsByTagName("input");
    var valid = true;

    // for (var i = 0; i < y.length; i++) {
    //     if (y[i].value.trim() == "") {
    //         y[i].classList.add("invalid");
    //         valid = false;
    //     } else {
    //         y[i].classList.remove("invalid");
    //     }
    // }
    if (valid) {
        var steps = document.getElementsByClassName("step");
        steps[currentTabs].classList.add("finish");
    }
    return valid;
}

function fixStepIndicator(n) {
    var x = document.getElementsByClassName("step");
    for (var i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}



// OTP Case
const otpInputs = document.querySelectorAll(".otp_input input");

otpInputs.forEach((input, index) => {
    input.addEventListener("input", (e) => {
        if (e.target.value.length === 1 && index < otpInputs.length - 1) {
            otpInputs[index + 1].focus();
        } else if (e.target.value.length === 0 && index > 0) {
            otpInputs[index - 1].focus();
        }
    });
});
</script>