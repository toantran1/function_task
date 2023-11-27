@include('./partials/main')

<head>
    @include("partials/title-meta")

    @include('./partials/head-css')
</head>

<body>

    <div class="flex wrapper">

        @include('./partials/menu')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            @include('./partials/topbar')

            <main class="p-6">

                @include("./partials/page-title")

                <div class="card mb-6">
                    <div class="p-6">
                        <h4 class="card-title mb-4">Create New Task</h4>

                            <form method="POST" action="{{ route('create.task') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2" for="simpleinput">Title</label>
                                    <input type="text" name="title" id="simpleinput" class="form-input" required>
                                </div>
            
                                <div class="mb-3">
                                    <label class="mb-2" for="example-textarea">Discription</label>
                                    <textarea class="form-input" name="description" id="example-textarea" rows="8" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2" for="example-date">Date Start</label>
                                    <input class="form-input" name="date" id="example-date" type="date" name="date" required>
                                </div>
                
                                <button type="submit" class="btn bg-primary text-white">Create</button> <!-- end button -->
                            </form><!-- From End -->
                    </div>
                </div>
            </main>

            @include('./partials/footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    @include('./partials/customizer')

    @include('./partials/footer-scripts')

</body>

</html>