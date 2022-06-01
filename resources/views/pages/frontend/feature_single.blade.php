@push('styles')
    @include('includes.backend.ckeditor_style')
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('oembed[url]').forEach(element => {
                // get just the code for this youtube video from the url
                let vCode = element.attributes.url.value.split('?v=')[1];
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML = `
    <div class="aspect-w-16 aspect-h-9">
        <iframe src="https://www.youtube.com/embed/${vCode}?rel=0" width="800" height="450" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>`;
            });
        })
    </script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('p > a').forEach(element => {
                // get just the code for this youtube video from the url
                let href = element.attributes.href.value;
                let text = element.innerHTML;
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML =
                    `
                <p class="m-2 text-center"><a class="ml-6 text-white capitalize bg-blue-500 btn-sm hover:bg-blue-300 rounded-lg p-4" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
<x-guest-layout>
    </ul>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        {{ $data->title }}
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <!-- ====== Blog Details Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="flex flex-col justify-center items-center -mx-4">
                        <div class="w-full px-4">
                            <div>
                                <div class="flex in-line items-center">
                                    <div class="items-center px-4 flex mb-6">
                                        <img src={{ asset('images/svg/li-logo.png') }} class="h-16 w-auto" />
                                    </div>
                                    <div>
                                        <h2 class="font-bold text-dark text-[26px] sm:text-3xl md:text-4xl leading-snug sm:leading-snug md:leading-snug mb-6 wow fadeInUp"
                                            data-wow-delay=".1s">
                                            {{ $data->title }}
                                        </h2>
                                    </div>
                                </div>

                                <div class="mb-8 ck-content text-lg">
                                    {!! $data->description !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                    <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                        Related Services
                    </h2>
                    <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
                </div>
                <!-- First Repeater -->
                <div class="flex flex-wrap flex-col">
                    @foreach ($related as $item)
                        @include('components.frontend.feature', ['team_id' => $item->team_id])
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Details Section End -->
</x-guest-layout>
