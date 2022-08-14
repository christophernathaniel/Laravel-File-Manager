/*
 * Lib
 * Domain: Christophernathaniel.co.uk
 * MIT License Copyright (c) 2022 Christopher Nathaniel
 *
 * Usage ----------------------------------------------
 * Initialise Scroller with: scroller.init(state);
 */

import lib from "../lib/lib.js";

const scroller = {
    intersectionCallback: (entries) => {
        entries.forEach((entry) => {
            //let boundingRect = (window.scrollY + entry.target.getBoundingClientRect().top);
            entry.target.classList.add("js-intersection");

            if (entry.isIntersecting) {
                entry.target.classList.add("is-intersecting");
                entry.target.classList.add("has-intersected");

                lib.qs(".parent-frame").addEventListener(
                    "scroll",
                    scroller.render.bind(null, entry.target)
                );
            } else {
                entry.target.classList.remove("is-intersecting");
            }
        });
    },
    render: (element = null) => {
        if (!element) {
            element = lib.qsa(".can-intersect");
        }

        if (Array.isArray(element)) {
            element.forEach((el) => {
                effect(el);
            });
        } else {
            effect(element);
        }

        function effect(element) {
            let parallax = element.querySelectorAll(".can-parallax");
            let boundingRect =
                window.scrollY + element.getBoundingClientRect().top;

            if (parallax) {
                parallax.forEach((elem) => {
                    let scrollCalc = window.scrollY - boundingRect;

                    if (elem.classList.contains("parallax-one")) {
                        elem.style.transform = `translateY(${
                            scrollCalc * 1.4
                        }px)`;
                    }

                    if (elem.classList.contains("parallax-two")) {
                        elem.style.transform = `translateY(${
                            scrollCalc * 0.4
                        }px)`;
                    }

                    if (elem.classList.contains("parallax-three")) {
                        elem.style.transform = `translateY(${
                            scrollCalc * -0.3
                        }px) translateX(-50%)`;
                    }

                    if (elem.classList.contains("parallax-four")) {
                        elem.style.transform = `translateY(${
                            scrollCalc * -1.2
                        }px) translateX(-50%)`;
                    }

                    if (elem.classList.contains("parallax-five")) {
                        elem.style.transform = `translateY(${
                            scrollCalc * -0.7
                        }px) translateX(-50%)`;
                    }

                    if (elem.classList.contains("parallax-six")) {
                        elem.style.transform = `translateX(${
                            scrollCalc * 4
                        }px) translateX(-50%)`;
                    }

                    if (elem.classList.contains("parallax-seven")) {
                        if (scrollCalc * -0.09 > 2) {
                            elem.style.transform = `scaleX(${
                                scrollCalc * -0.09
                            }) `;
                            elem.classList.remove("can-animate");
                        }

                        if (scrollCalc * -0.09 < 2) {
                            elem.classList.add("can-animate");
                        }
                    }
                });
            }
        }
    },
    init: (state) => {
        lib.qsa(".can-intersect").forEach((elem) => {
            console.log(elem.closest(".parent-frame"));
            let options = {
                root: elem.closest(".parent-frame"),
                rootMargin: "0px 0px 0px 0px",
                threshold: 0,
            };

            let observer = new IntersectionObserver(
                scroller.intersectionCallback,
                options
            );

            //if(state.eco.current == 'disabled') {
            observer.observe(elem);
            // } else {
            //     observer.unobserve(elem);
            //     observer.disconnect();
            // }
        });
    },
};

export { scroller as default };
