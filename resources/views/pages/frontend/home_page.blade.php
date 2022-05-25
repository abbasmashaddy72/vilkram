<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    @push('scripts')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.mySwiper', {
                parallax: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    @endpush
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($slider_images as $item)
                <div class="swiper-slide">
                    <img class="object-cover w-full h-96 md:h-screen" src="{{ asset('storage/' . $item->image) }}"
                        alt="image" />
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- ====== Features Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-8 lg:pb-[70px]" id="services">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            Services
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                            Services Performed by Doctors in Our Clinic
                        </h2>
                        <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                            {{ $features_excerpt }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                @foreach ($features as $item)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('feature_single', ['id' => $item->id]) }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                                </a>
                            </div>
                            <div>
                                <h3>
                                    <a href="{{ route('feature_single', ['id' => $item->id]) }}"
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color text-justify">
                                    {{ $item->excerpt }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex items-center justify-center">
                <a href="{{ route('features') }}"
                    class="px-7 py-5 bg-primary font-semibold text-white text-lg rounded-xl hover:bg-secondary transition ease-in-out duration-500">More
                    Services</a>
            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->

    <!-- ====== Faq Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                            Any Questions? Answered
                        </h2>
                        <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                            {{ $faq_excerpt }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4">
                @foreach ($faqs as $item)
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp"
                            data-wow-delay=".1s">
                            <button class="flex items-center w-full text-left faq-btn">
                                <div
                                    class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-primary text-primary bg-opacity-5 mr-5">
                                    <svg width="17" height="10" viewBox="0 0 17 10" class="fill-current icon">
                                        <path
                                            d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                            fill="#3056D3" stroke="#3056D3" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-base font-semibold text-black sm:text-lg">
                                        {{ $item->question }}
                                    </h4>
                                </div>
                            </button>
                            <div class="faq-content pl-[62px] hidden">
                                <p class="py-3 text-base leading-relaxed text-body-color">
                                    {{ $item->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== Faq Section End -->

    <!-- ====== Testimonials Start ====== -->
    <section id="testimonials" class="pt-20 md:pt-[120px]">
        <div class="container px-4">
            <div class="flex flex-wrap">
                <div class="w-full mx-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            Testimonials
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                            What our Patients Say
                        </h2>
                        <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                            {{ $review_excerpt }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap">
                @foreach ($reviews as $item)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="p-8 mb-12 bg-white ud-single-testimonial shadow-testimonial wow fadeInUp"
                            data-wow-delay=".1s">
                            <div class="flex items-center mb-3 ud-testimonial-ratings">
                                @for ($i = 1; $i <= $item->stars; $i++)
                                    <span class="text-[#fbb040] mr-1">
                                        <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                                            <path
                                                d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                                        </svg>
                                    </span>
                                @endfor
                                @for ($i = 1; $i <= 5 - $item->stars; $i++)
                                    <span class="text-[#687381] mr-1">
                                        <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                                            <path
                                                d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                                        </svg>
                                    </span>
                                @endfor
                            </div>
                            <div class="mb-6 ud-testimonial-content">
                                <p class="text-base tracking-wide text-body-color text-justify">
                                    “{{ $item->message }}
                                </p>
                            </div>
                            <div class="flex items-center ud-testimonial-info">
                                <div class="ud-testimonial-image w-[50px] h-[50px] rounded-full overflow-hidden mr-5">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" />
                                </div>
                                <div class="ud-testimonial-meta">
                                    <h4 class="text-sm font-semibold">{{ $item->name }}</h4>
                                    <p class="text-[#969696] text-xs">{{ $item->team->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Testimonials End ====== -->

    <!-- ====== Team Section Start -->
    <section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] max-w-[620px]">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            Our Doctors
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                            Meet Our Doctors
                        </h2>
                        <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                            {{ $team_excerpt }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-around -mx-4">
                @foreach ($teams as $item)
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                        <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
                            <div class="relative rounded-full z-10 mx-auto mb-6">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="w-full rounded-full h-96 w-80 object-cover" />
                                <span class="absolute top-0 left-0 z-[-1]">
                                    <svg width="71" height="82" viewBox="0 0 71 82" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="1.29337" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                                        <circle cx="68.807" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                                        <circle cx="57.9443" cy="80.7066" r="1.29337"
                                            transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="69.3249" r="1.29337"
                                            transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="69.3249" r="1.29337"
                                            transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="69.3249" r="1.29337"
                                            transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="69.3249" r="1.29337"
                                            transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="69.325" r="1.29337"
                                            transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                                        <circle cx="68.807" cy="69.325" r="1.29337"
                                            transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                                        <circle cx="57.9433" cy="69.325" r="1.29337"
                                            transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="57.9433" r="1.29337"
                                            transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="24.0568" r="1.29337"
                                            transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="57.9433" r="1.29337"
                                            transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="24.0568" r="1.29337"
                                            transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="57.9433" r="1.29337"
                                            transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="24.0568" r="1.29337"
                                            transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="57.9433" r="1.29337"
                                            transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="24.0568" r="1.29337"
                                            transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="57.9431" r="1.29337"
                                            transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="24.0567" r="1.29337"
                                            transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                                        <circle cx="68.807" cy="57.9431" r="1.29337"
                                            transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                                        <circle cx="68.807" cy="24.0567" r="1.29337"
                                            transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                                        <circle cx="57.9433" cy="57.9431" r="1.29337"
                                            transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                                        <circle cx="57.9443" cy="24.0567" r="1.29337"
                                            transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                                        <circle cx="68.807" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                                        <circle cx="68.807" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                                        <circle cx="57.9433" cy="46.5615" r="1.29337"
                                            transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                                        <circle cx="57.9443" cy="12.6751" r="1.29337"
                                            transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="35.1798" r="1.29337"
                                            transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                                        <circle cx="1.29337" cy="1.2933" r="1.29337"
                                            transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="35.1798" r="1.29337"
                                            transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                                        <circle cx="12.6747" cy="1.2933" r="1.29337"
                                            transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="35.1798" r="1.29337"
                                            transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                                        <circle cx="24.0575" cy="1.29336" r="1.29337"
                                            transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="35.1798" r="1.29337"
                                            transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                                        <circle cx="35.4379" cy="1.29336" r="1.29337"
                                            transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="35.18" r="1.29337"
                                            transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                                        <circle cx="46.8197" cy="1.29354" r="1.29337"
                                            transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                                        <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)"
                                            fill="#3056D3" />
                                        <circle cx="68.807" cy="1.29354" r="1.29337"
                                            transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                                        <circle cx="57.9443" cy="35.18" r="1.29337"
                                            transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                                        <circle cx="57.9443" cy="1.29354" r="1.29337"
                                            transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
                                    </svg>
                                </span>
                                <span class="absolute bottom-0 right-0">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                                            stroke="#13C296" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-2 text-lg font-medium text-dark">
                                    {{ $item->name }}
                                </h4>
                                <p class="mb-5 text-sm font-medium text-body-color">
                                    {{ $item->qualification }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ====== Team Section End -->

    @include('components.frontend.g-reviews')
</x-guest-layout>
