import "./bootstrap";
import "flowbite";
import "preline";
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import Lenis from "lenis";
import Alpine from "alpinejs";
import HSStepper from "@preline/stepper";
import HSDataTable from "@preline/datatable";
import { initNavigation } from "./animated/navigation";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const lenis = new Lenis();

lenis.on("scroll", ScrollTrigger.update);

gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);

window.Alpine = Alpine;

Alpine.start();

// if (
//     document.getElementById("pagination-table") &&
//     typeof simpleDatatables.DataTable !== "undefined"
// ) {
//     const dataTable = new simpleDatatables.DataTable("#pagination-table", {
//         paging: true,
//         perPage: 10,
//         perPageSelect: [10, 15, 20, 25],
//         sortable: true,
//         firstLast: true,
//         nextPrev: true,
//         searchable: true,
//         sensitivity: "base",
//         searchQuerySeparator: " ",
//     });
// }

function formatPresentase(input) {
    let value = parseInt(input.value.replace(/[^0-9]/g, ""), 10);

    if (isNaN(value) || value < 0) {
        value = 0;
    } else if (value > 100) {
        value = 100;
    }

    input.value = value + "%";
}

window.formatPresentase = formatPresentase;

let selectedCount = 0;

function limitCheckboxes(checkbox) {
    const checkboxes = document.querySelectorAll(".checkbox");

    if (checkbox.checked) {
        selectedCount++;
    } else {
        selectedCount--;
    }

    if (selectedCount >= 3) {
        checkboxes.forEach(function (cb) {
            if (!cb.checked) {
                cb.disabled = true;
            }
        });
    } else {
        checkboxes.forEach(function (cb) {
            cb.disabled = false;
        });
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".checkbox");

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener("click", function () {
            limitCheckboxes(checkbox);
        });
    });

    const navbar = document.querySelector(".frame");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("shadow-md");
        } else {
            navbar.classList.remove("shadow-md");
        }
    });

    new Swiper(".slider-testimonials", {
        modules: [Navigation, Pagination],
        centeredSlides: true,
        centeredSlidesBounds: false,
        effect: "slide",
        lazyLoadingInPrevNext: true,
        preloadImages: true,
        freeMode: true,
        loop: true,
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 10,
        breakpoints: {
            320: {
                slidesPerView: 1.6,
                spaceBetween: 10,
            },
            370: {
                slidesPerView: 1.8,
                spaceBetween: 15,
            },
            400: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            450: {
                slidesPerView: 2.3,
                spaceBetween: 15,
            },
            500: {
                slidesPerView: 2.5,
                spaceBetween: 15,
            },
            550: {
                slidesPerView: 2.8,
                spaceBetween: 15,
            },
            600: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            650: {
                slidesPerView: 3.2,
            },
            700: {
                slidesPerView: 3.5,
            },
            750: {
                slidesPerView: 3.7,
            },
            800: {
                slidesPerView: 4,
            },
            900: {
                slidesPerView: 4.2,
            },
            940: {
                slidesPerView: 4.5,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
        speed: 800,
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
            renderProgressbar: function (progressbarFillClass) {
                return (
                    '<span class="' +
                    progressbarFillClass +
                    '" style="background: linear-gradient(to right, #2563eb, #4f46e5); height: 100%; transition: all 500ms ease-in-out !important;"></span>'
                );
            },
        },
        navigation: {
            nextEl: "#button-next",
            prevEl: "#button-prev",
        },
    });

    window.HSStaticMethods.autoInit(["select"]);

    initNavigation();
});

