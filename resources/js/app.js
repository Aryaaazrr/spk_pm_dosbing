import "./bootstrap";
import "flowbite";
import "preline";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

if (
    document.getElementById("pagination-table") &&
    typeof simpleDatatables.DataTable !== "undefined"
) {
    const dataTable = new simpleDatatables.DataTable("#pagination-table", {
        paging: true,
        perPage: 5,
        perPageSelect: [5, 10, 15, 20, 25],
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
