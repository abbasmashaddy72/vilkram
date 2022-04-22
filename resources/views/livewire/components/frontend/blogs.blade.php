<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            @foreach ($blogs as $item)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-8">
                            <a href="{{ route('blogDetails') }}" class="block">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="image"
                                    class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                            </a>
                        </div>
                        <div>
                            <h3>
                                <a href="{{ route('blogDetails') }}"
                                    class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
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
        {{ $blogs->links() }}
    </div>
</section>
