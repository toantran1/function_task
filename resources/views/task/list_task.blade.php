@include('./partials/main')

<head>
    @include("partials/title-meta")

    <!-- Gridjs Plugin css -->
    <link href="{!! asset('libs/gridjs/theme/mermaid.min.css') !!}" rel="stylesheet" type="text/css" >

    @include('./partials/head-css')
</head>

<body>

    <!-- Begin page -->
    <div class="flex wrapper">

        @include('./partials/menu')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            @include('./partials/topbar')

            <main class="p-6">

                @include("./partials/page-title")

                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Task List</h4>
                            </div>
                        </div>
                        <div class="p-6">
                           
                            <div id="table-grid-task-list"></div>
                        </div>
                    </div>
                </div>

            </main>

            @include('./partials/footer')

        </div>

    </div>

    @include('./partials/customizer')

    @include('./partials/footer-scripts')

    <!-- Gridjs Plugin js -->
    <script src="{!! asset('libs/gridjs/gridjs.umd.js') !!}"></script>

    <!-- Gridjs Demo js -->
    <script src="{!! asset('js/pages/table-gridjs.js') !!}"></script>

</body>

</html>