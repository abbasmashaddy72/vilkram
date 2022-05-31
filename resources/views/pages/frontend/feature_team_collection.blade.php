<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        Services
    </x-frontend.banner>
    <!-- ====== Banner Section End -->
    <!-- ====== Features Section Start -->
    <section class="pt-20 pb-8" id="services">
        <div class="container">
            <div class="grid grid-cols-1">
                @foreach ($data as $item)
                    <div class="flex justify-center flex-wrap -mx-4">
                        <div class="w-full px-4">
                            <div class="mb-12 lg:mb-20">
                                <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                                    {{ $item->feature_title }}
                                </h2>
                                <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                                    {{ $item->feature_excerpt }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-4 flex-col">
                            @forelse ($item->features as $data)
                                @include('components.frontend.feature', ['item' => $data])
                            @empty
                                <div class="w-full px-4">
                                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ====== Features Section End -->
</x-guest-layout>
