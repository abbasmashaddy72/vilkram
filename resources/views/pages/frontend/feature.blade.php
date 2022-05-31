<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        Services
    </x-frontend.banner>
    <!-- ====== Banner Section End -->
    <!-- ====== Features Section Start -->
    <section class="pt-20 pb-8" id="services">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                @foreach ($features as $item)
                    <div class="w-full md:w-1/2 px-4">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
                            data-wow-delay=".1s">
                            <h3 class="text-center">
                                <a href="{{ route('feature_team_collection', ['team_id' => $item->id]) }}"
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl inline-block text-dark hover:text-primary">
                                    {{ $item->feature_title }}
                                </a>
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ====== Features Section End -->
</x-guest-layout>
