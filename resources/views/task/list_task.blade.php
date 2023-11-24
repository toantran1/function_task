@include('./partials/main')

<head>
    @include("partials/title-meta")

    <!-- quill css -->
    <link href="{!! asset('libs/quill/quill.core.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('libs/quill/quill.bubble.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('libs/quill/quill.snow.css') !!}" rel="stylesheet" type="text/css">

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

            <main>

                <div class="grid xl:grid-cols-3">
                    <div class="xl:col-span-2 w-full px-6">

                        <!-- Page Title -->
                        <div class="flex justify-between items-center my-6">
                            <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Tasks</h4>

                            <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                                <div class="static overflow-y-hidden">
                                    <form>
                                        <div class="relative">
                                            <input type="text" class="form-input border border-dark/10 ps-8" placeholder="Search files...">
                                            <span class="ri-search-line absolute text-base leading-9 left-2.5 top-0"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- tasks panel -->
                        <div>
                            <h5 class="mb-3">
                                <a class="text-gray-600 dark:text-gray-200 text-sm" data-fc-target="collapse-task" data-fc-type="collapse" href="#todayTasks" role="button">
                                    <i class="ri-arrow-down-s-line text-lg align-middle me-2"></i>Today <span class="text-gray-500 dark:text-gray-300">(10)</span>
                                </a>
                            </h5>

                            <div id="collapse-task" class="overflow-hidden transition-[height] duration-300">
                                <div class="card p-6 mb-8">
                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task1">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task1">
                                                Draft the new contract document for sales team
                                            </label>
                                        </div> <!-- end checkbox -->

                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-9.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to Arya S
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <ul class="text-sm text-end">
                                                <li class="inline-block me-2">
                                                    <i class="ri-calendar-todo-line text-base me-1.5"></i> Today 10am
                                                </li>
                                                <li class="inline-block me-2 ms-1">
                                                    <i class="ri-list-check-3 text-base me-1.5"></i> 3/7
                                                </li>
                                                <li class="inline-block me-2 ms-1">
                                                    <i class="ri-chat-2-line text-base me-1.5"></i> 21
                                                </li>
                                                <li class="inline-block me-2 ms-2">
                                                    <span class="bg-danger/20 text-danger rounded text-xs/none align-baseline font-medium p-1">High</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end task -->

                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task2">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task2">
                                                iOS App home page
                                            </label>
                                        </div> <!-- end checkbox -->

                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-2.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to James B
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> Today 4pm
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 2/7
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 48
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-danger/20 text-danger rounded text-xs/none align-baseline font-medium p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->

                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task3">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task3">
                                                iOS App home page
                                            </label>
                                        </div> <!-- end checkbox -->

                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-4.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to Kevin C
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> Today 6pm
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 18/21
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 73
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-info/20 text-info rounded text-xs/none align-baseline font-medium p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->
                                </div> <!-- end card -->
                            </div> <!-- end .collapse-->
                        </div>  

                        <!-- upcoming tasks -->
                        <div>
                            <h5 class="mb-3">
                                <a class="text-gray-600 dark:text-gray-200 text-sm" data-fc-target="collapse-task2" data-fc-type="collapse" href="#todayTasks" role="button">
                                    <i class="ri-arrow-down-s-line text-lg align-middle me-2"></i>Upcoming <span class="text-gray-500 dark:text-gray-300">(5)</span>
                                </a>
                            </h5>

                            <div id="collapse-task2" class="overflow-hidden transition-[height] duration-300">
                                <div class="card p-6 mb-8">
                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task4">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task4">
                                                Invite user to a project
                                            </label>
                                        </div> <!-- end checkbox -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-2.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to James S
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> Tomorrow 7am
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 1/12
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 36
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-danger/20 text-danger rounded text-xs/none align-baseline font-medium p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->

                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task5">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task5">
                                                Enable analytics tracking
                                            </label>
                                        </div> <!-- end checkbox -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-2.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to James B
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> 27 Aug 10am
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 13/72
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 211
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-success/20 text-success rounded text-xs/none align-baseline font-medium p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->

                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task6">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task6">
                                                Code HTML email template
                                            </label>
                                        </div> <!-- end checkbox -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-7.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to Edward S
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> No Due Date
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 0/7
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 0
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-info/20 text-info rounded text-xs/none align-baseline font-medium p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->
                                </div> <!-- end card -->
                            </div> <!-- end .collapse-->
                        </div>

                        <!-- Other tasks -->
                        <div>
                            <h5 class="mb-3">
                                <a class="text-gray-600 dark:text-gray-200 text-sm" data-fc-target="collapse-task3" data-fc-type="collapse" href="#todayTasks" role="button">
                                    <i class="ri-arrow-down-s-line text-lg align-middle me-2"></i>Other <span class="text-gray-500 dark:text-gray-300">(3)</span>
                                </a>
                            </h5>

                            <div id="collapse-task3" class="overflow-hidden transition-[height] duration-300">

                                <div class="card p-6 mb-8">
                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task7">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task7">
                                                Coordinate with business development
                                            </label>
                                        </div> <!-- end checkbox -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-9.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip" style="left: 747.726px; top: 272px;">
                                                    Assigned to Arya S
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow="" style="left: 66.5px; top: -5px;"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> Today 10am
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 5/14
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 71
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-info/20 text-info rounded text-xs/none align-baseline font-medium p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->

                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task6">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task6">
                                                Kanban board design
                                            </label>
                                        </div> <!-- end checkbox -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-2.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Assigned to Edward S
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="text-sm text-end">
                                                    <li class="inline-block me-2">
                                                        <i class="ri-calendar-todo-line text-base me-1.5"></i> No Due Date
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-list-check-3 text-base me-1.5"></i> 0/8
                                                    </li>
                                                    <li class="inline-block me-2 ms-1">
                                                        <i class="ri-chat-2-line text-base me-1.5"></i> 0
                                                    </li>
                                                    <li class="inline-block me-2 ms-2">
                                                        <span class="bg-info/20 text-info rounded text-xs/none align-baseline font-medium p-1">Medium</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task -->

                                    <!-- task -->
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="form-checkbox rounded text-primary" id="task5">
                                            <label class="font-semibold text-gray-500 dark:text-gray-300" for="task5">
                                                Enable analytics tracking
                                            </label>
                                        </div> <!-- end checkbox -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex-grow">
                                                <div class="h-8 w-8">
                                                    <img class="inline-block h-full w-full rounded-full" src="assets/images/users/avatar-5.jpg" alt="Image Description" data-fc-placement="bottom" data-fc-type="tooltip">
                                                </div>
                                                <div class="bg-dark px-3 py-1.5 rounded-md transition-all text-white z-50 dark:bg-light dark:text-gray-800 absolute open opacity-0 hidden" role="tooltip">
                                                    Code HTML email template for sales outreach
                                                    <div class="bg-dark w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light absolute" data-fc-arrow></div>
                                                </div>
                                            </div>
                                            <ul class="text-sm text-end">
                                                <li class="inline-block me-2">
                                                    <i class="ri-calendar-todo-line text-base me-1.5"></i> 10 Sep 3pm
                                                </li>
                                                <li class="inline-block me-2 ms-1">
                                                    <i class="ri-list-check-3 text-base me-1.5"></i> 0/58
                                                </li>
                                                <li class="inline-block me-2 ms-1">
                                                    <i class="ri-chat-2-line text-base me-1.5"></i> 9
                                                </li>
                                                <li class="inline-block me-2 ms-2">
                                                    <span class="bg-success/20 text-success rounded text-xs/none align-baseline font-medium p-1">Low</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end task -->
                                </div> <!-- end card -->
                            </div> <!-- end .collapse-->
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card p-6 xl:rounded-none xl:m-0 m-6">
                            <div class="dropdown float-right h-4">
                                <a href="javascript:void(0)" class="" data-fc-type="dropdown" data-fc-placement="bottom-end">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <div class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1 absolute hidden">
                                    <a class="flex items-center py-1.5 px-4 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                        <i class="ri-attachment-line me-1.5"></i>
                                        <span>Attachment</span>
                                    </a>
                                    <a class="flex items-center py-1.5 px-4 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                        <i class="ri-edit-box-line me-1.5"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="flex items-center py-1.5 px-4 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                        <i class="ri-file-copy-2-line me-1.5"></i>
                                        <span>Mark as Duplicate</span>
                                    </a>
                                    <hr class="my-3 border-gray-300 dark:border-gray-700">
                                    <a class="flex items-center py-1.5 px-4 text-sm text-danger hover:bg-slate-100 dark:hover:bg-gray-700" href="javascript:void(0)">
                                        <i class="ri-delete-bin-line me-1.5"></i>
                                        <span>Remove</span>
                                    </a>
                                </div>
                            </div> <!-- end dropdown-->

                            <div class="flex gap-2 items-center float-left">
                                <input type="checkbox" class="form-checkbox rounded" id="completedCheck">
                                <label class="font-semibold text-gray-500 dark:text-gray-300 text-sm" for="completedCheck">
                                    Mark as completed
                                </label>
                            </div> <!-- end form-check-->

                            <hr class="mt-9 mb-3 border-gray-300 dark:border-gray-700">

                            <div class="">
                                <div class="w-auto">
                                    <h4 class="text-base mb-2.5 font-semibold text-gray-500 dark:text-gray-300">Draft the new contract document for sales team</h4>

                                    <div class="flex flex-wrap items-center gap-y-3">
                                        <div class="sm:w-1/2 px-3">
                                            <!-- assignee -->
                                            <p class="mt-3 mb-1.5 text-gray-500 dark:text-gray-300 text-sm">Assigned To</p>
                                            <div class="flex items-center">
                                                <img src="assets/images/users/avatar-9.jpg" alt="Arya S" class="h-6 rounded-full me-3">
                                                <div>
                                                    <h5 class="text-sm">
                                                        Arya Stark
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- end assignee -->
                                        </div>

                                        <div class="sm:w-1/2 px-3">
                                            <!-- start due date -->
                                            <p class="mt-3 mb-1.5 text-gray-500 dark:text-gray-300 text-sm">Due Date</p>
                                            <div class="flex items-center">
                                                <i class="ri-calendar-todo-line text-lg text-success me-1.5"></i>
                                                <div>
                                                    <h5 class="text-sm">
                                                        Today 10am
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- end due date -->
                                        </div>
                                    </div>

                                    <!-- task description -->
                                    <div class="flex mt-6">
                                        <div class="w-full">
                                            <div class="border rounded border-gray-300 dark:border-gray-700">
                                                <div id="bubble-editor" class="h-32 ql-container ql-bubble">
                                                    <div class="ql-editor" data-gramm="false" contenteditable="true">
                                                        <h3>This is an simple editable area.</h3>
                                                        <p><br></p>
                                                        <ul>
                                                            <li>Select a text to reveal the toolbar.</li>
                                                            <li>Edit rich document on-the-fly, so elastic!</li>
                                                        </ul>
                                                        <p><br></p>
                                                        <p>End of simple area</p>
                                                    </div>
                                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                    <div class="ql-tooltip ql-hidden">
                                                        <span class="ql-tooltip-arrow"></span>
                                                        <div class="ql-tooltip-editor">
                                                            <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">
                                                            <a class="ql-close"></a>
                                                        </div>
                                                        <div class="ql-toolbar">
                                                            <span class="ql-formats">
                                                                <button type="button" class="ql-bold">
                                                                    <svg viewBox="0 0 18 18">
                                                                        <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                                                        <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="ql-italic">
                                                                    <svg viewBox="0 0 18 18">
                                                                        <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                                        <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                                        <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="ql-link">
                                                                    <svg viewBox="0 0 18 18">
                                                                        <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                                                        <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                                                        <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                                                                    </svg>
                                                                </button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button type="button" class="ql-header" value="1">
                                                                    <svg viewBox="0 0 18 18">
                                                                        <path class="ql-fill" d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="ql-header" value="2">
                                                                    <svg viewBox="0 0 18 18">
                                                                        <path class="ql-fill" d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"></path>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="ql-blockquote">
                                                                    <svg viewBox="0 0 18 18">
                                                                        <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect>
                                                                        <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect>
                                                                        <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path>
                                                                        <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path>
                                                                    </svg>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div> <!-- end Snow-editor-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end task description -->

                                    <!-- start sub tasks/checklists -->
                                    <h5 class="mt-9 mb-3 text-base">Checklists/Sub-tasks</h5>
                                    <div class="flex items-center gap-2 mt-1.5">
                                        <input type="checkbox" class="form-checkbox rounded" id="checklist1">
                                        <label class="font-semibold text-gray-500 dark:text-gray-300 text-sm" for="checklist1">
                                            Find out the old contract documents
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-2 mt-1.5">
                                        <input type="checkbox" class="form-checkbox rounded" id="checklist2">
                                        <label class="font-semibold text-gray-500 dark:text-gray-300 text-sm" for="checklist2">
                                            Organize meeting sales associates to understand need in detail
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-2 mt-1.5">
                                        <input type="checkbox" class="form-checkbox rounded" id="checklist3">
                                        <label class="font-semibold text-gray-500 dark:text-gray-300 text-sm" for="checklist3">
                                            Make sure to cover every small details
                                        </label>
                                    </div>
                                    <!-- end sub tasks/checklists -->

                                    <!-- start attachments -->
                                    <h5 class="mt-9 mb-3 text-base">Attachments</h5>
                                    <div class="card mb-3 border shadow-none border-gray-300 dark:border-gray-700">
                                        <div class="p-1.5">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-auto">
                                                        <div class="w-12 h-12">
                                                            <span class="h-full w-full inline-flex items-center justify-center bg-primary text-white font-semibold rounded">
                                                                ZIP
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <a href="javascript:void(0);" class="text-sm text-gray-400 font-bold">sales-assets.zip</a>
                                                        <p class="text-sm">2.3 MB</p>
                                                    </div>
                                                </div>
                                                <div class="w-auto float-right" id="tooltip-container9">
                                                    <!-- Button -->
                                                    <a href="javascript:void(0);" class="text-xl">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-xl text-danger">
                                                        <i class="ri-close-fill"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 border shadow-none border-gray-300 dark:border-gray-700">
                                        <div class="p-1.5">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-auto">
                                                        <div class="w-12 h-12">
                                                            <span class="h-full w-full inline-flex items-center justify-center bg-primary text-white font-semibold rounded">
                                                                DOC
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <a href="javascript:void(0);" class="text-sm text-gray-400 font-bold">new-contarcts.docx</a>
                                                        <p class="text-sm">1.25 MB</p>
                                                    </div>
                                                </div>
                                                <div class="w-auto float-right" id="tooltip-container9">
                                                    <!-- Button -->
                                                    <a href="javascript:void(0);" class="text-xl">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-xl text-danger">
                                                        <i class="ri-close-fill"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end attachments -->

                                    <!-- comments -->
                                    <div class="mt-6">
                                        <div class="w-full">
                                            <h5 class="mb-6 text-base">Comments</h5>

                                            <div class="flex mt-6 p-1.5">
                                                <img src="assets/images/users/avatar-9.jpg" class="rounded-full me-3 h-9" alt="Arya Stark">
                                                <div class="w-full">
                                                    <h5 class="text-sm">
                                                        <span class="float-right text-muted text-xs">4:30am</span>
                                                        Arya Stark
                                                    </h5>
                                                    <p class="mt-1.5 text-gray-400">
                                                        Should I review the last 3 years legal documents as well?
                                                    </p>
                                                </div>
                                            </div> <!-- end comment -->

                                            <hr class="my-5 border-gray-300 dark:border-gray-700">

                                            <div class="flex mt-3 p-1.5">
                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-full me-3 h-9" alt="Dominc B">
                                                <div class="w-full">
                                                    <h5 class="text-sm">
                                                        <span class="float-right text-muted text-xs">3:30am</span>
                                                        Gary Somya
                                                    </h5>
                                                    <p class="mt-1.5 text-gray-400">
                                                        @Arya FYI..I have created some general guidelines last year.
                                                    </p>
                                                </div>
                                            </div> <!-- end comment-->

                                            <hr class="my-5 border-gray-300 dark:border-gray-700">

                                        </div>
                                    </div>

                                    <div class="flex pt-3">
                                        <div class="w-full">
                                            <div class="border rounded border-gray-300 dark:border-gray-700">
                                                <form action="#" class="">
                                                    <textarea rows="3" class="form-input text-gray-400 border-0 resize-none placeholder:text-gray-400" placeholder="Your comment..."></textarea>
                                                    <div class="p-2 bg-gray-400/10 dark:">
                                                        <div class="flex items-center gap-2">
                                                            <a href="#" class="btn btn-sm bg-light dark:bg-gray-600 text-gray-950 dark:text-white"><i class="ri-upload-line text-sm"></i></a>
                                                            <a href="#" class="btn btn-sm bg-light dark:bg-gray-600 text-gray-950 dark:text-white"><i class="ri-at-line text-sm"></i></a>
                                                            <button type="submit" class="btn btn-sm bg-success text-white ms-auto"><i class="ri-send-plane-2-line me-1"></i>Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- end .border-->
                                        </div>
                                    </div>
                                    <!-- end comments -->
                                </div>
                            </div>
                        </div>
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

    <!-- quill js -->
    <script src="{!! asset('libs/quill/quill.min.js') !!}"></script>

    <script src="{!! asset('js/pages/form-editor.js') !!}"></script>

</body>

</html>