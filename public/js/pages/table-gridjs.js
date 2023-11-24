
class GridDatatable {

    init() {
        this.basicTableInit();
    }

    basicTableInit() {

        // Basic Table
        if (document.getElementById("table-gridjs"))
    
                new gridjs.Grid({
                    columns: [{
                        name: 'ID',
                        formatter: (function (cell) {
                            return gridjs.html('<span class="font-semibold">' + cell + '</span>');
                        })
                    },
                        "Name",
                    {
                        name: 'Email',
                        formatter: (function (cell) {
                            return gridjs.html('<a href="">' + cell + '</a>');
                        })
                    },
                        "Address", "City",
                    {
                        name: 'Actions',
                        width: '120px',
                        formatter: (function (cell) {
                            return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>" + "Details" + "</a>");
                        })
                    },
                    ],
                    pagination: {
                        limit: 5
                    },
                    sort: true,
                    search: true,
                    server: {
                        url: '/api/admin/list-user', 
                        then: data => data.map(user => [user.id, user.name, user.email, user.address, user.city]),
                    },
                }).render(document.getElementById("table-gridjs"));
    }
}

document.addEventListener('DOMContentLoaded', function (e) {
    new GridDatatable().init();
});