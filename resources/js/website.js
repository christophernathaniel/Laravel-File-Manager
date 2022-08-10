// import "./bootstrap";

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import delta from "./lib/delta.js";
import scroller from "./modules/scroller.js";

delta.render();
scroller.init();

Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.store("darkMode", {
    current: Alpine.$persist(false).as("darkMode"),
    items: [true, false],
    on() {
        if (this.current) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }

        console.log(this.current);
    },
    init: () => {
        let isDark = localStorage.getItem("darkMode");

        if (isDark == "true") {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    },
});

Alpine.store("theme", {
    current: Alpine.$persist("space").as("theme"),
    items: ["space", "ocean", "clean"],
    on() {
        if (this.current) {
            this.items.forEach((item) => {
                document.documentElement.classList.remove(item);
            });
            document.documentElement.classList.add(this.current);
        }

        console.log(this.current);
    },
    init: () => {
        let theme = localStorage.getItem("theme");

        document.documentElement.classList.add(theme.slice(1, -1));
    },
});

Alpine.store("setupModal", {
    current: Alpine.$persist(true).as("setupModal"),
    items: [true, false],
    progress: 0,
    init: () => {
        let theme = localStorage.getItem("setupModal");
    },
});

// Alpine.store("darkMode", {
//     on() {
//         this.isDark = true;
//     },

//     off() {
//         this.isDark = false;
//     },

//     toggle() {
//         this.isDark = !this.isDark;
//         Alpine.$persist(this.isDark).as("store.darkMode");
//         this.update();
//     },

//     update() {
//         if (!this.isDark) {
//             document.documentElement.classList.remove("dark");
//         }

//         if (this.isDark) {
//             document.documentElement.classList.add("dark");
//         }
//     },
// });

Alpine.start();
