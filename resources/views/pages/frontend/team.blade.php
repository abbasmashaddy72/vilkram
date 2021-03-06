<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        Doctors
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <!-- ====== About Section Start -->
    @foreach ($teams as $item)
        <section class="pt-20 pb-20">
            <div class="container">
                <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4">
                            <div class="lg:flex items-center justify-around border overflow-hidden shadow-testimonial">
                                <div class="text-center">
                                    <div class="relative inline-block z-10">
                                        <a href="{{ route('team_single', ['id' => $item->id]) }}">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="image"
                                                class="mx-auto lg:ml-auto w-80 h-96 rounded-lg object-cover" />
                                        </a>
                                        <div class="mt-8">
                                            <a href="{{ route('book_appointment', ['team_id' => $item->id]) }}"
                                                class="px-3 py-2 bg-primary font-semibold text-white text-lg rounded-xl hover:bg-secondary transition ease-in-out duration-500">Book
                                                Appointment</a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="lg:max-w-[565px] xl:max-w-[640px] w-full py-8 px-7 sm:px-12 md:p-16 lg:py-8 lg:px-16">
                                    <a href="{{ route('team_single', ['id' => $item->id]) }}">
                                        <h2
                                            class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                                            {{ $item->name }}
                                        </h2>
                                    </a>
                                    <p class="text-xl text-body-color mb-9 leading-relaxed">
                                        <span class="font-bold text-dark">Experience:</span>
                                        {{ $item->experience->diffInYears(now()) }} Years
                                        <br>
                                        <span class="font-bold text-dark">Qualification:</span>
                                        {{ $item->qualification }}
                                        <br>
                                        <span class="font-bold text-dark">Department:</span>
                                        {{ $item->department }}
                                    </p>
                                    <p class="text-xl text-body-color text-justify whitespace-pre-line">
                                        <span class="font-bold text-dark">Profile:</span><br>{{ $item->about }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!-- ====== About Section End -->
</x-guest-layout>
