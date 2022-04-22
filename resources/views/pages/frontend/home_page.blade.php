<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    @push('scripts')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.mySwiper', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    @endpush
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($hero_images as $item)
                <div class="swiper-slide">
                    <img class="object-cover w-full h-96 md:h-screen" src="{{ asset('storage/' . $item) }}"
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
                    <div class="mb-12 lg:mb-20 max-w-[620px]">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            Features
                        </span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                            Main Features Of Play
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
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                        <div class="mb-12 bg-white group wow fadeInUp" data-wow-delay=".1s">
                            <div
                                class="w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10">
                                <span
                                    class="w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300"></span>
                                {!! $item->logo !!}
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark">
                                {{ $item->title }}
                            </h4>
                            <p class="mb-8 text-body-color lg:mb-11">
                                {{ $item->excerpt }}
                            </p>
                            <a href="{{ $item->link }}"
                                class="text-base font-medium text-body-color hover:text-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->

    <!-- ====== About Section Start -->
    @if (!empty($about_us))
        <section id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]">
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
    <section class="bg-[#f3f4ff] pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
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
                                    <p class="text-[#969696] text-xs">{{ $item->extra }}</p>
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

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="py-20 md:py-[120px] relative">
        <div class="absolute z-[-1] w-full h-1/2 lg:h-[45%] xl:h-1/2 bg-[#f3f4fe] top-0 left-0"></div>
        <div class="container px-4">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title mb-12 lg:mb-[150px]">
                            <span class="mb-5 text-base font-semibold text-dark">
                                CONTACT US
                            </span>
                            <h2 class="text-[35px] font-semibold">
                                Let's talk about <br />
                                Love to hear from you!
                            </h2>
                        </div>
                        <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                            <div class="flex max-w-full w-[330px] mb-8">
                                <div class="text-[32px] text-primary mr-6">
                                    <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                        <path
                                            d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                                        <path
                                            d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-6 text-lg font-semibold">Our Location</h5>
                                    <p class="text-base text-body-color">
                                        401 Broadway, 24th Floor, Orchard Cloud View, London
                                    </p>
                                </div>
                            </div>
                            <div class="flex max-w-full w-[330px] mb-8">
                                <div class="text-[32px] text-primary mr-6">
                                    <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                        <path
                                            d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-6 text-lg font-semibold">How Can We Help?</h5>
                                    <p class="text-base text-body-color">info@yourdomain.com</p>
                                    <p class="text-base text-body-color">
                                        contact@yourdomain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div class="shadow-testimonial rounded-lg bg-white py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"
                        data-wow-delay=".2s">
                        <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
                            Send us a Message
                        </h3>
                        <form>
                            <div class="mb-6">
                                <label for="fullName" class="block text-xs text-dark">Full Name*</label>
                                <input type="text" name="fullName" placeholder="Adam Gelius"
                                    class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-xs text-dark">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com"
                                    class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                            </div>
                            <div class="mb-6">
                                <label for="phone" class="block text-xs text-dark">Phone*</label>
                                <input type="text" name="phone" placeholder="+885 1254 5211 552"
                                    class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-xs text-dark">Message*</label>
                                <textarea name="message" rows="1" placeholder="type your message here"
                                    class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4 resize-none"></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-6 py-4 text-base font-medium text-white transition duration-300 ease-in-out rounded bg-primary hover:bg-dark">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->
</x-guest-layout>
