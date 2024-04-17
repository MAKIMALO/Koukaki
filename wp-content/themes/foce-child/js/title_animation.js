console.log("le fichier title_animation.js fonctionne")

// animation des titres 1
const observer1 = new IntersectionObserver(entries => {
    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("title_animate_1");
        } else {
            entry.target.classList.remove("title_animate_1");
        }

    });
});

const sections = document.querySelectorAll(".anim_title_1");

sections.forEach(section => {
    observer1.observe(section);
});


// animation des titres 2
const observer2 = new IntersectionObserver(entries => {
    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("title_animate_2");
        } else {
            entry.target.classList.remove("title_animate_2");
        }

    });
});
const sections2 = document.querySelectorAll(".anim_title_2");

sections2.forEach(section => {
    observer2.observe(section);
});