let observer = new IntersectionObserver(observables => {
    for(let observable of observables){
        if(observable.intersectionRatio > 0.5){
            observable.target.classList.remove("title_hidden");
        } else {
            observable.target.classList.add("title_hidden");
        }
    }
}, {
    threshold: [0.5]
});

const titles_h2 = document.querySelectorAll("h2 span");
const titles_h3 = document.querySelectorAll("h3 span");

for(let title_h2 of titles_h2) {
    title_h2.classList.add("title_hidden");
    observer.observe(title_h2)
}


