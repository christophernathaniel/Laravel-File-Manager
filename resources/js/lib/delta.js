/*
 * Delta - Scroll Management
 * Domain: Christophernathaniel.co.uk
 * MIT License Copyright (c) 2022 Christopher Nathaniel
 *
 * Usage ----------------------------------------------
 * (1) Retrieve the State Values: state['theme'] = (stateManagement.retrieve('theme')) ? stateManagement.retrieve('theme') : state.theme;
 * (2) Store the State Values:  stateManagement.store('theme', state.theme)
 */

import lib from "./lib";

const delta = {
    state: {},
    store: (name, state) => {
        //localStorage.setItem(name, JSON.stringify(state))
    },
    render: () => {
        let delta = 0;

        console.log("delta");

        lib.qsa(".parent-frame").forEach((elem) => {
            elem.addEventListener("scroll", () => {
                let scrollPos = lib.qs(".parent-frame").scrollTop;
                let windowHeight = window.innerHeight;

                let sectionHeight = windowHeight / 10;
                let i = 0;

                while (i < 100) {
                    if (scrollPos < sectionHeight * i) {
                        if (document.body.classList.contains("dl--" + i)) {
                            document.body.classList.remove("dl--" + i);
                        }
                    }

                    if (scrollPos > sectionHeight * i) {
                        delta = i;

                        if (!document.body.classList.contains("dl--" + i)) {
                            document.body.classList.add("dl--" + i);
                        }

                        //   console.log(i);
                        //   console.log(scrollPos);
                    }
                    i++;
                }
            });
        });
    },
};

export { delta as default };
