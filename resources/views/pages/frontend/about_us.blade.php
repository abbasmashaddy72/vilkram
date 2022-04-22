<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        {{ __('About Us Page') }}
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <!-- ====== About Section Start -->
    @foreach ($about_s as $item)
        <section class="pt-20 lg:pt-[120px] pb-20 lg:pb-[60px] bg-[#f3f4fe]">
            <div class="container">
                <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4">
                            <div class="lg:flex items-center justify-between border overflow-hidden">
                                @if ($loop->iteration % 2 == 0)
                                    <div
                                        class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                        <h2
                                            class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                                            {{ $item->title }}
                                        </h2>
                                        <p class="text-base text-body-color mb-9 leading-relaxed">
                                            {{ $item->excerpt }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="relative inline-block z-10">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="image"
                                                class="mx-auto lg:ml-auto" />
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <div class="relative inline-block z-10">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="image"
                                                class="mx-auto lg:ml-auto" />
                                        </div>
                                    </div>
                                    <div
                                        class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                        <h2
                                            class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                                            {{ $item->title }}
                                        </h2>
                                        <p class="text-base text-body-color mb-9 leading-relaxed">
                                            {{ $item->excerpt }}
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!-- ====== About Section End -->

    <!-- ====== Team Section Start -->
    <x-frontend.teams />
    <!-- ====== Team Section End -->
</x-guest-layout>
