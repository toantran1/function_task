
class GridDatatable {

    init() {
        this.basicTableInit();
    }

    basicTableInit() {

        // Basic Table
        if (document.getElementById("table-gridjs")){
    
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
                if (document.getElementById("table-grid-task-list")){
                    new gridjs.Grid({
                        columns: [{
                            name: 'ID',
                            formatter: (function (cell) {
                                return gridjs.html('<span class="font-semibold">' + cell + '</span>');
                            })
                        },
                            "Task Name", "Description", "Created", "Date Start",
                        {
                            name: 'Actions',
                            width: '120px',
                            formatter: (function (cell, row) {
                                const taskId = row.cells[0].data;
                                return gridjs.html(`<a href='#' class='text-reset text-decoration-underline' onclick='deleteTask(${encodeURIComponent(taskId)})'>Delete</a>`);
                            }),
                        },
                        ],
                        pagination: {
                            limit: 5
                        },
                        sort: true,
                        search: true,
                        server: {
                            url: '/api/admin/task/list', 
                            then: data => data.map(task => [task.id, task.title, task.description, formatCreatedAt(task.created_at), task.date_start]),           
                        },
                    }).render(document.getElementById("table-grid-task-list"));

                    function formatCreatedAt(created_at) {
                        const date = new Date(created_at);
                        const year = date.getFullYear();
                        const month = (date.getMonth() + 1).toString().padStart(2, '0');
                        const day = date.getDate().toString().padStart(2, '0');
                        return `${year}-${month}-${day}`;
                    }
                    
                    
                }
            }

        
}

document.addEventListener('DOMContentLoaded', function (e) {
    new GridDatatable().init();
});