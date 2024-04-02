const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const animation = entry.target.querySelector(".scroll_animation");

        if (entry.isIntersecting) {
            animation.classList.add("title_animate");
        } else {
            animation.classList.remove("title_animate");
        }
    })
});

observer.observe(document.querySelector(".site-main"));

console.log();