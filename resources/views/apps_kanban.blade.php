@include('./partials/main')

<head>
    @include("./partials/title-meta")

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
                <div class="grid w-full">
                    <div class="overflow-hidden text-gray-700 dark:text-slate-400">
                        <div class="flex overflow-x-auto custom-scroll gap-6 pb-4 h-[calc(100vh-235px)]" >
                            <div class="flex flex-col flex-shrink-0 w-80 border rounded-md border-gray-200 dark:border-gray-700 p-4" id="todoList" data-status="0">
                                <h5 class="uppercase mb-4">ToDo</h5>
                                <div class="flex flex-col gap-4 kanban-board custom-scroll overflow-x-hidden overflow-y-auto px-1 h-full" id="kanbanborad-one">

                                    <!-- Task Item -->
                                    @foreach ($tasks->where('status', 0) as $task)
                                        <div class="card cursor-pointer" id="taskList" data-url="{{ url('/update-task-status') }}" data-task-id="{{ $task->id }}">
                                            <div class="p-6">
                                                
                                                <div class="flex justify-between items-center">
                                                    <small>{{ $task->date_start }}</small>
                                                    <span class="inline-flex items-center gap-1.5 px-1 rounded-md text-xs font-medium bg-danger/10 text-danger">High</span>
                                                </div>


                                                <h5 class="my-2">
                                                    <a href="#" id="" data-task-id="{{ $task->id }}" data-fc-type="modal" data-fc-target="task-detail-modal" type="button" class="text-base text-gray-700 dark:text-slate-400 font-medium popup_trigger">{{ $task->title }}</a>
                                                </h5>

                                                <div class="mt-5">
                                                    <div class="flex items-center">
                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-1.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Tosha
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-5.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Brain
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-success text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    K
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Hooker
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-primary text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    9+
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                More +
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->
                                                    </div> <!-- flex end -->
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Task Item End -->

                                </div> <!-- end company-list-1-->
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-80 border rounded-md border-gray-200 dark:border-gray-700 p-4" id="todoList" data-status="1">

                                <h5 class="uppercase mb-4">In Progress </h5>

                                <div class="flex flex-col gap-4 kanban-board custom-scroll overflow-x-hidden overflow-y-auto px-1 h-full" id="kanbanborad-two">

                                    @foreach ($tasks->where('status', 1) as $task)
                                        <div class="card cursor-pointer" id="taskList" data-url="{{ url('/update-task-status') }}" data-task-id="{{ $task->id }}">
                                            <div class="p-6">
                                                
                                                <div class="flex justify-between items-center">
                                                    <small>{{ $task->date_start }}</small>
                                                    <span class="inline-flex items-center gap-1.5 px-1 rounded-md text-xs font-medium bg-danger/10 text-danger">High</span>
                                                </div>


                                                <h5 class="my-2">
                                                    <a href="#" id="" data-task-id="{{ $task->id }}" data-fc-type="modal" data-fc-target="task-detail-modal" type="button" class="text-base text-gray-700 dark:text-slate-400 font-medium popup_trigger">{{ $task->title }}</a>
                                                </h5>

                                                <div class="mt-5">
                                                    <div class="flex items-center">
                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-1.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Tosha
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-5.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Brain
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-success text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    K
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Hooker
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-primary text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    9+
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                More +
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->
                                                    </div> <!-- flex end -->
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div> <!-- end company-list-1-->
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-80 border rounded-md border-gray-200 dark:border-gray-700 p-4" id="todoList" data-status="2">

                                <h5 class="uppercase mb-4">Review</h5>

                                <div class="flex flex-col gap-4 kanban-board custom-scroll overflow-x-hidden overflow-y-auto px-1 h-full" id="kanbanborad-three">

                                    @foreach ($tasks->where('status', 2) as $task)
                                        <div class="card cursor-pointer" id="taskList" data-url="{{ url('/update-task-status') }}" data-task-id="{{ $task->id }}">
                                            <div class="p-6">
                                                
                                                <div class="flex justify-between items-center">
                                                    <small>{{ $task->date_start }}</small>
                                                    <span class="inline-flex items-center gap-1.5 px-1 rounded-md text-xs font-medium bg-danger/10 text-danger">High</span>
                                                </div>


                                                <h5 class="my-2">
                                                    <a href="#" id="" data-task-id="{{ $task->id }}" data-fc-type="modal" data-fc-target="task-detail-modal" type="button" class="text-base text-gray-700 dark:text-slate-400 font-medium popup_trigger">{{ $task->title }}</a>
                                                </h5>

                                                <div class="mt-5">
                                                    <div class="flex items-center">
                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-1.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Tosha
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-5.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Brain
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-success text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    K
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Hooker
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-primary text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    9+
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                More +
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->
                                                    </div> <!-- flex end -->
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div> <!-- end company-list-1-->
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-80 border rounded-md border-gray-200 dark:border-gray-700 p-4" id="todoList" data-status="3">

                                <h5 class="uppercase mb-4">Done</h5>

                                <div class="flex flex-col gap-4 kanban-board custom-scroll overflow-x-hidden overflow-y-auto px-1 h-full" id="kanbanborad-four">

                                    @foreach ($tasks->where('status', 3) as $task)
                                        <div class="card cursor-pointer" id="taskList" data-url="{{ url('/update-task-status') }}" data-task-id="{{ $task->id }}">
                                            <div class="p-6">
                                                
                                                <div class="flex justify-between items-center">
                                                    <small>{{ $task->date_start }}</small>
                                                    <span class="inline-flex items-center gap-1.5 px-1 rounded-md text-xs font-medium bg-danger/10 text-danger">High</span>
                                                </div>


                                                <h5 class="my-2">
                                                    <a href="#" id="" data-task-id="{{ $task->id }}" data-fc-type="modal" data-fc-target="task-detail-modal" type="button" class="text-base text-gray-700 dark:text-slate-400 font-medium popup_trigger">{{ $task->title }}</a>
                                                </h5>

                                                <div class="mt-5">
                                                    <div class="flex items-center">
                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-1.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Tosha
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <img src="{!! asset('images/users/avatar-5.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Brain
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-success text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    K
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                Hooker
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->

                                                        <div class="-me-3">
                                                            <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                                <div class="bg-primary text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                                    9+
                                                                </div>
                                                            </a>
                                                            <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                                More +
                                                                <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                            </div>
                                                        </div> <!-- avatar-icon end -->
                                                    </div> <!-- flex end -->
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div> <!-- end company-list-1-->
                            </div>
                        </div> <!-- end board-->
                    </div>
                </div>

                <!--Verically centered modal-->
                <div id="task-detail-modal" class="fc-modal fixed start-0 top-0 z-50 hidden fc-modal:flex h-full w-full items-center overflow-y-auto">
                    <div class="pointer-events-none relative w-auto -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 transition-all duration-300 ease-in-out sm:max-w-2xl md:max-w-3xl sm:w-full min-h-full flex items-center sm:mx-auto">
                        <div class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white shadow-lg dark:bg-gray-800 m-4 pb-4">
                        <form method="POST" id="update-task-form" >
                            @csrf
                            @method('PUT')
                            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                    <input type="text" id="title" name="title" class="custom-input" />
                                    <span class="inline-flex items-center gap-1.5 p-1 rounded-md text-xs font-medium bg-danger text-white ms-3">High</span>
                                </h3>

                                <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                                    <i class="ri-close-line text-xl"></i>
                                </button> <!-- close-button end -->
                            </div> <!-- flex end -->

                            <div class="px-4 pt-5 pb-4 overflow-y-auto">
                                <h5 class="mb-1">Description:</h5>
                                <p class="font-light text-gray-500 dark:text-gray-400">
                                    <input type="text" id="description" name="description" class="custom-input" />
                                </p>

                                <div class="my-7">
                                    <div class="grid sm:grid-cols-3 gap-6">
                                        <div class="col-span-1">
                                            <h5 class="mb-2 text-gray-600">Create Date</h5>
                                            <span class="font-normal text-gray-500 dark:text-gray-400 date-created"></span>
                                        </div> <!-- col end -->

                                        <div class="col-span-1">
                                            <h5 class="mb-2 text-gray-600">Start Date</h5>
                                            <input class="form-input" name="date" id="date_start" type="date" name="date" required>
                                        </div> <!-- col end -->

                                        <div class="col-span-1">
                                            <h5 class="mb-2 text-gray-600">Asignee:</h5>
                                            <div class="flex items-center">
                                                <div class="-me-3">
                                                    <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                        <img src="{!! asset('images/users/avatar-1.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                    </a>
                                                    <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                        Tosha
                                                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                    </div>
                                                </div> <!-- avatar-icon end -->

                                                <div class="-me-3">
                                                    <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                        <div class="bg-warning text-white font-medium flex items-center justify-center rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                            K
                                                        </div>
                                                    </a>
                                                    <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                        Hooker
                                                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                    </div>
                                                </div> <!-- avatar-icon end -->

                                                <div class="-me-3">
                                                    <a href="javascript: void(0);" data-fc-type="tooltip" data-fc-placement="top">
                                                        <img src="{!! asset('images/users/avatar-5.jpg') !!}" alt="" class="rounded-full h-8 w-8 hover:-translate-y-0.5 transition-all duration-200">
                                                    </a>
                                                    <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                                        Brain
                                                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                                                    </div>
                                                </div> <!-- avatar-icon end -->
                                            </div> <!-- tooltip-flex end -->
                                        </div> <!-- col end -->
                                    </div> <!-- grid end -->
                                </div>
                                <!-- <div>
                                    <label class="mb-2" for="choices-multiple-remove-button">Users</label>
                                    <select class="form-input" name="choices-multiple-remove-button" id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                                        <option value="Choice 1" >Choice 1</option>
                                    </select>
                                </div> -->
                                <div class="flex justify-end">
                                    <div class="mr-3">
                                        <button type="submit" name="action" value="update" class="btn bg-primary text-white">Update</button>
                                    </div>
                                    <div class="">
                                        <button type="submit" name="action" value="delete" class="btn bg-danger text-white">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @include('./partials/customizer')
    @include('./partials/footer-scripts')


    <script>
      $(document).ready(function() {
        const taskLists = document.querySelectorAll('.kanban-board');

            taskLists.forEach(taskList => {
                const tList = taskList.closest('.flex-shrink-0');
                const status = tList.getAttribute('data-status');

                new Sortable(taskList, {
                    group: 'taskList',
                    animation: 150,
                    onEnd: function(event) {
                        const taskId = event.item.getAttribute('data-task-id');
                        const newStatus = event.to.parentElement.getAttribute('data-status');
                        
                        console.log('Task ID:', taskId, 'Old Status:', status, 'New Status:', newStatus);
                        updateTaskStatus(taskId, newStatus);
                    },
                });
            });

        function updateTaskStatus(taskId, status) {
            $.ajax({
                url: '/admin/update-task-status',
                type: 'POST',
                data: {
                    taskId: taskId,
                    status: status,
                    _token: '{{ csrf_token() }}',
                },
                success: function(data) {
                    console.log(data, taskId, status);
                },
                error: function(error) {
                    console.error(error);
                },
            });
        }

        $('.popup_trigger').on('click', function () {
            const task_id = $(this).data('task-id');
            console.log(task_id);
            fetchTaskDetails(task_id);
        });

        function fetchTaskDetails(task_id) {
            $.ajax({
                url: `/tasks/${task_id}`,
                method: 'GET',
                success: function (data) {
                    $('#update-task-form').attr('action', `/tasks/${data.id}`);
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#date_start').val(data.date_start);
                    const createdDate = new Date(data.created_at);
                    const formattedDate = createdDate.toLocaleDateString('en-US'); // You can specify your locale

                    $('.date-created').text(formattedDate);
                },
                error: function (error) {
                    console.error('Error fetching task details:', error);
                }
            });
        }
    });

    // axios.get('/api/admin/list-user')
    // .then(response => {
    //     const users = response.data;

    //     if (users && Array.isArray(users)) {
    //         return users;
    //         // users.forEach(user => {
    //         //     const option = document.createElement('option');
    //         //     option.value = user.id;
    //         //     option.text = user.name; // Thay thế bằng trường dữ liệu mong muốn
    //         //     document.getElementById('choices-multiple-remove-button').appendChild(option);
    //         // });
    //     } else {
    //         console.error('Invalid or empty users array in the API response.');
    //     }
    // })
    // .catch(error => {
    //     console.error('Error fetching users:', error);
    // });
    function deleteTask(taskId) {
    if (confirm('Are you sure you want to delete this task?')) {
        // Tạo một yêu cầu AJAX để xóa task
        axios.delete(`/tasks/${taskId}`)
            .then(response => {
                // Xử lý phản hồi thành công nếu cần
                console.log(response.data);
            })
            .catch(error => {
                // Xử lý lỗi nếu có
                console.error('Error deleting task:', error);
            });
    }
}
    </script>

</body>

</html>