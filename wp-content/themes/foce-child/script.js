const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("story-animation");
        }
    })
});

observer.observe(document.querySelector(".story"));