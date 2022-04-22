<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        Features Page
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

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
</x-guest-layout>
