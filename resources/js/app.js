import "./bootstrap";
function flipCard(cardId) {
    const card = document.getElementById(cardId);
    card.classList.toggle("flipped");
}
