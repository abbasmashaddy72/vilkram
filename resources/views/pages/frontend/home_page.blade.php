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
                            FAQ
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                            Any Questions? Answered
                        </h2>
                        <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                            There are many variations of passages of Lorem Ipsum available but the majority have
                            suffered alteration in some form.
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
                                <div class="flex justify-end">
                                    <span
                                        class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                        {{ $item->team->name }}
                                    </span>
                                </div>
                                <h3>
                                    <a href="{{ route('feature_single', ['id' => $item->id]) }}"
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
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

    <!-- ====== About Section Start -->
    @if (!empty($about_us))
        <section id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px]">
            <div class="container">
                <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4">
                            <div class="items-center justify-between overflow-hidden border lg:flex">
                                <div
                                    class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                    <span class="inline-block px-5 py-2 mb-5 text-sm font-medium text-white bg-primary">
                                        About Us
                                    </span>
                                    <h2
                                        class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                                        {{ $about_us->title }}
                                    </h2>
                                    <p class="text-base leading-relaxed text-body-color mb-9">
                                        {{ $about_us->excerpt }}
                                    </p>
                                </div>
                                <div class="text-center">
                                    <div class="relative z-10 inline-block">
                                        <img src="{{ asset('storage/' . $about_us->image) }}" alt="image"
                                            class="mx-auto lg:ml-auto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- ====== About Section End -->

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
                            There are many variations of passages of Lorem Ipsum available but the majority have
                            suffered alteration in some form.
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
                            What our Client Say
                        </h2>
                        <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                            There are many variations of passages of Lorem Ipsum available but the majority have
                            suffered alteration in some form.
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
                                <p class="text-base tracking-wide text-body-color">
                                    “{{ $item->message }}
                                </p>
                            </div>
                            <div class="flex items-center ud-testimonial-info">
                                <div class="ud-testimonial-image w-[50px] h-[50px] rounded-full overflow-hidden mr-5">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        alt="{{ $item->n }}ame}}" />
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
    <x-frontend.teams />
    <!-- ====== Team Section End -->

    @include('components.frontend.g-reviews')
</x-guest-layout>
