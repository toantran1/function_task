@include('./partials/main')

<head>
    @include("partials/title-meta")

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    @include('./partials/head-css')
</head>

<body class="">

    <div class="flex items-stretch h-screen bg-cover bg-center relative bg-no-repeat  bg-[url('../images/bg-auth.jpg')]">
        <div class="bg-white lg:max-w-[480px] z-10 p-12 relative w-full h-full border-t-[3px] border-primary dark:bg-gray-800">
            <div class="flex flex-col h-full gap-4">
                <div class="mb-8 text-center lg:text-start">
                    <a href="index" class="flex justify-center lg:justify-start">
                        <img src="assets/images/logo.png" alt="logo" class="h-6 hidden dark:block">
                        <img src="assets/images/logo-dark.png" alt="logo" class="h-6 block dark:hidden">
                    </a>
                </div>
                <div class="my-auto">
                    <!-- title-->
                    <h4 class="text-dark/70 text-lg font-semibold dark:text-light/80 mb-2">Free Sign Up</h4>
                    <p class="text-gray-400 mb-9">Don't have an account? Create your account, it takes less than a minute</p>

                    <!-- form -->
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="mb-6 space-y-2">
                            <label for="fullname"  class="font-semibold text-gray-500">Full Name</label>
                            <input class="form-input" type="text" id="fullname" name="name" required="" placeholder="Enter your Name">
                        </div>
                        <div class="mb-6 space-y-2">
                            <label for="emailaddress" class="font-semibold text-gray-500">Email address</label>
                            <input class="form-input" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                        </div>
                        <div class="mb-6 space-y-2">
                            <div class="flex justify-between items-center mb-2">
                                <label for="password" class="font-semibold text-gray-500">Password</label>
                                <a href="auth-recoverpw" class="text-muted text-xs">Forgot your password?</a>
                            </div>

                            <div class="flex items-center">
                                <input type="password" id="password" name="password" class="form-input rounded-e-none" placeholder="Enter your password">
                                <span class="px-3.5 py-1 bg-light/30 dark:bg-slate-700/60 border rounded-e -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-primary" id="checkbox-signin" checked="">
                                <label class="ms-2 text-sm font-medium" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>
                        <div class=" text-center">
                            <button class="btn bg-primary text-white w-full" type="submit"><i class="ri-login-box-line me-1"></i> Register </button>
                        </div>
                        <!-- social-->
                    </form>
                    <!-- end form-->
                </div>

                <footer class="text-center justify-center h-14 -mb-12">
                    Already have account? <a href="{{ url('admin/login') }}" class="text-muted ms-1 link-offset-3 underline-offset-4"><b>Log In</b></a>
                </footer>
            </div>
        </div>

        <div class="bg-black/30 w-full h-full relative hidden lg:block">
            <div class="absolute start-0 end-0 bottom-0 flex mt-auto justify-center text-center">
                <div class="xl:w-1/2 w-full mx-auto">
                    <div class="swiper mt-auto cursor-col-resize" id="swiper_one">
                        <div class="swiper-wrapper mb-12">
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">I love the color!</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> Everything you need is in this template. Love the overall look and feel. Not too flashy, and still very professional and smart.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->
    
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">Flexibility !</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> Pretty nice theme, hoping you guys could add more features to this. Keep up the good work.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->
    
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">Feature Availability!</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> This is a great product, helped us a lot and very quick to work with and implement.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->
                        </div>
                        <!-- swiper-wrapper End -->
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('./partials/footer-scripts')

    <!-- Swiper Plugin Js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

   <!-- Swiper Auth Demo Js -->
   <script src="assets/js/pages/auth-swiper.js"></script>
    
</body>

</html>