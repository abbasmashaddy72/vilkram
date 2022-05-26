<div class="w-full px-4 flex">
    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
        data-wow-delay=".1s">
        <h3>
            <a href="{{ route('feature_single', ['id' => $item->id]) }}"
                class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl inline-block text-dark hover:text-primary">
                {{ $item->title }}
            </a>
        </h3>
    </div>
</div>
