<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        Services
    </x-frontend.banner>
    <!-- ====== Banner Section End -->
    <!-- ====== Features Section Start -->
    @forelse ($features as $item)
        <section class="pt-20 pb-8" id="services">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mb-12 lg:mb-20 max-w-[620px]">
                            <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                                {{ $item->feature_title }}
                            </h2>
                            <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                                {{ $item->feature_excerpt }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    @forelse ($item->features as $data)
                        <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                            <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
                                data-wow-delay=".1s">
                                <div class="rounded overflow-hidden mb-8">
                                    <a href="{{ route('feature_single', ['id' => $data->id]) }}"
                                        class="block">
                                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}"
                                            class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                                    </a>
                                </div>
                                <div>
                                    <h3>
                                        <a href="{{ route('feature_single', ['id' => $data->id]) }}"
                                            class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                            {{ $data->title }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="w-full px-4">
                            <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    @endforeach

    <!-- ====== Features Section End -->
</x-guest-layout>
