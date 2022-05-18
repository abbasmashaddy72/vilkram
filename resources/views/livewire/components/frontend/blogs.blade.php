<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            @forelse ($blogs as $item)
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
        {{ $blogs->links() }}
    </div>
</section>
