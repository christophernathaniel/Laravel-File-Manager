/*
 * Lib
 * Domain: Christophernathaniel.co.uk
 * MIT License Copyright (c) 2022 Christopher Nathaniel
 *
 * Usage ----------------------------------------------
 * (1) Query Selector All: qsa('.classname').forEach()
 * (2) Query Selector: sq('.classname').classList.add('helloworld')
 * (3) Body Selector: bod.classList.add('helloworld')
 * (4) ID Selector: id('id').classList.add('helloworld')
 */

const lib = {
    qsa: (name, loc = document) => {
        return [...loc.querySelectorAll(name)];
    },
    qs: (name, loc = document) => {
        return loc.querySelector(name);
    },
    bod: () => {
        return lib.qs("body");
    },
    id: (name) => {
        return document.getElementById(name);
    },
    path: (name) => {
        if (name) {
            return window.location.pathname == name ? true : false;
        }

        return window.location.pathname;
    },
};

export { lib as default };
