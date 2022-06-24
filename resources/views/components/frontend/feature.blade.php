<div class="flex in-line">
    @if ($team_id == 4)
        <div class="items-center px-4 flex">
            <img src={{ asset('images/svg/li-logo.png') }} class="h-16 w-20" />
        </div>
    @else
        <div class="items-center px-4 flex mb-10">
            <img src={{ asset('images/svg/li-logo.png') }} class="h-16 w-20" />
        </div>
    @endif
    <div class="w-full px-4 flex">
        @if ($team_id == 4)
            <div class="group wow fadeInUp p-4 rounded-lg flex-1" data-wow-delay=".1s">
                <h3>
                    <div class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl inline-block text-dark">
                        {{ $item->title }}
                    </div>
                </h3>
            </div>
        @else
            <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
                data-wow-delay=".1s">
                <h3>
                    <a href="{{ route('feature_single', ['id' => $item->id]) }}"
                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl inline-block text-dark hover:text-primary">
                        {{ $item->title }}
                    </a>
                </h3>
            </div>
        @endif
    </div>

</div>
