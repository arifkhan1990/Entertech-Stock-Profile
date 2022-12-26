import xlsx from "xlsx";
import { createIcons, icons } from "lucide";
import Tabulator from "tabulator-tables";

(function () {
    "use strict";

    // Tabulator
    if ($("#order_report_tabulator").length) {
        // Setup Tabulator
        let table = new Tabulator("#order_report_tabulator", {
            ajaxURL: "https://dummy-data.left4code.com",
            ajaxFiltering: true,
            ajaxSorting: true,
            printAsHtml: true,
            printStyled: true,
            pagination: "remote",
            paginationSize: 10,
            paginationSizeSelector: [10, 20, 30, 40],
            layout: "fitColumns",
            responsiveLayout: "collapse",
            placeholder: "No matching records found",
            columns: [
                {
                    formatter: "responsiveCollapse",
                    width: 10,
                    minWidth: 10,
                    hozAlign: "center",
                    resizable: false,
                    headerSort: false,
                },

                // For HTML table
                {
                    title: "User Name",
                    minWidth: 100,
                    responsive: 0,
                    field: "name",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="font-medium"> FAYSAL JAHANGIR </div>`;
                    },
                },
                {
                    title: "Order Type",
                    minWidth: 100,
                    field: "images",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">
                                    <label class="bg-[#f39c12] label label-warning">sell</label>
                        </div>`;
                    },
                },
                {
                    title: "Market",
                    minWidth: 100,
                    field: "market",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">DSE</div>`;
                    },
                },
                {
                    title: "Secutiry Code",
                    minWidth: 100,
                    field: "secutiry_code",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">ACI</div>`;
                    },
                },
                {
                    title: "Client Code",
                    minWidth: 100,
                    field: "client_code",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">7676</div>`;
                    },
                },
                {
                    title: "Current Rate",
                    minWidth: 100,
                    field: "current_rate",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">18.8000</div>`;
                    },
                },
                {
                    title: "Order Rate",
                    minWidth: 100,
                    field: "order_rate",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">17.2500</div>`;
                    },
                },
                {
                    title: "B.O Account",
                    minWidth: 100,
                    field: "bo_account",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">11004237462837483</div>`;
                    },
                },
                {
                    title: "Number of Share",
                    minWidth: 100,
                    field: "num_of_share",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">13</div>`;
                    },
                },
                {
                    title: "Total Amount",
                    minWidth: 100,
                    field: "total_amount",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">190</div>`;
                    },
                },
                {
                    title: "Request Date",
                    minWidth: 100,
                    field: "request_date",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex lg:justify-left">27th November 10022</div>`;
                    },
                },
                {
                    title: "Status",
                    minWidth: 100,
                    field: "status",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex items-left lg:justify-left}">
                                <label class="bg-[#dd4b39] label label-danger">Pending</label>
                        </div>`;
                    },
                },
                {
                    title: "From",
                    minWidth: 100,
                    field: "from",
                    hozAlign: "left",
                    vertAlign: "left",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div class="flex items-left lg:justify-left}">
                                <label class="bg-[#00a65a] label label-success">WEB</label>
                        </div>`;
                    },
                },

                // For print format
                {
                    title: "User Name",
                    field: "name",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium flex justify-center"> FAYSAL JAHANGIR </div>
                        </div>`;
                    },
                },
                {
                    title: "Order Type",
                    field: "images",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">sell</div>`;
                    },
                },
                {
                    title: "Market",
                    field: "market",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">DSE</div>`;
                    },
                },
                {
                    title: "Secutiry Code",
                    field: "secutiry_code",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">ACI</div>`;
                    },
                },
                {
                    title: "Client Code",
                    field: "client_code",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">7676</div>`;
                    },
                },
                {
                    title: "Current Rate",
                    field: "current_rate",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">18.8000</div>`;
                    },
                },
                {
                    title: "Order Rate",
                    field: "order_rate",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">17.2500</div>`;
                    },
                },
                {
                    title: "B.O Account",
                    field: "bo_account",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">11004237462837483</div>`;
                    },
                },
                {
                    title: "Number of Share",
                    field: "num_of_share",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">13</div>`;
                    },
                },
                {
                    title: "Total Amount",
                    field: "total_amount",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-center">190</div>`;
                    },
                },
                {
                    title: "Request Date",
                    field: "request_date",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex justify-start">27th Nov 2022</div>`;
                    },
                },
                {
                    title: "Status",
                    field: "status",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex items-center justify-center}">Pending</div>`;
                    },
                },
                {
                    title: "From",
                    field: "from",
                    hozAlign: "center",
                    vertAlign: "middle",
                    visible: false,
                    print: true,
                    download: true,
                    formatter(cell, formatterParams) {
                        return `<div class="flex items-center justify-center}">WEB</div>`;
                    },
                },
            ],
            renderComplete() {
                createIcons({
                    icons,
                    "stroke-width": 1.5,
                    nameAttr: "data-lucide",
                });
            },
        });

        // Redraw table onresize
        window.addEventListener("resize", () => {
            table.redraw();
            createIcons({
                icons,
                "stroke-width": 1.5,
                nameAttr: "data-lucide",
            });
        });

        // Filter function
        function filterHTMLForm() {
            let field = $("#tabulator-html-filter-field").val();
            let type = $("#tabulator-html-filter-type").val();
            let value = $("#tabulator-html-filter-value").val();
            table.setFilter(field, type, value);
        }

        // On submit filter form
        $("#tabulator-html-filter-form")[0].addEventListener(
            "keypress",
            function (event) {
                let keycode = event.keyCode ? event.keyCode : event.which;
                if (keycode == "13") {
                    event.preventDefault();
                    filterHTMLForm();
                }
            }
        );

        // On click go button
        $("#tabulator-html-filter-go").on("click", function (event) {
            filterHTMLForm();
        });

        // On reset filter form
        $("#tabulator-html-filter-reset").on("click", function (event) {
            $("#tabulator-html-filter-field").val("name");
            $("#tabulator-html-filter-type").val("like");
            $("#tabulator-html-filter-value").val("");
            filterHTMLForm();
        });

        // Export
        $("#tabulator-export-csv").on("click", function (event) {
            table.download("csv", "data.csv");
        });

        $("#tabulator-export-json").on("click", function (event) {
            table.download("json", "data.json");
        });

        $("#tabulator-export-xlsx").on("click", function (event) {
            window.XLSX = xlsx;
            table.download("xlsx", "order_report.xlsx", {
                sheetName: "Order Report",
            });
        });

        $("#tabulator-export-html").on("click", function (event) {
            table.download("html", "order_report.html", {
                style: true,
            });
        });

        // Print
        $("#tabulator-print").on("click", function (event) {
            table.print();
        });
    }
})();
