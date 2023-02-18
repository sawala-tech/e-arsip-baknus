// SIDEBAR TOGGLE DROPDOWN
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".sidebar .nav-link").forEach(function (element) {
        element.addEventListener("click", function (e) {
            let nextEl = element.nextElementSibling;
            let parentEl = element.parentElement;

            if (nextEl) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEl);

                if (nextEl.classList.contains("show")) {
                    mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu =
                        parentEl.parentElement.querySelector(".submenu.show");
                    // if it exists, then close all of them
                    if (opened_submenu) {
                        new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        });
    });
});

// DATATABLE DASHBOARD
$(document).ready(function () {
    $("#dashboard_table").DataTable({
        lengthChange: false,
        info: false,
        paging: false,
        ordering: false,
        searching: false,
    });
});

// OTHER DATATABLE
$(document).ready(function () {
    var table = $("#table_data").DataTable({
        lengthChange: false,
        sort: false,
        language: {
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            infoEmpty: "Tidak ditemukan data yang sesuai",
            infoFiltered: "(disaring dari total _MAX_ entri)",
            zeroRecords: "Data tidak ditemukan",
            paginate: {
                next: '<i class="fas cursor-pointer fa-chevron-right"></i>',
                previous: '<i class="fas cursor-pointer fa-chevron-left"></i>',
            },
        },
    });
    $("#search-input").keyup(function () {
        table.search(this.value).draw();
    });
});
