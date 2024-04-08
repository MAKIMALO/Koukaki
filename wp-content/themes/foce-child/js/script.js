const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("title_animation");
            return;
        }

        entry.target.classList.remove("title_animation");
    });
});

const titles = document.querySelectorAll("h2 span");

titles.forEach((title) => {
    observer.observe(title);
});