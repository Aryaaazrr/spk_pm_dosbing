import "./bootstrap";
import "flowbite";
import "preline";

import Alpine from "alpinejs";
import HSStepper from "@preline/stepper";
import { HSDataTable, HSOverlay } from "preline";

window.Alpine = Alpine;

Alpine.start();

if (
    document.getElementById("pagination-table") &&
    typeof simpleDatatables.DataTable !== "undefined"
) {
    const dataTable = new simpleDatatables.DataTable("#pagination-table", {
        paging: true,
        perPage: 10,
        perPageSelect: [10, 15, 20, 25],
        sortable: true,
        firstLast: true,
        nextPrev: true,
        searchable: true,
        sensitivity: "base",
        searchQuerySeparator: " ",
    });
}

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
});

window.HSStaticMethods.autoInit(['select']);
