console.log("le fichier fadein_animation.js fonctionne")

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

const sections1 = document.querySelectorAll(".anim_title_1");

sections1.forEach(section => {
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

// animation des sections
const observer3 = new IntersectionObserver(entries => {
    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("article_animate");
        }

    });
}, {
    threshold: 0.2
});

const sections3 = document.querySelectorAll(".anim_article");

sections3.forEach(section => {
    observer3.observe(section);
});