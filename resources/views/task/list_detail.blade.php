@include('./partials/main')

<head>
    @include("partials/title-meta")

    <!-- Dropzone Plugin Css -->
    <link href="{!! asset('libs/dropzone/min/dropzone.min.css') !!}" rel="stylesheet" type="text/css">

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

                <div class="grid xl:grid-cols-3 gap-6">

                    <div class="xl:col-span-2">

                        <div class="card mb-6">
                            <div class="p-6">

                                <div class="mb-4">
                                    <input class="form-checkbox rounded text-primary" type="checkbox" id="customckeck1" checked>
                                    <label class="ms-1.5" for="customckeck1">Mark as completed</label>
                                </div>

                                <h4 class="text-base font-medium">Simple Admin Dashboard Template Design</h4>

                                <div class="my-5">
                                    <div class="grid sm:grid-cols-3 gap-3">
                                        <div class="col-span-1">
                                            <p class="text-gray-400">Assigned To</p>
                                            <div class="flex items-center gap-3 mt-1">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="h-6 rounded-full">
                                                <div class="">
                                                    <h5 class="font-medium">Jonathan Andrews</h5>
                                                </div>
                                            </div>
                                        </div> <!-- col-end -->

                                        <div class="col-span-1">
                                            <p class="text-gray-400">Project Name</p>
                                            <div class="flex items-center gap-3 mt-1">
                                                <i class="ri-briefcase-line text-success text-lg"></i>
                                                <div class="">
                                                    <h5 class="font-medium">Examron Envirenment</h5>
                                                </div>
                                            </div>
                                        </div> <!-- col-end -->

                                        <div class="col-span-1">
                                            <p class="text-gray-400">Due Date</p>
                                            <div class="flex items-center gap-3 mt-1">
                                                <i class="ri-calendar-todo-line text-success text-lg"></i>
                                                <div class="">
                                                    <h5 class="font-medium">Today 10am</h5>
                                                </div>
                                            </div>
                                        </div> <!-- col-end -->
                                    </div> <!-- grid-end -->
                                </div>

                                <h5 class="mb-1">Overview:</h5>
                                <p class="text-gray-400">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Some quick example text to build on the card title and make up the bulk of the card's
                                    content. Some quick example text to build on the card title and make up.</p>

                                <div class="mt-8">
                                    <h5 class="mb-2">Checklists/Sub-tasks</h5>
                                    <div class="mb-1">
                                        <input class="form-checkbox rounded text-primary" type="checkbox" id="customckeck1" checked>
                                        <label class="ms-1.5 text-gray-600" for="customckeck1">Find out the old contract documents</label>
                                    </div>
                                    <div class="mb-1">
                                        <input class="form-checkbox rounded text-primary" type="checkbox" id="customckeck1" checked>
                                        <label class="ms-1.5 text-gray-600" for="customckeck1">Organize meeting sales associates to understand need in detail</label>
                                    </div>
                                    <div class="mb-1">
                                        <input class="form-checkbox rounded text-primary" type="checkbox" id="customckeck1" checked>
                                        <label class="ms-1.5 text-gray-600" for="customckeck1">Make sure to cover every small details</label>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">

                                <h4 class="text-base">Comments (51)</h4>

                                <div class="mt-7">

                                    <div class="flex gap-3">
                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="h-8 rounded-full">
                                        <div class="w-full">
                                            <h5 class="mb-2">Jeremy Tomlinson
                                                <small class="float-right">5 hours ago</small>
                                            </h5>
                                            <p>Nice work, makes me think of The Money Pit.</p>
                                            <a href="javascript: void(0);" class="block mt-2 font-light"><i class="ri-reply-line"></i> Reply</a>
                                            <!-- chat-end -->

                                            <div class="mt-5">
                                                <div class="flex gap-3">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="h-8 rounded-full">
                                                    <div class="w-full">
                                                        <h5 class="mb-2">Thelma Fridley
                                                            <small class="float-right">3 hours ago</small>
                                                        </h5>
                                                        <p>i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
                                                        <a href="javascript: void(0);" class="block mt-2 font-light"><i class="ri-reply-line"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </div> <!-- chat-end -->
                                        </div>

                                    </div>

                                    <div class="mt-5">
                                        <div class="flex gap-3">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="h-8 rounded-full">
                                            <div class="w-full">
                                                <h5 class="mb-2">Kevin Martinez
                                                    <small class="float-right">1 day ago</small>
                                                </h5>
                                                <p>It would be very nice to have.</p>
                                                <a href="javascript: void(0);" class="block mt-2 font-light"><i class="ri-reply-line"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div> <!-- chat-end -->
                                </div>

                                <div class="text-center mt-3">
                                    <a href="javascript:void(0);" class="text-danger"><i class="ri-loader-2-line me-1"></i> Load more </a>
                                </div> <!-- link-end -->

                                <div class="mt-7 border rounded-md">
                                    <textarea rows="3" class="border-0 w-full focus:outline-0 focus:border-0 focus:ring-0" placeholder="Your comment..."></textarea>
                                    <div class="px-3 py-2 bg-gray-50 flex justify-between items-center">
                                        <div>
                                            <a href="#" class="btn btn-sm px-1 hover:bg-light hover:text-slate-900"><i class="ri-upload-line"></i></a>
                                            <a href="#" class="btn btn-sm px-1 hover:bg-light hover:text-slate-900"><i class="ri-at-line"></i></a>
                                        </div>
                                        <button type="submit" class="btn bg-success text-white py-1">Submit</button>
                                    </div>
                                </div> <!-- textarea-end -->

                            </div>
                        </div> <!-- card-end -->

                    </div> <!-- col-end -->

                    <div class="col-span-1">

                        <div class="card">
                            <div class="p-6">

                                <h5 class="card-title text-base mb-3">Attachments</h5>

                                <form action="/" method="post" class="dropzone mb-5" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                    <div class="fallback">
                                        <input name="file" type="file" />
                                    </div>

                                    <div class="dz-message needsclick">
                                        <i class="text-4xl text-muted ri-upload-cloud-line"></i>
                                        <h4 class="mt-4">Drop files here or click to upload.</h4>
                                    </div>
                                </form>

                                <div class="border rounded-md border-gray-200 p-3 mb-2 dark:border-gray-600">
                                    <div class="float-right">
                                        <a href="javascript:void(0);" class="btn btn-link">
                                            <i class="ri-download-line text-lg"></i>
                                        </a>
                                    </div>

                                    <div class="flex items-center gap-3">
                                        <span class="flex items-center justify-center bg-primary/10 text-primary font-semibold rounded-md w-12 h-12">
                                            ZIP
                                        </span>
                                        <div>
                                            <a href="javascript:void(0);" class="font-semibold">Attex-sketch-design.zip</a>
                                            <p>2.3 MB</p>
                                        </div>
                                    </div>
                                </div> <!-- border-end -->

                                <div class="border rounded-md border-gray-200 p-3 mb-2 dark:border-gray-600">
                                    <div class="float-right">
                                        <a href="javascript:void(0);" class="btn btn-link">
                                            <i class="ri-download-line text-lg"></i>
                                        </a>
                                    </div>

                                    <div class="flex items-center gap-3">
                                        <span class="flex items-center justify-center bg-primary/10 text-primary font-semibold rounded-md w-12 h-12">
                                            JPG
                                        </span>
                                        <div>
                                            <a href="javascript:void(0);" class="font-semibold">Dashboard-design.jpg</a>
                                            <p>3.25 MB</p>
                                        </div>
                                    </div>
                                </div> <!-- border-end -->

                                <div class="border rounded-md border-gray-200 p-3 mb-2 dark:border-gray-600">
                                    <div class="float-right">
                                        <a href="javascript:void(0);" class="btn btn-link">
                                            <i class="ri-download-line text-lg"></i>
                                        </a>
                                    </div>

                                    <div class="flex items-center gap-3">
                                        <span class="flex items-center justify-center bg-secondary text-white font-semibold rounded-md w-12 h-12">
                                            .MP4
                                        </span>
                                        <div>
                                            <a href="javascript:void(0);" class="font-semibold">Admin-bug-report.mp4</a>
                                            <p>7.05 MB</p>
                                        </div>
                                    </div>
                                </div> <!-- border-end -->
                            </div>
                        </div> <!-- card-end -->

                    </div> <!-- col-end -->

                </div> <!-- grid-end -->
            </main>

            @include('./partials/footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    @include('./partials/customizer')

    @include('./partials/footer-scripts')

    <!-- Dropzone js -->
    <script src="{!! asset('libs/dropzone/min/dropzone.min.js') !!}"></script>

    <!-- init js -->
    <script src="{!! asset('js/pages/component.fileupload.js') !!}"></script>

</body>

</html>