@extends(getTemplate() . '.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush

@section('content')

    @if (!empty($heroSectionData))
        @if (!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == '1')
            @push('scripts_bottom')
                <script src="/assets/default/vendors/lottie/lottie-player.js"></script>
            @endpush
        @endif
        {{-- Banner --}}
        <section style="background-color:#171717"
            class="slider-container  {{ $heroSection == '2' ? 'slider-hero-section2' : '' }}"
            @if (empty($heroSectionData['is_video_background'])) style="background-image: url('{{ $heroSectionData['hero_background'] }}')" @endif>

            @if ($heroSection == '1')
                {{-- @if (!empty($heroSectionData['is_video_background']))
                    <video playsinline autoplay muted loop id="homeHeroVideoBackground" class="img-cover">
                        <source src="{{ $heroSectionData['hero_background'] }}" type="video/mp4">
                    </video>
                @endif --}}
                <img src="./assets/default/img/custom-imgs/banner1.png" class="img-cover" alt="">
                {{-- <div class="mask"></div> --}}
            @endif

            <div class="container-fluid user-select-none">
                <div class="col-12"
                    style="padding: 0 2rem;display: flex;flex: 1;height: 100%;width: 100%;gap: 4rem;justify-content: space-between;align-items: center;padding-bottom: 4rem;/* background: linear-gradient(60deg,#303d65,#2c313b 60%,#48372c 70%); */color:white">
                    {{-- <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    
                        <style>
                            .carousel-inner img {
                                height: 400px;
                                object-fit: cover;
                            }

                            .carousel-item {
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                gap: 4rem;
                                padding: 4rem 6rem;
                                color: white;
                            }

                            .badge-container {
                                display: inline-flex;
                                margin-bottom: 0.5rem;
                                padding: 0.5rem 1.5rem;
                                background: linear-gradient(to right, #4a90e2, #b0bec5);
                                border-radius: 9999px;
                                align-items: center;
                                font-weight: 500;
                            }

                            .badge-container img {
                                width: 12px;
                                height: 12px;
                                margin-right: 0.5rem;
                            }

                            .btn-custom {
                                margin-top: 1rem;
                                background-color: #f97316;
                                color: black;
                                padding: 0.5rem 1rem;
                                border-radius: 9999px;
                                cursor: pointer;
                                transition: background-color 0.2s ease-in-out;
                                border: none;
                            }

                            .btn-custom:hover {
                                background-color: #ea580c;
                            }
                        </style>
                    </head>

                    <body>
                        <div class="container mt-5">
                            <div class="col-8 mx-auto">
                                <div id="autoCarousel" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="3000">
                                    <!-- Indicators -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#autoCarousel" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#autoCarousel" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                    </div>

                                    <!-- Carousel Items -->
                                    <div class="carousel-inner">
                                        <!-- Slide 1 -->
                                        <div class="carousel-item active">
                                            <div>
                                                <div class="badge-container">
                                                    <img src="./assets/default/img/custom-imgs/trophy.png" alt="Trophy">
                                                    <span>Design Course</span>
                                                </div>
                                                <h2 class="fw-bold display-4">UI/UX</h2>
                                                <p class="fs-5">There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered alteration in some form.</p>
                                                <button class="btn-custom">View Courses →</button>
                                            </div>
                                            <img src="./assets/default/img/custom-imgs/banner1.png"
                                                class="d-block img-fluid" alt="Slide 1">
                                        </div>

                                        <!-- Slide 2 -->
                                        <div class="carousel-item">
                                            <div>
                                                <div class="badge-container">
                                                    <img src="./assets/default/img/custom-imgs/trophy.png" alt="Trophy">
                                                    <span>Design Course</span>
                                                </div>
                                                <h2 class="fw-bold display-4">Web Development</h2>
                                                <p class="fs-5">There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered alteration in some form.</p>
                                                <button class="btn-custom">View Courses →</button>
                                            </div>
                                            <img src="./assets/default/img/custom-imgs/banner1.png"
                                                class="d-block img-fluid" alt="Slide 2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bootstrap JS -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
                    </body>

                    </html> --}}
                    <style>
                        .carousel-inner img {
                            height: 400px;
                            object-fit: cover;
                        }
                    </style>
                    <div class="col-8 container mt-5">
                        <div id="autoCarousel" class="custom-carousel">
                            <!-- Indicators -->
                            <div class="custom-carousel-indicators">
                                <button type="button" data-slide-to="0" class="active" aria-label="Slide 1"></button>
                                <button type="button" data-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            <!-- Carousel Items -->
                            <div class="custom-carousel-inner">
                                <div class="custom-carousel-item active p-4" style="display:flex;">
                                    <div class="custom-carousel-caption" style="width:50%">
                                        <h2 class="fw-bold" style="font-size:4rem">UI/UX</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <button class="custom-carousel-btn mt-16" style="margin: 2rem 0">View Courses
                                            →</button>
                                    </div>
                                    <img src="./assets/default/img/custom-imgs/banner1.png" alt="Slide 1">
                                </div>
                                <div class="custom-carousel-item p-4" style="display:flex;">
                                    <div class="custom-carousel-caption" style="width:50%">
                                        <h2 class="fw-bold" style="font-size:4rem">Web</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <button class="custom-carousel-btn" style="margin: 2rem 0">View Courses →</button>
                                    </div>
                                    <img src="./assets/default/img/custom-imgs/banner1.png" alt="Slide 2">
                                </div>
                                <div class="custom-carousel-item p-4" style="display:flex;">
                                    <div class="custom-carousel-caption" style="width:50%">
                                        <h2 class="fw-bold" style="font-size:4rem">App</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <button class="custom-carousel-btn" style="margin: 2rem 0">View Courses →</button>
                                    </div>
                                    <img src="./assets/default/img/custom-imgs/banner1.png" alt="Slide 3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .custom-carousel {
                            position: relative;
                            width: 100%;
                            overflow: hidden;
                        }

                        .custom-carousel-inner {
                            display: flex;
                            transition: transform 0.5s ease-in-out;
                        }

                        .custom-carousel-item {
                            min-width: 100%;
                            display: flex;
                            justify-content: space-between;
                            align-items: start;
                            /* background-color: black; */
                            position: relative;
                            padding: 6rem
                        }

                        .custom-carousel-item img {
                            /* width: 100%; */
                            height: 50vh;

                        }

                        .custom-carousel-caption {
                            /* position: absolute; */
                            /* bottom: 10%;
                                                                                                                                        left: 50%; */
                            /* transform: translateX(-50%); */
                            color: white;
                            /* text-align: center; */
                        }

                        .custom-carousel-btn {
                            background-color: #f97316;
                            color: black;
                            padding: 0.5rem 1rem;
                            border-radius: 9999px;
                            cursor: pointer;
                            transition: background-color 0.2s ease-in-out;
                        }

                        .custom-carousel-btn:hover {
                            background-color: #ea580c;
                        }

                        .custom-carousel-indicators {
                            position: absolute;
                            bottom: 5px;
                            left: 50%;
                            transform: translateX(-50%);
                            display: flex;
                            gap: 8px;
                        }

                        .custom-carousel-indicators button {
                            width: 10px;
                            height: 10px;
                            background-color: white;
                            border: none;
                            border-radius: 50%;
                            cursor: pointer;
                            opacity: 0.5;
                        }

                        .custom-carousel-indicators .active {
                            opacity: 1;
                            background-color: #f97316;
                        }
                    </style>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const carousel = document.querySelector(".custom-carousel-inner");
                            const indicators = document.querySelectorAll(".custom-carousel-indicators button");
                            let currentIndex = 0;
                            let interval;

                            function updateCarousel(index) {
                                currentIndex = index;
                                const offset = -index * 100;
                                carousel.style.transform = `translateX(${offset}%)`;
                                indicators.forEach((btn, i) => btn.classList.toggle("active", i === index));
                            }

                            function nextSlide() {
                                currentIndex = (currentIndex + 1) % indicators.length;
                                updateCarousel(currentIndex);
                            }

                            function startAutoSlide() {
                                interval = setInterval(nextSlide, 3000);
                            }

                            function stopAutoSlide() {
                                clearInterval(interval);
                            }

                            indicators.forEach((button, index) => {
                                button.addEventListener("click", () => {
                                    stopAutoSlide();
                                    updateCarousel(index);
                                    startAutoSlide();
                                });
                            });

                            startAutoSlide();
                        });
                    </script>


                    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> --}}




                    <div class="col-4"
                        style="flex: 1; display: flex; flex-direction: column; gap: 0.5rem; justify-content: center;">
                        <div style="display: inline-flex; justify-content: center;">
                            <div
                                style="display: inline-flex;height: auto;padding: 0.5rem 1.5rem;background: linear-gradient(to right, #4a90e2, #b0bec5);border-radius: 9999px;align-items: center;font-weight: 500;">
                                <img src="./assets/default/img/custom-imgs/trophy.png" alt="Trophy"
                                    style="display: inline;" />
                                <div style="display: inline;white-space: nowrap;padding-left: 0.5rem;">
                                    Trusted By 1 Crore+ Customers
                                </div>
                            </div>
                        </div>
                        <div>
                            <form
                                style="background-color: white;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);border-radius: 1.5rem;padding: 2rem;">
                                <h2
                                    style="font-size: 2rem;font-weight: bold;color: #2d3748;margin-bottom: 1rem;text-align: center;padding-bottom: 1.5rem;">
                                    Interested Course?
                                </h2>
                                <div style="display: flex; flex-direction: column; gap: 1rem;">
                                    <div>
                                        <label
                                            style="display: block; color: #4a5568; font-weight: bold; margin-bottom: 0.5rem;">
                                            Name
                                        </label>
                                        <input type="text" id="name" name="name" placeholder="Enter Your Name"
                                            required
                                            style="width: 100%;padding: 0.5rem;border: 1px solid #4a5568;border-radius: 9999px;outline: none;" />
                                    </div>
                                    <div>
                                        <label
                                            style="display: block; color: #4a5568; font-weight: bold; margin-bottom: 0.5rem;">
                                            Email
                                        </label>
                                        <input type="email" id="email" name="email"
                                            placeholder="Enter Your Email Address" required
                                            style="width: 100%;padding: 0.5rem;border: 1px solid #4a5568;border-radius: 9999px;outline: none;" />
                                    </div>
                                    <div>
                                        <label
                                            style="display: block; color: #4a5568; font-weight: bold; margin-bottom: 0.5rem;">
                                            Phone Number
                                        </label>
                                        <input type="tel" id="phone" name="phone"
                                            placeholder="Enter Your Phone Number" required
                                            style="width: 100%;padding: 0.5rem;border: 1px solid #4a5568;border-radius: 9999px;outline: none;" />
                                    </div>
                                    <div>
                                        <input type="checkbox" id="discount" name="discount"
                                            style="margin-right: 0.5rem;" />
                                        <label style="color: #4a5568;">Do you have a discount coupon?</label>
                                    </div>
                                    <button type="submit"
                                        style="width: 100%;background-color: #f97316;color: black;padding: 0.5rem 1rem;border-radius: 9999px;cursor: pointer;transition: background-color 0.2s ease-in-out;box-shadow: none; /* Removed button shadow */"
                                        onmouseover="this.style.backgroundColor='#ea580c'"
                                        onmouseout="this.style.backgroundColor='#f97316'">
                                        Send Message →
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if ($heroSection == '2')
                        {{-- <div class="row slider-content align-items-center hero-section2 flex-column-reverse flex-md-row">
                        <div class="col-12 col-md-7 col-lg-6">
                            <h1 class="text-secondary font-weight-bold">{{ $heroSectionData['title'] }}</h1>
                            <p class="slide-hint text-gray mt-20">{!! nl2br($heroSectionData['description']) !!}</p>

                            <form action="/search" method="get" class="d-inline-flex mt-30 mt-lg-30 w-100">
                                <div class="form-group d-flex align-items-center m-0 slider-search p-10 bg-white w-100">
                                    <input type="text" name="search" class="form-control border-0 mr-lg-50"
                                        placeholder="{{ trans('home.slider_search_placeholder') }}" />
                                    <button type="submit"
                                        class="btn btn-primary rounded-pill">{{ trans('home.find') }}</button>
                                </div>
                            </form>
                        </div> --}}

                        {{-- <div class="col-12 col-md-5 col-lg-6">
                            @if (!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == '1')
                                
                                <img src="./assets/default/img/custom-imgs/banner1.png" class="img-cover" alt="">
                            @else
                                <img src="{{ $heroSectionData['hero_vector'] }}" alt="{{ $heroSectionData['title'] }}"
                                    class="img-cover">
                            @endif
                        </div> --}}
                        {{-- </div> --}}
                    @else
                        {{-- <div class="text-center slider-content">
                        <h1>{{ $heroSectionData['title'] }}</h1>
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col-12 col-md-9 col-lg-7">
                                <p class="mt-30 slide-hint">{!! nl2br($heroSectionData['description']) !!}</p>

                                <form action="/search" method="get" class="d-inline-flex mt-30 mt-lg-50 w-100">
                                    <div class="form-group d-flex align-items-center m-0 slider-search p-10 bg-white w-100">
                                        <input type="text" name="search" class="form-control border-0 mr-lg-50"
                                            placeholder="{{ trans('home.slider_search_placeholder') }}" />
                                        <button type="submit"
                                            class="btn btn-primary rounded-pill">{{ trans('home.find') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    @endif
                </div>
        </section>
    @endif




    <body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">

        <!-- Section 3 -->
        <div style="padding: 2rem 6rem; margin-bottom: 4rem; position: relative;">
            <div style="position: absolute; right: 0;">
                <img src="./assets/default/img/custom-imgs/pattern2.png" alt="Pattern">
            </div>
            <span
                style="display: inline-block; background-color: #2b6cb0; color: white; padding: 0.5rem 2rem; border-radius: 20px; margin-bottom: 1rem;">
                What we done
            </span>
            <div style="display: flex; justify-content: space-between; margin-top: 1rem;">
                <div>
                    <div style="font-size: 2rem; font-weight: bold; width: 60%; color:white;">Why People Choose Our Courses
                    </div>
                </div>
                <div style="font-size: 1.5rem; width: 50%;  color:white;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem beatae repellat aperiam fugiat minima.
                </div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-top: 3rem;">
                <div
                    style="background-color: white; padding: 1rem; border-radius: 10px; text-align: center; transition: background 0.3s ease-in-out;">
                    <img src="./assets/default/img/custom-imgs/card-icon1.png" alt="Icon 1">
                    <div style="margin-top: 1rem; font-size: 1.2rem;">Learn UI <div style="font-weight: bold;">
                            Fundamentals</div>
                    </div>
                    <div
                        style="height: 40px; width: 40px; background-color: #f97316; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: auto; margin-top: 1rem;">
                        →</div>
                </div>
                <div style="background-color: white; padding: 1rem; border-radius: 10px; text-align: center;">
                    <img src="./assets/default/img/custom-imgs/card-icon2.png" alt="Icon 2">
                    <div style="margin-top: 1rem; font-size: 1.2rem;">Master Modern <div style="font-weight: bold;">UI
                            Trends</div>
                    </div>
                    <div
                        style="height: 40px; width: 40px; background-color: #f97316; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: auto; margin-top: 1rem;">
                        →</div>
                </div>
                <div style="background-color: white; padding: 1rem; border-radius: 10px; text-align: center;">
                    <img src="./assets/default/img/custom-imgs/card-icon3.png" alt="Icon 3">
                    <div style="margin-top: 1rem; font-size: 1.2rem;">4 Mentor <div style="font-weight: bold;">Sessions
                        </div>
                    </div>
                    <div
                        style="height: 40px; width: 40px; background-color: #f97316; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: auto; margin-top: 1rem;">
                        →</div>
                </div>
                <div style="background-color: white; padding: 1rem; border-radius: 10px; text-align: center;">
                    <img src="./assets/default/img/custom-imgs/card-icon4.png" alt="Icon 4">
                    <div style="margin-top: 1rem; font-size: 1.2rem;">Certificate Of <div style="font-weight: bold;">
                            Completion</div>
                    </div>
                    <div
                        style="height: 40px; width: 40px; background-color: #f97316; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: auto; margin-top: 1rem;">
                        →</div>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div
            style="padding: 2rem 6rem; margin-bottom: 4rem; display: flex; justify-content: space-between; align-items: center;">
            <div style="color: white;">
                <span
                    style="background-color: #e2e8f0; color: #2b6cb0; padding: 0.5rem 2rem; border-radius: 20px;">UpScale</span>
                <h1 style="font-size: 2.5rem; font-weight: bold; margin-top: 1rem;">Wants To UpScale</h1>
                <div>
                    <select
                        style="width: 100%; padding: 1rem; font-size: 1.2rem; border: 1px solid #ccc; border-radius: 5px; margin-top: 1rem;">
                        <option>Select Your Course</option>
                        <option>UI/UX Design</option>
                        <option>Web Development</option>
                        <option>App Development</option>
                    </select>
                </div>
                <div style="margin-top: 2rem;">
                    <button
                        style="background-color: #f97316; color: black; font-weight: bold; padding: 0.8rem 2rem; border-radius: 20px; cursor: pointer; transition: background 0.2s ease-in-out;">Explore
                        More →</button>
                </div>
            </div>
            <div>
                <img src="./assets/default/img/custom-imgs/pattern3.png" alt="Pattern">
            </div>
        </div>

    </body>





    {{-- About Section --}}
    <section class="container">
        <div style="display: flex; padding: 1rem 24px; justify-content: space-between; gap: 16px; color:white">
            <div style="width:50%">
                <h1 style="font-size: 3rem;">What We Offer</h1>
                <div style="font-size: 1.4rem; margin-top: 12px;">It's All About Design Courses.</div>
                <div style="font-size: 1.4rem; margin-bottom: 12px;">Because Thats What We Do.</div>
                <button
                    style="display: inline-flex; background-color: #f97316; padding: 8px 16px; border-radius: 9999px; align-items: center; gap: 4px; color: black; border: none; cursor: pointer;">
                    Explore More →
                </button>
            </div>
            <div style="flex: 1;">
                <div style="display: flex; flex-direction: row; gap: 16px; min-height: 96px;">
                    <div
                        style="background-color: #333; border-radius: 8px; color: white; display: flex; flex-direction: column; justify-content: space-between; padding: 16px 24px;">
                        <div>
                            <div
                                style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                                <span style="font-size: 3rem;">
                                    <!-- Replace this with your actual icon -->
                                    <img src="/assets/default/img/custom-imgs/mobile.png" alt="Icon 1"
                                        style="width: 100%;" />
                                </span>
                                <img src="/assets/default/img/custom-imgs/arrow-forward.png" alt="Expand Icon"
                                    style="width: 12px; " />
                            </div>
                            <h3 style="font-size: 1.4rem; font-weight: bold; margin-bottom: 24px;">Career Navigation
                                Program
                            </h3>
                        </div>
                        <p style="font-size: 1rem;">There Are Many Variations Of Passages Of Lorem Ipsum Available,</p>
                    </div>

                    <div
                        style="background-color: #333; border-radius: 8px; color: white; display: flex; flex-direction: column; justify-content: space-between; padding: 16px 24px; cursor: pointer; transition: background-color 0.3s;">
                        <div>
                            <div
                                style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                                <span style="font-size: 3rem;">
                                    <!-- Replace this with your actual icon -->
                                    <img src="/assets/default/img/custom-imgs/hourglass.png" alt="Icon 2"
                                        style="width: 100%;" />
                                </span>
                                <img src="/assets/default/img/custom-imgs/arrow-forward.png" alt="Expand Icon"
                                    style="" />
                            </div>
                            <h3 style="font-size: 1.4rem; font-weight: bold; margin-bottom: 24px;">Placement Assistance
                            </h3>
                        </div>
                        <p style="font-size: 1rem;">There Are Many Variations Of Passages Of Lorem Ipsum Available,</p>
                    </div>

                    <div
                        style="background-color: #333; border-radius: 8px; color: white; display: flex; flex-direction: column; justify-content: space-between; padding: 16px 24px; cursor: pointer; transition: background-color 0.3s;">
                        <div>
                            <div
                                style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                                <span style="font-size: 2.4rem;">
                                    <!-- Replace this with your actual icon -->
                                    <img src="/assets/default/img/custom-imgs/lighbulb.png" alt="Icon 3"
                                        style="width: 100%" />
                                </span>
                                <img src="/assets/default/img/custom-imgs/arrow-forward.png" alt="Expand Icon"
                                    style="" />
                            </div>
                            <h3 style="font-size: 1.4rem; font-weight: bold; margin-bottom: 24px;">Internship</h3>
                        </div>
                        <p style="font-size: 1rem;">There Are Many Variations Of Passages Of Lorem Ipsum Available,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Collaboration section --}}
    <section class="container">
        <div style="padding: 24px 0;  position: relative; margin-bottom: 16px;">
            <div style="width: 40%;">
                <span
                    style="padding: 6px 12px; border-radius: 9999px; background: linear-gradient(to right, #5B21B6, #2563EB); color: white;">
                    Our Partner
                </span>
                <div style="font-size: 2.4rem; margin: 16px 0; font-weight: 600; color:white">Collaboration</div>
                <div style="font-size: 0.8rem; color:white">
                    Classical Latin Literature From 45 BC, Making it Over 2000 Years old.
                    Richard McClintock, A Latin Professor At Hampden Sydney College in
                    Virginia
                </div>

            </div>
            <div class="d-flex gap-4"
                style="margin-top: 32px; padding: 0.75rem 4rem; color: white; overflow: hidden; white-space: nowrap; position: relative;">
                <div class="d-flex gap-4"
                    style="display: inline-block;white-space: nowrap; animation: scroll 15s linear infinite;">
                    <!-- Icon Card 1 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;  color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 1rem;">
                        <img src="/assets/default/img/custom-imgs/0.png" alt="Next Ace"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Next Ace</span>
                    </div>
                    <!-- Icon Card 2 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/2.png" alt="Cubic Course"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Cubic Course</span>
                    </div>
                    <!-- Icon Card 3 -->
                    <div
                        style="margin-right: 32px; width: 20% ;  color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/5.png" alt="Spiritual School"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Spiritual School</span>
                    </div>
                    <!-- Icon Card 4 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/1.png" alt="Circuit Course"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Circuit Course</span>
                    </div>

                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;  color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 1rem;">
                        <img src="/assets/default/img/custom-imgs/0.png" alt="Next Ace"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Next Ace</span>
                    </div>
                    <!-- Icon Card 2 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/2.png" alt="Cubic Course"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Cubic Course</span>
                    </div>
                    <!-- Icon Card 3 -->
                    <div
                        style="margin-right: 32px; width: 20% ;  color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/5.png" alt="Spiritual School"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Spiritual School</span>
                    </div>
                    <!-- Icon Card 4 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/1.png" alt="Circuit Course"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Circuit Course</span>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-4"
                style="margin-top: 32px; padding: 0.75rem 4rem; color: white; overflow: hidden; white-space: nowrap; position: relative;">
                <div class="d-flex gap-4"
                    style="display: inline-block;white-space: nowrap; animation: scrollRev 15s linear infinite;">
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/7.png" alt="Dream Ace"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Dream Ace</span>
                    </div>
                    <!-- Icon Card 2 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/3.png" alt="Global Tech"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Global Tech</span>
                    </div>
                    <!-- Icon Card 3 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/6.png" alt="Circle Course"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Circle Course</span>
                    </div>
                    <!-- Icon Card 4 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/4.png" alt="One Course"
                            style="width: 48px; aspect-ratio:1" />
                        <span style="font-size: 1.4rem; font-weight: 600;">One Course</span>
                    </div>

                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/7.png" alt="Dream Ace"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Dream Ace</span>
                    </div>
                    <!-- Icon Card 2 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/3.png" alt="Global Tech"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Global Tech</span>
                    </div>
                    <!-- Icon Card 3 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/6.png" alt="Circle Course"
                            style="width: 48px; height: 48px;" />
                        <span style="font-size: 1.4rem; font-weight: 600;">Circle Course</span>
                    </div>
                    <!-- Icon Card 4 -->
                    <div
                        style="margin-right: 32px; width: 20%; aspect-ratio:1;   color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px; padding: 16px;">
                        <img src="/assets/default/img/custom-imgs/4.png" alt="One Course"
                            style="width: 48px; aspect-ratio:1" />
                        <span style="font-size: 1.4rem; font-weight: 600;">One Course</span>
                    </div>
                </div>
            </div>

            <div style="width: 40%;">

                <div style="position: absolute; bottom: 0; right: 24px; z-index:-1">
                    <img src="/assets/default/img/custom-imgs/pattern1.png" alt="Pattern" />
                </div>
            </div>
        </div>
    </section>


    {{-- Statistics --}}
    @include('web.default.pages.includes.home_statistics')


    @foreach ($homeSections as $homeSection)
        @if (
            $homeSection->name == \App\Models\HomeSection::$featured_classes and
                !empty($featureWebinars) and
                !$featureWebinars->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="px-20 px-md-0">
                    <h2 class="section-title">{{ trans('home.featured_classes') }}</h2>
                    <p class="section-hint">{{ trans('home.featured_classes_hint') }}</p>
                </div>

                <div class="feature-slider-container position-relative d-flex justify-content-center mt-10 text-light">
                    <div class="swiper-container features-swiper-container pb-25">
                        <div class="swiper-wrapper py-10">
                            @foreach ($featureWebinars as $feature)
                                <div class="swiper-slide">

                                    <a href="{{ $feature->webinar->getUrl() }}">
                                        <div class="feature-slider d-flex h-100"
                                            style="background-image: url('{{ $feature->webinar->getImage() }}')">
                                            <div class="mask"></div>
                                            <div class="p-5 p-md-25 feature-slider-card">
                                                <div
                                                    class="d-flex flex-column feature-slider-body position-relative h-100">
                                                    @if ($feature->webinar->bestTicket() < $feature->webinar->price)
                                                        <span
                                                            class="badge badge-danger mb-2 ">{{ trans('public.offer', ['off' => $feature->webinar->bestTicket(true)['percent']]) }}</span>
                                                    @endif
                                                    <a href="{{ $feature->webinar->getUrl() }}">
                                                        <h3 class="card-title mt-1">{{ $feature->webinar->title }}</h3>
                                                    </a>

                                                    <div class="user-inline-avatar mt-15 d-flex align-items-center">
                                                        <div class="avatar bg-gray200">
                                                            <img src="{{ $feature->webinar->teacher->getAvatar() }}"
                                                                class="img-cover"
                                                                alt="{{ $feature->webinar->teacher->full_naem }}">
                                                        </div>
                                                        <a href="{{ $feature->webinar->teacher->getProfileUrl() }}"
                                                            target="_blank"
                                                            class="user-name font-14 ml-5">{{ $feature->webinar->teacher->full_name }}</a>
                                                    </div>

                                                    <p class="mt-25 feature-desc text-gray">{{ $feature->description }}
                                                    </p>

                                                    @include('web.default.includes.webinar.rate', [
                                                        'rate' => $feature->webinar->getRate(),
                                                    ])

                                                    <div
                                                        class="feature-footer mt-auto d-flex align-items-center justify-content-between">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" width="20" height="20"
                                                                    class="webinar-icon"></i>
                                                                <span
                                                                    class="duration ml-5 text-dark-blue font-14">{{ convertMinutesToHourAndMinute($feature->webinar->duration) }}
                                                                    {{ trans('home.hours') }}</span>
                                                            </div>

                                                            <div class="vertical-line mx-10"></div>

                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="calendar" width="20" height="20"
                                                                    class="webinar-icon"></i>
                                                                <span
                                                                    class="date-published ml-5 text-dark-blue font-14">{{ dateTimeFormat(!empty($feature->webinar->start_date) ? $feature->webinar->start_date : $feature->webinar->created_at, 'j M Y') }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="feature-price-box">
                                                            @if (!empty($feature->webinar->price) and $feature->webinar->price > 0)
                                                                @if ($feature->webinar->bestTicket() < $feature->webinar->price)
                                                                    <span
                                                                        class="real">{{ handlePrice($feature->webinar->bestTicket(), true, true, false, null, true) }}</span>
                                                                @else
                                                                    {{ handlePrice($feature->webinar->price, true, true, false, null, true) }}
                                                                @endif
                                                            @else
                                                                {{ trans('public.free') }}
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-pagination features-swiper-pagination"></div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$latest_bundles and
                !empty($latestBundles) and
                !$latestBundles->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title">{{ trans('update.latest_bundles') }}</h2>
                        <p class="section-hint">{{ trans('update.latest_bundles_hint') }}</p>
                    </div>

                    <a href="/classes?type[]=bundle" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-bundle-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach ($latestBundles as $latestBundle)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', [
                                        'webinar' => $latestBundle,
                                    ])
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination bundle-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        {{-- Upcoming Course --}}
        @if (
            $homeSection->name == \App\Models\HomeSection::$upcoming_courses and
                !empty($upcomingCourses) and
                !$upcomingCourses->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title">{{ trans('update.upcoming_courses') }}</h2>
                        <p class="section-hint">{{ trans('update.upcoming_courses_home_section_hint') }}</p>
                    </div>

                    <a href="/upcoming_courses?sort=newest" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container upcoming-courses-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach ($upcomingCourses as $upcomingCourse)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.upcoming_course_grid_card', [
                                        'upcomingCourse' => $upcomingCourse,
                                    ])
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination upcoming-courses-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$latest_classes and
                !empty($latestWebinars) and
                !$latestWebinars->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h2 class="section-title">{{ trans('home.latest_classes') }}</h2>
                        <p class="section-hint">{{ trans('home.latest_webinars_hint') }}</p>
                    </div>

                    <a href="/classes?sort=newest" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container latest-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach ($latestWebinars as $latestWebinar)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', [
                                        'webinar' => $latestWebinar,
                                    ])
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination latest-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$best_rates and
                !empty($bestRateWebinars) and
                !$bestRateWebinars->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.best_rates') }}</h2>
                        <p class="section-hint">{{ trans('home.best_rates_hint') }}</p>
                    </div>

                    <a href="/classes?sort=best_rates" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container best-rates-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach ($bestRateWebinars as $bestRateWebinar)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', [
                                        'webinar' => $bestRateWebinar,
                                    ])
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination best-rates-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$trend_categories and
                !empty($trendCategories) and
                !$trendCategories->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <h2 class="section-title">{{ trans('home.trending_categories') }}</h2>
                <p class="section-hint">{{ trans('home.trending_categories_hint') }}</p>


                <div class="swiper-container trend-categories-swiper px-12 mt-40">
                    <div class="swiper-wrapper py-20">
                        @foreach ($trendCategories as $trend)
                            <div class="swiper-slide">
                                <a href="{{ $trend->category->getUrl() }}">
                                    <div class="trending-card d-flex flex-column align-items-center w-100">
                                        <div class="trending-image d-flex align-items-center justify-content-center w-100"
                                            style="background-color: {{ $trend->color }}">
                                            <div class="icon mb-3">
                                                <img src="{{ $trend->getIcon() }}" width="10" class="img-cover"
                                                    alt="{{ $trend->category->title }}">
                                            </div>
                                        </div>

                                        <div class="item-count px-10 px-lg-20 py-5 py-lg-10">
                                            {{ $trend->category->webinars_count }} {{ trans('product.course') }}</div>

                                        <h3>{{ $trend->category->title }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination trend-categories-swiper-pagination"></div>
                </div>
            </section>
        @endif

        {{-- Ads Bannaer --}}
        @if (
            $homeSection->name == \App\Models\HomeSection::$full_advertising_banner and
                !empty($advertisingBanners1) and
                count($advertisingBanners1))
            <div class="home-sections container">
                <div class="row">
                    @foreach ($advertisingBanners1 as $banner1)
                        <div class="col-{{ $banner1->size }}">
                            <a href="{{ $banner1->link }}">
                                <img src="{{ $banner1->image }}" class="img-cover rounded-sm"
                                    alt="{{ $banner1->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        {{-- ./ Ads Bannaer --}}

        @if (
            $homeSection->name == \App\Models\HomeSection::$best_sellers and
                !empty($bestSaleWebinars) and
                !$bestSaleWebinars->isEmpty())
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.best_sellers') }}</h2>
                        <p class="section-hint">{{ trans('home.best_sellers_hint') }}</p>
                    </div>

                    <a href="/classes?sort=bestsellers" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container best-sales-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach ($bestSaleWebinars as $bestSaleWebinar)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', [
                                        'webinar' => $bestSaleWebinar,
                                    ])
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination best-sales-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$discount_classes and
                !empty($hasDiscountWebinars) and
                !$hasDiscountWebinars->isEmpty())
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.discount_classes') }}</h2>
                        <p class="section-hint">{{ trans('home.discount_classes_hint') }}</p>
                    </div>

                    <a href="/classes?discount=on" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container has-discount-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">
                            @foreach ($hasDiscountWebinars as $hasDiscountWebinar)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', [
                                        'webinar' => $hasDiscountWebinar,
                                    ])
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination has-discount-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$free_classes and
                !empty($freeWebinars) and
                !$freeWebinars->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.free_classes') }}</h2>
                        <p class="section-hint">{{ trans('home.free_classes_hint') }}</p>
                    </div>

                    <a href="/classes?free=on" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container free-webinars-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            @foreach ($freeWebinars as $freeWebinar)
                                <div class="swiper-slide">
                                    @include('web.default.includes.webinar.grid-card', [
                                        'webinar' => $freeWebinar,
                                    ])
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination free-webinars-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$store_products and
                !empty($newProducts) and
                !$newProducts->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('update.store_products') }}</h2>
                        <p class="section-hint">{{ trans('update.store_products_hint') }}</p>
                    </div>

                    <a href="/products" class="btn btn-border-white">{{ trans('update.all_products') }}</a>
                </div>

                <div class="mt-10 position-relative">
                    <div class="swiper-container new-products-swiper px-12">
                        <div class="swiper-wrapper py-20">

                            @foreach ($newProducts as $newProduct)
                                <div class="swiper-slide">
                                    @include('web.default.products.includes.card', [
                                        'product' => $newProduct,
                                    ])
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination new-products-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if (
            $homeSection->name == \App\Models\HomeSection::$testimonials and
                !empty($testimonials) and
                !$testimonials->isEmpty())
            <div class="position-relative home-sections testimonials-container">

                <div id="parallax1" class="ltr">
                    <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
                </div>

                <section class="container home-sections home-sections-swiper">
                    <div class="text-center">
                        <h2 class="section-title">{{ trans('home.testimonials') }}</h2>
                        <p class="section-hint">{{ trans('home.testimonials_hint') }}</p>
                    </div>

                    <div class="position-relative">
                        <div class="swiper-container testimonials-swiper px-12">
                            <div class="swiper-wrapper">

                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div
                                            class="testimonials-card position-relative py-15 py-lg-30 px-10 px-lg-20 rounded-sm shadow bg-white text-center">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="testimonials-user-avatar">
                                                    <img src="{{ $testimonial->user_avatar }}"
                                                        alt="{{ $testimonial->user_name }}"
                                                        class="img-cover rounded-circle">
                                                </div>
                                                <h4 class="font-16 font-weight-bold text-secondary mt-30">
                                                    {{ $testimonial->user_name }}</h4>
                                                <span
                                                    class="d-block font-14 text-gray">{{ $testimonial->user_bio }}</span>
                                                @include('web.default.includes.webinar.rate', [
                                                    'rate' => $testimonial->rate,
                                                    'dontShowRate' => true,
                                                ])
                                            </div>

                                            <p class="mt-25 text-gray font-14">{!! nl2br($testimonial->comment) !!}</p>

                                            <div class="bottom-gradient"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination testimonials-swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <div id="parallax2" class="ltr">
                    <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
                </div>

                <div id="parallax3" class="ltr">
                    <div data-depth="0.8" class="gradient-box bottom-gradient-box"></div>
                </div>
            </div>
        @endif

        @if ($homeSection->name == \App\Models\HomeSection::$subscribes and !empty($subscribes) and !$subscribes->isEmpty())
            <div class="home-sections position-relative subscribes-container pe-none user-select-none">
                <div id="parallax4" class="ltr d-none d-md-block">
                    <div data-depth="0.2" class="gradient-box left-gradient-box"></div>
                </div>

                <section class="container home-sections home-sections-swiper">
                    <div class="text-center">
                        <h2 class="section-title">{{ trans('home.subscribe_now') }}</h2>
                        <p class="section-hint">{{ trans('home.subscribe_now_hint') }}</p>
                    </div>

                    <div class="position-relative mt-30">
                        <div class="swiper-container subscribes-swiper px-12">
                            <div class="swiper-wrapper py-20">

                                @foreach ($subscribes as $subscribe)
                                    @php
                                        $subscribeSpecialOffer = $subscribe->activeSpecialOffer();
                                    @endphp

                                    <div class="swiper-slide">
                                        <div
                                            class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20">
                                            @if ($subscribe->is_popular)
                                                <span
                                                    class="badge badge-primary badge-popular px-15 py-5">{{ trans('panel.popular') }}</span>
                                            @elseif(!empty($subscribeSpecialOffer))
                                                <span
                                                    class="badge badge-danger badge-popular px-15 py-5">{{ trans('update.percent_off', ['percent' => $subscribeSpecialOffer->percent]) }}</span>
                                            @endif

                                            <div class="plan-icon">
                                                <img src="{{ $subscribe->icon }}" class="img-cover" alt="">
                                            </div>

                                            <h3 class="mt-20 font-30 text-secondary">{{ $subscribe->title }}</h3>
                                            <p class="font-weight-500 text-gray mt-10">{{ $subscribe->description }}</p>

                                            <div class="d-flex align-items-start mt-30">
                                                @if (!empty($subscribe->price) and $subscribe->price > 0)
                                                    @if (!empty($subscribeSpecialOffer))
                                                        <div class="d-flex align-items-end line-height-1">
                                                            <span
                                                                class="font-36 text-primary">{{ handlePrice($subscribe->getPrice(), true, true, false, null, true) }}</span>
                                                            <span
                                                                class="font-14 text-gray ml-5 text-decoration-line-through">{{ handlePrice($subscribe->price, true, true, false, null, true) }}</span>
                                                        </div>
                                                    @else
                                                        <span
                                                            class="font-36 text-primary line-height-1">{{ handlePrice($subscribe->price, true, true, false, null, true) }}</span>
                                                    @endif
                                                @else
                                                    <span
                                                        class="font-36 text-primary line-height-1">{{ trans('public.free') }}</span>
                                                @endif
                                            </div>

                                            <ul class="mt-20 plan-feature">
                                                <li class="mt-10">{{ $subscribe->days }}
                                                    {{ trans('financial.days_of_subscription') }}</li>
                                                <li class="mt-10">
                                                    @if ($subscribe->infinite_use)
                                                        {{ trans('update.unlimited') }}
                                                    @else
                                                        {{ $subscribe->usable_count }}
                                                    @endif
                                                    <span class="ml-5">{{ trans('update.subscribes') }}</span>
                                                </li>
                                            </ul>

                                            @if (auth()->check())
                                                <form action="/panel/financial/pay-subscribes" method="post"
                                                    class="w-100">
                                                    {{ csrf_field() }}
                                                    <input name="amount" value="{{ $subscribe->price }}"
                                                        type="hidden">
                                                    <input name="id" value="{{ $subscribe->id }}" type="hidden">

                                                    <div class="d-flex align-items-center mt-50 w-100">
                                                        <button type="submit"
                                                            class="btn btn-primary {{ !empty($subscribe->has_installment) ? '' : 'btn-block' }}">{{ trans('update.purchase') }}</button>

                                                        @if (!empty($subscribe->has_installment))
                                                            <a href="/panel/financial/subscribes/{{ $subscribe->id }}/installments"
                                                                class="btn btn-outline-primary flex-grow-1 ml-10">{{ trans('update.installments') }}</a>
                                                        @endif
                                                    </div>
                                                </form>
                                            @else
                                                <a href="/login"
                                                    class="btn btn-primary btn-block mt-50">{{ trans('update.purchase') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination subscribes-swiper-pagination"></div>
                        </div>

                    </div>
                </section>

                <div id="parallax5" class="ltr d-none d-md-block">
                    <div data-depth="0.4" class="gradient-box right-gradient-box"></div>
                </div>

                <div id="parallax6" class="ltr d-none d-md-block">
                    <div data-depth="0.6" class="gradient-box bottom-gradient-box"></div>
                </div>
            </div>
        @endif

        @if ($homeSection->name == \App\Models\HomeSection::$find_instructors and !empty($findInstructorSection))
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-light">{{ $findInstructorSection['title'] ?? '' }}
                            </h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">
                                {{ $findInstructorSection['description'] ?? '' }}</p>

                            <div class="mt-35 d-flex align-items-center">
                                @if (
                                    !empty($findInstructorSection['button1']) and
                                        !empty($findInstructorSection['button1']['title']) and
                                        !empty($findInstructorSection['button1']['link']))
                                    <a href="{{ $findInstructorSection['button1']['link'] }}"
                                        class="btn btn-primary mr-15">{{ $findInstructorSection['button1']['title'] }}</a>
                                @endif

                                @if (
                                    !empty($findInstructorSection['button2']) and
                                        !empty($findInstructorSection['button2']['title']) and
                                        !empty($findInstructorSection['button2']['link']))
                                    <a href="{{ $findInstructorSection['button2']['link'] }}"
                                        class="btn btn-outline-primary">{{ $findInstructorSection['button2']['title'] }}</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="{{ $findInstructorSection['image'] }}" class="find-instructor-section-hero"
                                alt="{{ $findInstructorSection['title'] }}">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle"
                                alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots"
                                alt="dots">

                            <div
                                class="example-instructor-card bg-white rounded-sm shadow-lg  p-5 p-md-15 d-flex align-items-center">
                                <div class="example-instructor-card-avatar">
                                    <img src="/assets/default/img/home/toutor_finder.svg" class="img-cover rounded-circle"
                                        alt="user name">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span
                                        class="font-14 font-weight-bold text-secondary d-block">{{ trans('update.looking_for_an_instructor') }}</span>
                                    <span
                                        class="text-gray font-12 font-weight-500">{{ trans('update.find_the_best_instructor_now') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- @if ($homeSection->name == \App\Models\HomeSection::$reward_program and !empty($rewardProgramSection))
            <section class="home-sections home-sections-swiper container reward-program-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="position-relative reward-program-section-hero-card">
                            <img src="{{ $rewardProgramSection['image'] }}" class="reward-program-section-hero"
                                alt="{{ $rewardProgramSection['title'] }}">

                            <div
                                class="example-reward-card bg-white rounded-sm shadow-lg p-5 p-md-15 d-flex align-items-center">
                                <div class="example-reward-card-medal">
                                    <img src="/assets/default/img/rewards/medal.png" class="img-cover rounded-circle"
                                        alt="medal">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span
                                        class="font-14 font-weight-bold text-secondary d-block">{{ trans('update.you_got_50_points') }}</span>
                                    <span
                                        class="text-gray font-12 font-weight-500">{{ trans('update.for_completing_the_course') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-light">{{ $rewardProgramSection['title'] ?? '' }}
                            </h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">
                                {{ $rewardProgramSection['description'] ?? '' }}</p>

                            <div class="mt-35 d-flex align-items-center">
                                @if (!empty($rewardProgramSection['button1']) and !empty($rewardProgramSection['button1']['title']) and !empty($rewardProgramSection['button1']['link']))
                                    <a href="{{ $rewardProgramSection['button1']['link'] }}"
                                        class="btn btn-primary mr-15">{{ $rewardProgramSection['button1']['title'] }}</a>
                                @endif

                                @if (!empty($rewardProgramSection['button2']) and !empty($rewardProgramSection['button2']['title']) and !empty($rewardProgramSection['button2']['link']))
                                    <a href="{{ $rewardProgramSection['button2']['link'] }}"
                                        class="btn btn-outline-primary">{{ $rewardProgramSection['button2']['title'] }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif --}}

        @if ($homeSection->name == \App\Models\HomeSection::$become_instructor and !empty($becomeInstructorSection))
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-light">{{ $becomeInstructorSection['title'] ?? '' }}
                            </h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">
                                {{ $becomeInstructorSection['description'] ?? '' }}</p>

                            <div class="mt-35 d-flex align-items-center">
                                @if (
                                    !empty($becomeInstructorSection['button1']) and
                                        !empty($becomeInstructorSection['button1']['title']) and
                                        !empty($becomeInstructorSection['button1']['link']))
                                    <a href="{{ empty($authUser) ? '/login' : ($authUser->isUser() ? $becomeInstructorSection['button1']['link'] : '/panel/financial/registration-packages') }}"
                                        class="btn btn-primary mr-15">{{ $becomeInstructorSection['button1']['title'] }}</a>
                                @endif

                                @if (
                                    !empty($becomeInstructorSection['button2']) and
                                        !empty($becomeInstructorSection['button2']['title']) and
                                        !empty($becomeInstructorSection['button2']['link']))
                                    <a href="{{ empty($authUser) ? '/login' : ($authUser->isUser() ? $becomeInstructorSection['button2']['link'] : '/panel/financial/registration-packages') }}"
                                        class="btn btn-outline-primary">{{ $becomeInstructorSection['button2']['title'] }}</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="{{ $becomeInstructorSection['image'] }}" class="find-instructor-section-hero"
                                alt="{{ $becomeInstructorSection['title'] }}">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle"
                                alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots"
                                alt="dots">

                            <div
                                class="example-instructor-card bg-white rounded-sm shadow-lg border p-5 p-md-15 d-flex align-items-center">
                                <div class="example-instructor-card-avatar">
                                    <img src="/assets/default/img/home/become_instructor.svg"
                                        class="img-cover rounded-circle" alt="user name">
                                </div>

                                <div class="flex-grow-1 ml-15">
                                    <span
                                        class="font-14 font-weight-bold text-secondary d-block">{{ trans('update.become_an_instructor') }}</span>
                                    <span
                                        class="text-gray font-12 font-weight-500">{{ trans('update.become_instructor_tagline') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($homeSection->name == \App\Models\HomeSection::$forum_section and !empty($forumSection))
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mt-20 mt-lg-0">
                        <div class="position-relative ">
                            <img src="{{ $forumSection['image'] }}" class="find-instructor-section-hero"
                                alt="{{ $forumSection['title'] }}">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle"
                                alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots"
                                alt="dots">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-light">{{ $forumSection['title'] ?? '' }}</h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">
                                {{ $forumSection['description'] ?? '' }}</p>

                            <div class="mt-35 d-flex align-items-center">
                                @if (
                                    !empty($forumSection['button1']) and
                                        !empty($forumSection['button1']['title']) and
                                        !empty($forumSection['button1']['link']))
                                    <a href="{{ $forumSection['button1']['link'] }}"
                                        class="btn btn-primary mr-15">{{ $forumSection['button1']['title'] }}</a>
                                @endif

                                @if (
                                    !empty($forumSection['button2']) and
                                        !empty($forumSection['button2']['title']) and
                                        !empty($forumSection['button2']['link']))
                                    <a href="{{ $forumSection['button2']['link'] }}"
                                        class="btn btn-outline-primary">{{ $forumSection['button2']['title'] }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($homeSection->name == \App\Models\HomeSection::$video_or_image_section and !empty($boxVideoOrImage))
            <section class="home-sections home-sections-swiper position-relative">
                <div class="home-video-mask"></div>
                <div class="container home-video-container d-flex flex-column align-items-center justify-content-center position-relative"
                    style="background-image: url('{{ $boxVideoOrImage['background'] ?? '' }}')">
                    <a href="{{ $boxVideoOrImage['link'] ?? '' }}"
                        class="home-video-play-button d-flex align-items-center justify-content-center position-relative">
                        <i data-feather="play" width="36" height="36" class=""></i>
                    </a>

                    <div class="mt-50 pt-10 text-center">
                        <h2 class="home-video-title">{{ $boxVideoOrImage['title'] ?? '' }}</h2>
                        <p class="home-video-hint mt-10">{{ $boxVideoOrImage['description'] ?? '' }}</p>
                    </div>
                </div>
            </section>
        @endif

        @if ($homeSection->name == \App\Models\HomeSection::$instructors and !empty($instructors) and !$instructors->isEmpty())
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.instructors') }}</h2>
                        <p class="section-hint">{{ trans('home.instructors_hint') }}</p>
                    </div>

                    <a href="/instructors" class="btn btn-border-white">{{ trans('home.all_instructors') }}</a>
                </div>

                <div class="position-relative mt-20 ltr">
                    <div class="owl-carousel customers-testimonials instructors-swiper-container">

                        @foreach ($instructors as $instructor)
                            <div class="item">
                                <div class="shadow-effect">
                                    <div
                                        class="instructors-card d-flex flex-column align-items-center justify-content-center">
                                        <div class="instructors-card-avatar">
                                            <img src="{{ $instructor->getAvatar(108) }}"
                                                alt="{{ $instructor->full_name }}" class="rounded-circle img-cover">
                                        </div>
                                        <div class="instructors-card-info mt-10 text-center">
                                            <a href="{{ $instructor->getProfileUrl() }}" target="_blank">
                                                <h3 class="font-16 font-weight-bold text-dark-blue">
                                                    {{ $instructor->full_name }}</h3>
                                            </a>

                                            <p class="font-14 text-gray mt-5">{{ $instructor->bio }}</p>
                                            <div class="stars-card d-flex align-items-center justify-content-center mt-10">
                                                @php
                                                    $i = 5;
                                                @endphp
                                                @while (--$i >= 5 - $instructor->rates())
                                                    <i data-feather="star" width="20" height="20"
                                                        class="active"></i>
                                                @endwhile
                                                @while ($i-- >= 0)
                                                    <i data-feather="star" width="20" height="20"
                                                        class=""></i>
                                                @endwhile
                                            </div>

                                            @if (!empty($instructor->hasMeeting()))
                                                <a href="{{ $instructor->getProfileUrl() }}?tab=appointments"
                                                    class="btn btn-primary btn-sm rounded-pill mt-15">{{ trans('home.reserve_a_live_class') }}</a>
                                            @else
                                                <a href="{{ $instructor->getProfileUrl() }}"
                                                    class="btn btn-primary btn-sm rounded-pill mt-15">{{ trans('public.profile') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        @endif

        {{-- Ads Bannaer --}}
        @if (
            $homeSection->name == \App\Models\HomeSection::$half_advertising_banner and
                !empty($advertisingBanners2) and
                count($advertisingBanners2))
            <div class="home-sections container">
                <div class="row">
                    @foreach ($advertisingBanners2 as $banner2)
                        <div class="col-{{ $banner2->size }}">
                            <a href="{{ $banner2->link }}">
                                <img src="{{ $banner2->image }}" class="img-cover rounded-sm"
                                    alt="{{ $banner2->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        {{-- ./ Ads Bannaer --}}

        @if (
            $homeSection->name == \App\Models\HomeSection::$organizations and
                !empty($organizations) and
                !$organizations->isEmpty())
            <section class="home-sections home-sections-swiper container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.organizations') }}</h2>
                        <p class="section-hint">{{ trans('home.organizations_hint') }}</p>
                    </div>

                    <a href="/organizations" class="btn btn-border-white">{{ trans('home.all_organizations') }}</a>
                </div>

                <div class="position-relative mt-20">
                    <div class="swiper-container organization-swiper-container px-12">
                        <div class="swiper-wrapper py-20">

                            @foreach ($organizations as $organization)
                                <div class="swiper-slide">
                                    <div
                                        class="home-organizations-card d-flex flex-column align-items-center justify-content-center">
                                        <div class="home-organizations-avatar">
                                            <img src="{{ $organization->getAvatar(120) }}"
                                                class="img-cover rounded-circle" alt="{{ $organization->full_name }}">
                                        </div>
                                        <a href="{{ $organization->getProfileUrl() }}"
                                            class="mt-25 d-flex flex-column align-items-center justify-content-center">
                                            <h3 class="home-organizations-title">{{ $organization->full_name }}</h3>
                                            <p class="home-organizations-desc mt-10">{{ $organization->bio }}</p>
                                            <span
                                                class="home-organizations-badge badge mt-15">{{ $organization->webinars_count }}
                                                {{ trans('panel.classes') }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="swiper-pagination organization-swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @if ($homeSection->name == \App\Models\HomeSection::$blog and !empty($blog) and !$blog->isEmpty())
            <section class="home-sections container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2 class="section-title">{{ trans('home.blog') }}</h2>
                        <p class="section-hint">{{ trans('home.blog_hint') }}</p>
                    </div>

                    <a href="/blog" class="btn btn-border-white">{{ trans('home.all_blog') }}</a>
                </div>

                <div class="row mt-35">

                    @foreach ($blog as $post)
                        <div class="col-12 col-md-4 col-lg-4 mt-20 mt-lg-0">
                            @include('web.default.blog.grid-list', ['post' => $post])
                        </div>
                    @endforeach

                </div>
            </section>
        @endif
    @endforeach


    <div
        style="
    padding: 0 6rem;
    margin: 9rem 0;
    text-align: center;
    position: relative;
    color:white
  ">
        <span
            style="
      padding: 0.5rem 2rem;
      background-color: #4a90e2; /* Secondary Blue */
      border-radius: 9999px;
      display: inline-block;
    ">
            Journey
        </span>
        <div style="
      margin-top: 2rem;
      font-size: 3rem;
      font-weight: 600;
    ">
            Our Student Journey
        </div>
        <div
            style="
      display: flex;
      margin-top: 4rem;
      gap: 3rem;
      text-align: left;
      align-items: center;
    ">
            <div
                style="
        width: 50%;
        height: 24rem;
        background-color: white;
        border-radius: 1rem;
      ">
            </div>
            <div style="width: 33.333%;">
                <span
                    style="
          font-size: 1.5rem;
          color: #4a90e2; /* Secondary Blue */
          display: block;
        ">
                    2024
                </span>
                <div style="font-size: 2rem; margin-top: 0.5rem;">
                    Presenting one million Joiner Through Online Ai Course Service
                </div>
                <div style="
          text-align: justify;
          margin: 1rem 0;
        ">
                    Classical Latin literature from 45 BC, making it over 2000 years old.
                    Richard McClintock, a Latin professor at Hampden Sydney College in
                    Virginia.
                </div>
                <div
                    style="
                        display: inline-flex;
                        background-color: #fbc02d; /* Primary Yellow */
                        padding: 0.5rem 1rem;
                        border-radius: 9999px;
                        align-items: center;
                        gap: 0.25rem;
                        color: black;
                    ">
                    Join Now →
                </div>
            </div>
        </div>
        <div
            style="
      margin-top: 9rem;
      height: 20rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    ">
            <img src="./assets/default/img/custom-imgs/timeline.png" alt="Timeline" />
        </div>
        <div
            style="
      position: absolute;
      z-index: -10;
      top: 25%;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      inset: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(
        circle,
        #141414c8 20%,
        #171717 30% /* Primary Blue */
      );
    ">
            <img src="./assets/default/img/custom-imgs/mapPattern.png" alt="Map Pattern" />
        </div>
    </div>



@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
@endpush
