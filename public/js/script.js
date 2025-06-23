function scrollToTopFunction() {
    document.getElementById("top").scrollIntoView({ behavior: "smooth" });
}

// Example of showing the button when scrolling down (optional)
window.onscroll = function () {
    var scrollToTopButton = document.getElementById("scrollToTop");
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
};
