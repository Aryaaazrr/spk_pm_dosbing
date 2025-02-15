import gsap from "gsap";

// DOM elements
const DOM = {
    frame: document.querySelector(".frame"),
    overlayPath: document.querySelector(".overlay__path"),
    menuWrap: document.querySelector(".menu-wrap"),
    menuItems: document.querySelectorAll(".menu__item"),
    openMenuCtrl: document.querySelector("button#navbutton"),
    closeMenuCtrl: document.querySelector(".button#navbutton.open"),
    menuToggle: document.querySelector("#navbutton"),
};

let isAnimating = false;

const openMenu = () => {
    if (isAnimating) return;
    isAnimating = true;
    DOM.menuToggle.classList.add("open");

    gsap.timeline({
        onComplete: () => {
            isAnimating = false;
        },
    })
        .set(DOM.overlayPath, {
            attr: { d: "M 0 100 V 100 Q 50 100 100 100 V 100 z" },
        })
        .to(
            DOM.overlayPath,
            {
                duration: 0.8,
                ease: "power4.in",
                attr: { d: "M 0 100 V 50 Q 50 0 100 50 V 100 z" },
            },
            0
        )
        .to(DOM.overlayPath, {
            duration: 0.3,
            ease: "power2",
            attr: { d: "M 0 100 V 0 Q 50 0 100 0 V 100 z" },
            onComplete: () => {
                DOM.frame.classList.add("frame--menu-open");
                DOM.menuWrap.classList.add("menu-wrap--open");
            },
        })
        .set(DOM.menuItems, { opacity: 0 })
        .set(DOM.overlayPath, {
            attr: { d: "M 0 0 V 100 Q 50 100 100 100 V 0 z" },
        })
        .to(DOM.overlayPath, {
            duration: 0.3,
            ease: "power2.in",
            attr: { d: "M 0 0 V 50 Q 50 0 100 50 V 0 z" },
        })
        .to(DOM.overlayPath, {
            duration: 0.8,
            ease: "power4",
            attr: { d: "M 0 0 V 0 Q 50 0 100 0 V 0 z" },
        })
        .to(
            DOM.menuItems,
            {
                duration: 1.1,
                ease: "power4",
                startAt: { y: 150 },
                y: 0,
                opacity: 1,
                stagger: 0.05,
            },
            ">-=1.1"
        );
};

const closeMenu = () => {
    if (isAnimating) return;
    isAnimating = true;
    DOM.menuToggle.classList.remove("open");

    gsap.timeline({
        onComplete: () => {
            isAnimating = false;
        },
    })
        .set(DOM.overlayPath, { attr: { d: "M 0 0 V 0 Q 50 0 100 0 V 0 z" } })
        .to(
            DOM.overlayPath,
            {
                duration: 0.8,
                ease: "power4.in",
                attr: { d: "M 0 0 V 50 Q 50 100 100 50 V 0 z" },
            },
            0
        )
        .to(DOM.overlayPath, {
            duration: 0.3,
            ease: "power2",
            attr: { d: "M 0 0 V 100 Q 50 100 100 100 V 0 z" },
            onComplete: () => {
                DOM.frame.classList.remove("frame--menu-open");
                DOM.menuWrap.classList.remove("menu-wrap--open");
            },
        })
        .set(DOM.overlayPath, {
            attr: { d: "M 0 100 V 0 Q 50 0 100 0 V 100 z" },
        })
        .to(DOM.overlayPath, {
            duration: 0.3,
            ease: "power2.in",
            attr: { d: "M 0 100 V 50 Q 50 100 100 50 V 100 z" },
        })
        .to(DOM.overlayPath, {
            duration: 0.8,
            ease: "power4",
            attr: { d: "M 0 100 V 100 Q 50 100 100 100 V 100 z" },
        })
        .to(
            DOM.menuItems,
            {
                duration: 0.8,
                ease: "power2.in",
                y: 100,
                opacity: 0,
                stagger: -0.05,
            },
            0
        );
};

export function initNavigation() {
    if (!DOM.menuToggle) return;

    DOM.menuToggle.addEventListener("click", function () {
        if (DOM.frame.classList.contains("frame--menu-open")) {
            closeMenu();
        } else {
            openMenu();
        }
    });
}
