<!-- ====== Navbar Section Start -->
<div class="sticky top-0 left-0 z-40 flex items-center w-full bg-gradient-to-r from-primary to-secondary ud-header">
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
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('welcome') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('/*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }}">
                                    Home
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('features') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('feature*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    Services
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('teams') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('team*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    Doctors
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('scheme') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('scheme*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    Insurances
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('book_appointment') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('book_appointment*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    Book Appointment
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('blogs') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('blog*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    Blogs
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('contactUs') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('contact-us*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    Contact Us
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('aboutUs') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('about-us*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
                                    About Us
                                </a>
                            </li>
                            <li class="relative group py-2 lg:py-0 mx-8 lg:mx-0">
                                <a href="{{ route('faqs') }}"
                                    class="font-semibold text-dark lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 md:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('faqs*') ? 'md:underline md:underline-offset-2 md:decoration-gray-50 md:decoration-4' : '' }} lg:ml-7 xl:ml-12">
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
