<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        {{ $data->name }}
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <section class="pt-20 lg:pt-[60px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="lg:flex items-center justify-between overflow-hidden">
                        <div
                            class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Qualification:
                                <p class="text-lg text-dark inline">
                                    {{ $data->qualification }}
                                </p>
                            </div>
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Department:
                                <p class="text-lg text-dark inline">
                                    {{ $data->department }}
                                </p>
                            </div>
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Profile:
                            </div>
                            <p class="text-base text-body-color mb-3 leading-relaxed">
                                {{ $data->about }}
                            </p>
                            <div class="text-center mt-10">
                                <a href="{{ route('book_appointment', ['team_id' => $data->id]) }}"
                                    class="px-3 py-2 bg-primary hover:bg-secondary font-semibold text-white text-lg rounded-xl hover:from-secondary hover:to-secondary transition ease-in-out duration-500">Book
                                    Appointment</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="relative inline-block z-10">
                                <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                                    class="mx-auto lg:ml-auto" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Grip -->
                <div class="flex flex-wrap -mx-4 mt-6">
                    <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                            {{ $data->feature_title }}
                        </h2>
                        <span class="h-[2px] bg-primary w-96 mb-10 inline-block"></span>
                    </div>
                    <!-- First Repeater -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 md:gap-5 mx-auto">
                        <div class="flex justify-center flex-wrap -mx-4">
                            <div class="flex flex-wrap -mx-4 flex-col">
                                @forelse ($data->features as $item)
                                    @include('components.frontend.feature', ['item' => $item])
                                @empty
                                    <div class="w-full px-4">
                                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                    <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                        Blogs</h2>
                    <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
                </div>
                <!-- First Repeater -->
                @forelse ($data->blogs as $item)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('blog_single', ['id' => $item->id]) }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                                </a>
                            </div>
                            <div>
                                <div class="flex justify-between">
                                    <span
                                        class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                        {{ $item->created_at->diffForHumans() }}
                                    </span>
                                    <span
                                        class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                        {{ $item->team->name }}
                                    </span>
                                </div>
                                <h3>
                                    <a href="{{ route('blog_single', ['id' => $item->id]) }}"
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
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

</x-guest-layout>
