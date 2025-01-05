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
