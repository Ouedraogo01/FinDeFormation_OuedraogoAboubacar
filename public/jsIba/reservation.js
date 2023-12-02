document.addEventListener("DOMContentLoaded", function () {
    const reservationButtons = document.querySelectorAll(".reservation-button");
    const reservationForm = document.getElementById("reservationForm");
    const overlay = document.createElement("div");
    overlay.className = "overlay";

    function showModal(chambreId) {
        reservationForm.style.display = "block";
        document.body.appendChild(overlay);
        overlay.style.display = "block";
    }

    function hideModal() {
        reservationForm.style.display = "none";
        overlay.style.display = "none";
    }

    reservationButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const chambreId = this.getAttribute("data-chambre-id");
            showModal(chambreId);
        });
    });

    overlay.addEventListener("click", hideModal);
});
