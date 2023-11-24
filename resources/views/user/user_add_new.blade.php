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

                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="lg:col-span-2">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-1">Add New User</h4>
                                </div>

                                <div class="pt-5">
                                    <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">More complex layouts can also be created with the grid system.</p>

                                    <form method="POST" action="{{ route('create.user') }}">
                                        @csrf
                                        <div class="grid grid-cols-1 md:grid-cols-2 mb-4  gap-6">
                                            <div>
                                                <label for="inputEmail4" class="mb-2">Name</label>
                                                <input type="text" name="user_name" class="form-input" id="inputEmail4" placeholder="Username">
                                            </div>
                                            <div>
                                                <label for="inputEmail4" class="mb-2">Email</label>
                                                <input type="email" name="user_email" class="form-input" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div>
                                                <label for="inputPassword4" class="mb-2">Password</label>
                                                <input type="password" name="user_password" class="form-input" id="inputPassword4" placeholder="Password">
                                            </div>

                                            <div>
                                                <label for="inputAddress2" class="mb-2">Address</label>
                                                <input type="text" name="user_address" class="form-input" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                            </div>

                                            <div>
                                                <label for="inputCity" class="mb-2">City</label>
                                                <input type="text" name="user_city" class="form-input" id="inputCity">
                                            </div>
        
                                        </div> <!-- end grid -->

                                        <button type="submit" class="btn bg-primary text-white">Sign in</button> <!-- end button -->
                                    </form> <!-- end form -->

                                </div>

                            </div>
                        </div> <!-- end card -->
                    </div>

                </div> <!-- end grid -->




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