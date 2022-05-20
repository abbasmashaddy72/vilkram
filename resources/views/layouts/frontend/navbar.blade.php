<!-- ====== Navbar Section Start -->
<div class="sticky top-0 left-0 z-40 flex items-center w-full bg-primary  ud-header">
    <div class="container">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-32">
                <a href="{{ route('welcome') }}" class="block w-full py-5 navbar-logo">
                    <img src="{{ asset('storage/' . $logo) }}" alt="logo" class="w-full header-logo" />
                </a>
            </div>
            <div class="flex items-center justify-end w-full px-4">
                <div>
                    <button id="navbarToggler"
                        class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                    </button>
                    <nav id="navbarCollapse"
                        class="absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">
                        <ul class="blcok lg:flex">
                            <li class="relative group">
                                <a href="{{ route('welcome') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0">
                                    Home
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('features') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Services
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('teams') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Doctors
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('scheme') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Insurances
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('book_appointment') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Book Appointment
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('blogs') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Blogs
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('contactUs') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Contact Us
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('aboutUs') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    About Us
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('faqs') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    FAQ's
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Navbar Section End -->
