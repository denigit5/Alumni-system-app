<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Carousel Section -->
                <div id="static-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel Wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                        <!-- Slide 1: Create Portfolio -->
                        <div style="height: 100vh;" class="duration-700 ease-in-out relative flex items-center justify-center" data-carousel-item>
                            <!-- Background Image -->
                            <img style="transform: scaleX(-1);" src="/images/backrun2.jpg" class="absolute block w-full h-full object-cover" alt="Create Portfolio Background">
                            <!-- Overlay with Text and Buttons -->
                            <div style="background-color: rgba(0, 0, 0, 0.7); opacity: 0.5;" class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex flex-col items-center justify-center p-4 text-center animate-slide-in">
                                <h3 class="text-4xl font-bold mb-4" style="color: #FA3535; margin-top: -15rem;">Create Your Portfolio</h3>
                                <p class="mb-4 text-white text-lg" style="width: 50%;">You can build a comprehensive profile including education, work experience, skills, and projects, making it easy to showcase their journey.</p>
                                <a href="{{ route('portfolio') }}" class="bg-red-100 px-6 py-3 bg-opacity-50 hover:bg-red-600">Get Started</a>
                            </div>
                        </div>

                        <!-- Slide 2: Publish Projects -->
                        <div style="height: 100vh;" class="hidden duration-700 ease-in-out relative flex items-center justify-center" data-carousel-item>
                            <!-- Background Image -->
                            <img src="/images/backrun1.jpg" class="absolute block w-full h-full object-cover" alt="Publish Projects Background">
                            <!-- Overlay with Text and Buttons -->
                            <div style="background-color: rgba(0, 0, 0, 0.7); opacity: 0.5;" class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex flex-col items-center justify-center p-4 text-center animate-slide-in">
                                <h3 class="text-4xl font-bold mb-4" style="color: #FA3535; margin-top: -15rem;">Publish Your Projects</h3>
                                <p class="mb-4 text-white text-lg" style="width: 50%;">Share your key projects and achievements to attract potential employers and highlight your expertise.</p>
                                <a href="{{ route('projects') }}" class="bg-red-100 px-6 py-3 bg-opacity-50 hover:bg-red-600">Share Now</a>
                            </div>
                        </div>

                        <!-- Slide 3: Job Search and Application -->
                        <div style="height: 100vh;" class="hidden duration-700 ease-in-out relative flex items-center justify-center" data-carousel-item>
                            <!-- Background Image -->
                            <img src="/images/backrun3.jpg" class="absolute block w-full h-full object-cover" alt="Job Search and Application Background">
                            <!-- Overlay with Text and Buttons -->
                            <div style="background-color: rgba(0, 0, 0, 0.7); opacity: 0.5;" class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex flex-col items-center justify-center p-4 text-center animate-slide-in">
                                <h3 class="text-4xl font-bold mb-4" style="color: #FA3535; margin-top: -15rem;">Job Search and Application</h3>
                                <p class="mb-4 text-white text-lg" style="width: 50%;">Explore job postings tailored to your skills and apply directly, streamlining your job search.</p>
                                <a href="{{ route('job_search') }}" class="bg-red-100 px-6 py-3 bg-opacity-50 hover:bg-red-600">Find Jobs</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-gray-400" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-gray-400" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>

                    <!-- Slider Controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4"></path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Career Resources</h2>
        <!-- Resources List -->
            <ul class="space-y-8">
                    <!-- Add animation class to each card for a fade-in effect -->
                    <li class="bg-white p-6 shadow-sm border-l-8 border-[#FA3535] animate-fadeInUp" style="width: 70%; margin-left: 5%;">
                        <a href="{{ route('building_a_strong_portfolio') }}" class="text-black hover:text-red-500 text-2xl font-extrabold block mb-2">Building a Strong Portfolio</a>
                        <p class="text-gray-700 text-lg leading-relaxed">Explore essential tips to create a polished portfolio that showcases your skills and captivates recruiters, making your profile standout.</p>
                    </li>

                    <li class="bg-white p-6 shadow-sm border-l-8 border-blue-500 animate-fadeInUp" style="width: 70%; margin-left: 5%;">
                        <a href="{{ route('effective_resume_writing') }}" class="text-black hover:text-red-500 text-2xl font-extrabold block mb-2">Effective Resume Writing</a>
                        <p class="text-gray-700 text-lg leading-relaxed">Learn how to craft a standout resume with clear formatting, impactful language, and relevant achievements, maximizing your visibility.</p>
                    </li>

                    <li class="bg-white p-6 shadow-sm border-l-8 border-green-500 animate-fadeInUp" style="width: 70%; margin-left: 5%;">
                        <a href="{{ route('networking_tips') }}" class="text-black hover:text-red-500 text-2xl font-extrabold block mb-2">Networking Tips for Job Seekers</a>
                        <p class="text-gray-700 text-lg leading-relaxed">Master networking by learning how to approach industry professionals, use LinkedIn effectively, and make a lasting impression.</p>
                    </li>

                    <li class="bg-white p-6 shadow-sm border-l-8 border-yellow-500 animate-fadeInUp" style="width: 70%; margin-left: 5%;">
                        <a href="{{ route('building_your_personal_brand') }}" class="text-black hover:text-red-500 text-2xl font-extrabold block mb-2">Building Your Personal Brand</a>
                        <p class="text-gray-700 text-lg leading-relaxed">Discover how to cultivate a personal brand that represents your unique strengths, setting you apart from the competition in your field.</p>
                    </li>
            </ul>
    </div>
</div>

<!-- Additional Section for More Opportunities -->
<div class="bg-white py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">More Opportunities</h2>

        <!-- Additional Resource Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Item: Mentorship Programs -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-xl font-semibold text-[#FA3535] mb-4">Mentorship Programs</h3>
                <p class="text-gray-700">Find mentorship programs connecting you with professionals for career advice and guidance.</p>
                <a href="{{ route('mentorship_programs') }}" class="text-blue-700 hover:text-red-500 mt-4 block font-semibold">Learn More</a>
            </div>

            <!-- Item: Alumni Success Stories -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-xl font-semibold text-[#FA3535] mb-4">Alumni Success Stories</h3>
                <p class="text-gray-700">Read inspiring stories of alumni who navigated their careers successfully and made significant impacts.</p>
                <a href="{{ route('mastering_job_interviews') }}" class="text-blue-700 hover:text-red-500 mt-4 block font-semibold">Explore Stories</a>
            </div>

            <!-- Item: Partner Companies -->
            <div class="bg-gray-50 p-8 shadow-sm text-center">
                <h3 class="text-xl font-semibold text-[#FA3535] mb-4">Partner Companies</h3>
                <p class="text-gray-700">Explore opportunities with partner companies offering job openings and internships.</p>
                <a href="{{ route('partner_companies') }}" class="text-blue-700 hover:text-red-500 mt-4 block font-semibold">View Partners</a>
            </div>
        </div>
    </div>
</div>

    </div>

    <!-- Custom CSS for Animation -->
    <style>
        .animate-slide-in {
            animation: slideIn 1.5s ease-in-out forwards;
            opacity: 0;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-30px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
        }

      /* Apply animation with a delay */
      .animate-fadeInUp {
        animation: fadeInUp 1s ease-in-out forwards;
      }
      .scroll-fade-up {
           opacity: 0;
           animation: fadeInUp 0.6s ease forwards;
        }
    </style>

    <!-- JavaScript for Carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselItems = document.querySelectorAll('[data-carousel-item]');
            let currentIndex = 0;
            const totalSlides = carouselItems.length;
            const intervalTime = 5000;
            let interval;

            function showSlide(index) {
    carouselItems.forEach((slide, idx) => {
        slide.classList.toggle('hidden', idx !== index);
        if (idx === index) {
            slide.classList.add('animate-slide-in');
        }
    });

    const indicators = document.querySelectorAll('[data-carousel-slide-to]');
    indicators.forEach((indicator, idx) => {
        if (idx === index) {
            indicator.classList.add('bg-white');
            indicator.classList.remove('bg-gray-400');
            indicator.setAttribute('aria-current', 'true');
        } else {
            indicator.classList.add('bg-gray-400');
            indicator.classList.remove('bg-white');
            indicator.removeAttribute('aria-current');
        }
    });
}


            function startCarousel() {
                interval = setInterval(() => {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    showSlide(currentIndex);
                }, intervalTime);
            }

            document.querySelector('[data-carousel-prev]').addEventListener('click', function() {
                clearInterval(interval);
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                showSlide(currentIndex);
                startCarousel();
            });

            document.querySelector('[data-carousel-next]').addEventListener('click', function() {
                clearInterval(interval);
                currentIndex = (currentIndex + 1) % totalSlides;
                showSlide(currentIndex);
                startCarousel();
            });

            showSlide(currentIndex);
            startCarousel();

            const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("scroll-fade-up");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
        );

    document.querySelectorAll(".fade-up-card").forEach(card => {
        observer.observe(card);
    });
        });
    </script>
</x-app-layout>
