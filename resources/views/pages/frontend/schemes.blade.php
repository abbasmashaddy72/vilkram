<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        {{ __('Schemes') }}
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <div class="flex flex-wrap -mx-4">
        <!-- First Repeater -->
        @foreach ($data as $item)
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                    data-wow-delay=".1s">
                    <div class="rounded overflow-hidden mb-8">
                        <a href="{{ $item->link }}" class="block" target="_blank">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                        </a>
                    </div>
                    <div>
                        <h3>
                            <a href="{{ $item->link }}"
                                class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                {{ $item->name }}
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-guest-layout>
