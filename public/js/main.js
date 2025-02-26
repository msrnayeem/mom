
let mm = gsap.matchMedia();
mm.add("(max-width: 767px)", () => {
    gsap.from(".hero h1", {
        duration: 1.5,
        y: -30,
        opacity: 0,
        ease: "power3.out"
    });
    gsap.from(".hero p", {
        duration: 1.5,
        y: 30,
        opacity: 0,
        ease: "power3.out",
        delay: 0.5
    });
    gsap.from("#featured-courses .card", {
        duration: 1,
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 1
    });
    gsap.from("#teachers .card", {
        duration: 1,
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 1.3
    });
    gsap.from("#why-choose-us .col", {
        duration: 1,
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 1.8
    });
    gsap.from("#donation .card", {
        duration: 1,
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 2.3
    });
    gsap.from("#events .card", {
        duration: 1,
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 2.8
    });
    gsap.from("#testimonials .carousel-item", {
        duration: 0.5,
        opacity: 0,
        y: 30,
        stagger: 0.3,
        delay: 1.5
    });
    gsap.from("#faq .accordion-item", {
        duration: 1,
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 3.8
    });
    gsap.from("#about h2", {
        duration: 1,
        x: -30,
        opacity: 0,
        delay: 4.3
    });
    gsap.from("#contact h2", {
        duration: 1,
        x: 30,
        opacity: 0,
        delay: 4.8
    });
});
mm.add("(min-width: 768px)", () => {
    gsap.from(".hero h1", {
        duration: 1.5,
        y: -50,
        opacity: 0,
        ease: "power3.out"
    });
    gsap.from(".hero p", {
        duration: 1.5,
        y: 50,
        opacity: 0,
        ease: "power3.out",
        delay: 0.5
    });
    gsap.from("#featured-courses .card", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.2,
        delay: 1
    });
    gsap.from("#teachers .card", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.2,
        delay: 1.3
    });
    gsap.from("#why-choose-us .col", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.2,
        delay: 1.8
    });
    gsap.from("#donation .card", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.2,
        delay: 2.3
    });
    gsap.from("#events .card", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.2,
        delay: 2.8
    });
    gsap.from("#testimonials .carousel-item", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.3,
        delay: 3.3
    });
    gsap.from("#faq .accordion-item", {
        duration: 1,
        opacity: 0,
        y: 50,
        stagger: 0.2,
        delay: 3.8
    });
    gsap.from("#about h2", {
        duration: 1,
        x: -50,
        opacity: 0,
        delay: 4.3
    });
    gsap.from("#contact h2", {
        duration: 1,
        x: 50,
        opacity: 0,
        delay: 4.8
    });
});
