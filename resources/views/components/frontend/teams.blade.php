<section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[620px]">
                    <span class="block mb-2 text-lg font-semibold text-primary">
                        Our Team
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
                        Meet Our Team
                    </h2>
                    <p class="text-lg leading-relaxed sm:text-xl sm:leading-relaxed text-body-color">
                        There are many variations of passages of Lorem Ipsum available but the majority have
                        suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
            @foreach ($teams as $item)
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                    <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
                        <div class="relative w-[170px] h-170px] rounded-full z-10 mx-auto mb-6">
                            <img src="{{ 'storage/' . $item->image }}" alt="{{ $item->name }}"
                                class="w-full rounded-full h-48 w-40 object-cover" />
                            <span class="absolute top-0 left-0 z-[-1]">
                                <svg width="71" height="82" viewBox="0 0 71 82" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.29337" cy="80.7066" r="1.29337"
                                        transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="80.7066" r="1.29337"
                                        transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="80.7066" r="1.29337"
                                        transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="80.7066" r="1.29337"
                                        transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="80.7066" r="1.29337"
                                        transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                                    <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)"
                                        fill="#3056D3" />
                                    <circle cx="57.9443" cy="80.7066" r="1.29337"
                                        transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="69.3249" r="1.29337"
                                        transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="69.3249" r="1.29337"
                                        transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="69.3249" r="1.29337"
                                        transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="69.3249" r="1.29337"
                                        transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)"
                                        fill="#3056D3" />
                                    <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)"
                                        fill="#3056D3" />
                                    <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)"
                                        fill="#3056D3" />
                                    <circle cx="1.29337" cy="57.9433" r="1.29337"
                                        transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="24.0568" r="1.29337"
                                        transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="57.9433" r="1.29337"
                                        transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="24.0568" r="1.29337"
                                        transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="57.9433" r="1.29337"
                                        transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="24.0568" r="1.29337"
                                        transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="57.9433" r="1.29337"
                                        transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="24.0568" r="1.29337"
                                        transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="57.9431" r="1.29337"
                                        transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="24.0567" r="1.29337"
                                        transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                                    <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)"
                                        fill="#3056D3" />
                                    <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)"
                                        fill="#3056D3" />
                                    <circle cx="57.9433" cy="57.9431" r="1.29337"
                                        transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="24.0567" r="1.29337"
                                        transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="46.5615" r="1.29337"
                                        transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="12.6751" r="1.29337"
                                        transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="46.5615" r="1.29337"
                                        transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="12.6751" r="1.29337"
                                        transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="46.5615" r="1.29337"
                                        transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="12.6751" r="1.29337"
                                        transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="46.5615" r="1.29337"
                                        transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="12.6751" r="1.29337"
                                        transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="46.5615" r="1.29337"
                                        transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="12.6751" r="1.29337"
                                        transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                                    <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)"
                                        fill="#3056D3" />
                                    <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)"
                                        fill="#3056D3" />
                                    <circle cx="57.9433" cy="46.5615" r="1.29337"
                                        transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="12.6751" r="1.29337"
                                        transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="35.1798" r="1.29337"
                                        transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)"
                                        fill="#3056D3" />
                                    <circle cx="12.6747" cy="35.1798" r="1.29337"
                                        transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)"
                                        fill="#3056D3" />
                                    <circle cx="24.0575" cy="35.1798" r="1.29337"
                                        transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="1.29336" r="1.29337"
                                        transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="35.1798" r="1.29337"
                                        transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="1.29336" r="1.29337"
                                        transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)"
                                        fill="#3056D3" />
                                    <circle cx="46.8197" cy="1.29354" r="1.29337"
                                        transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                                    <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)"
                                        fill="#3056D3" />
                                    <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)"
                                        fill="#3056D3" />
                                    <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)"
                                        fill="#3056D3" />
                                    <circle cx="57.9443" cy="1.29354" r="1.29337"
                                        transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
                                </svg>
                            </span>
                            <span class="absolute bottom-0 right-0">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                                        stroke="#13C296" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-2 text-lg font-medium text-dark">
                                {{ $item->name }}
                            </h4>
                            <p class="mb-5 text-sm font-medium text-body-color">
                                {{ $item->qualification }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
