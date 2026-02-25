import $ from 'jquery';

class edu_SubscriptionPage {
    constructor() {
        this.init();
    }

    init() {
        this.initElements();
        this.bindEvents();
        this.initComparisonTables();
        this.initTableResponsive();
    }

    initElements() {
        this.$elements = {
            planIncluded: $('.plan-included'),
            homeTableBody: $('#home-table-body'),
            schoolTableBody: $('#school-table-body'),
            homeBtn: $('#home .text-center.mt-4 a.btn'),
            schoolBtn: $('#school .text-center.mt-4 a.btn'),
            responsiveTables: $('.table-responsive table')
        };
    }

    bindEvents() {
        this.bindPlanToggle();
    }

    bindPlanToggle() {
        this.$elements.planIncluded.on('click', (e) => {
            e.preventDefault();
            const $this = $(e.currentTarget);
            const $icon = $this.find('i');
            const $content = $this.next('.plan-included-content');

            if ($icon.hasClass('fa-arrow-down')) {
                $icon.removeClass('fa-arrow-down').addClass('fa-arrow-up');
            } else {
                $icon.removeClass('fa-arrow-up').addClass('fa-arrow-down');
            }
            $content.slideToggle();
        });
    }

    initComparisonTables() {
        this.initComparisonTable('#home-table-body', '#home .text-center.mt-4 a.btn', 15);
        this.initComparisonTable('#school-table-body', '#school .text-center.mt-4 a.btn', 15);
    }

    initComparisonTable(tbodyId, btnSelector, rowsPerPage) {
        const $tbody = $(tbodyId);
        if (!$tbody.length) return;

        const $rows = $tbody.find('tr');
        const totalRows = $rows.length;
        const $btn = $(btnSelector);

        $rows.slice(rowsPerPage).hide();

        if (totalRows <= rowsPerPage) {
            $btn.hide();
        } else {
            $btn.on('click', (e) => {
                e.preventDefault();
                const $hiddenRows = $rows.filter(':hidden');
                if ($hiddenRows.length > 0) {
                    $hiddenRows.show();
                }
                $(e.currentTarget).hide();
            });
        }
    }

    initTableResponsive() {
        const tables = document.querySelectorAll('.table-responsive table');
        tables.forEach((table) => {
            const headers = [];
            const headerRow = table.querySelector('thead tr');
            if (!headerRow) return;

            headerRow.querySelectorAll('th').forEach((th) => {
                headers.push(th.textContent.trim());
            });

            const rows = table.querySelectorAll('tbody tr');
            rows.forEach((row) => {
                const cells = row.querySelectorAll('td');
                cells.forEach((cell, index) => {
                    if (cell.hasAttribute('colspan')) return;
                    if (index < headers.length) {
                        cell.setAttribute('data-title', headers[index]);
                    }
                });
            });
        });
    }
}
export default edu_SubscriptionPage;