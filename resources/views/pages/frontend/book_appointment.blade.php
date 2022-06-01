<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        Book Appointment
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact py-20 md:py-[120px] relative">
        <div class="absolute z-[-1] w-full h-1/2 lg:h-[45%] xl:h-1/2 top-0 left-0 bg-[#B8DDFF]"></div>
        <div class="container px-4">
            <div class="flex flex-col justify-center items-center -mx-4">
                <div class="px-4 w-full lg:w-5/12 xl:w-4/12">
                    <div class="shadow-testimonial rounded-lg border-gray-200 border-2 bg-white py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"
                        data-wow-delay=".2s">
                        @livewire('form.frontend.book-appointment-form', ['team_id' => $team_id])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->
</x-guest-layout>
