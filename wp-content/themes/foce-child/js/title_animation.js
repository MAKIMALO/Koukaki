console.log("le fichier script.js fonctionne")

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("title_animate");
        } else {
            entry.target.classList.remove("title_animate");
        }

    });
});

const titles = document.querySelectorAll(".title");

titles.forEach(title => {
    observer.observe(title);
});
