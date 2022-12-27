

    {{-- Hero --}}
    <section id="hero" class="py-12">
        <x-container>
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2 px-4 order-2 md:order-1">
                    <div class="py-4">
                        <div class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-4 text-sm text-gray-700 bg-slate-100 rounded-full dark:bg-dark"
                            role="alert" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <span class="text-xs bg-secondary rounded-full text-white px-4 py-1.5 mr-3"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                    </path>
                                </svg></span>
                            <span class="text-sm font-medium">Pilihan Keluarga Indonesia</span>
                            <svg class="ml-2 w-5 h-5" fill="currentColor" data-aos="" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="text-5xl mb-3 text-slate text-primary dark:text-secondary" data-aos="fade-right"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000"><strong>Sari
                                Roti</strong> untuk Semua</h2>
                        <p class="text-gray" data-aos="fade-right" data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">Distribusi berbagai macam jenis roti halal,
                            berkualitas tinggi dan harga terjangkau untuk semua konsumen di Indonesia.
                        </p>
                        <p class="text-gray" data-aos="fade-right" data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">Mari nikmati roti dan kue pilihan kami yang lezat dan
                            bernutrisi di berbagai lokasi dan aktivitas.</p>
                        <div class="flex flex-col my-8 lg:mb-16 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                            <a href="{{ route('product') }}"
                                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 dark:bg-secondary"
                                data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                Beli Sekarang
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="../#tentang"
                                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-secondary hover:bg-secondary focus:ring-4 focus:ring-secondary dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                                data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye mr-2"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                    </path>
                                </svg>
                                Tentang Kami
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4 flex justify-center relative order-1 md:order-2">
                    <div class="">
                        <img src="{{ asset('image/hero.png') }}" alt="Sari Roti" class="w-80" data-aos="fade-on"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('image/1.png') }}" alt="Sari Roti"
                            class="w-48 absolute top-32 left-0 md:left-24" data-aos="fade-right"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('image/2.png') }}" alt="Sari Roti"
                            class="w-32 absolute top-72 right-0 md:right-28" data-aos="fade-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    {{-- Akhir Hero --}}


    {{-- Motto --}}
    <section id="motto" class="py-12">
        <x-container>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-3/4 rounded-md bg-white dark:bg-dark shadow-md mb-4">
                    <div class="flex">
                        <div class="w-full md:w-1/3 rounded p-4 pb-8 text-center" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h4 class="py-2 text-lg font-semibold text-dark dark:text-secondary">Mudah</h4>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-primary mx-auto icon icon-tabler icon-tabler-activity dark:text-secondary"
                                width="52" height="52" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                            </svg>
                        </div>
                        <div class="w-full md:w-1/3 rounded p-4 pb-8 text-center" data-aos="fade-on"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h4 class="py-2 text-lg font-semibold text-dark dark:text-secondary">Cepat</h4>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-primary mx-auto icon icon-tabler icon-tabler-clock-hour-1 dark:text-secondary"
                                width="52" height="52" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M12 7v5"></path>
                                <path d="M12 12l2 -3"></path>
                            </svg>
                        </div>
                        <div class="w-full md:w-1/3 rounded p-4 pb-8 text-center" data-aos="flip-right"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h4 class="py-2 text-lg font-semibold text-dark dark:text-secondary">Hemat</h4>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-primary mx-auto icon icon-tabler icon-tabler-businessplan dark:text-secondary"
                                width="52" height="52" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <ellipse cx="16" cy="6" rx="5" ry="3"></ellipse>
                                <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                <path d="M5 15v1m0 -8v1"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    {{-- Akhir Motto --}}

    {{-- Product Unggulan --}}
    <section id="product-unggulan" class="py-12 -mt-12">
        <x-container>
        <div class="text-center pt-24 pb-12 px-4" data-aos="fade-down" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <h2 class="text-4xl text-primary dark:text-secondary">Roti <strong>Unggulan</strong></h2>
                <p class="text-gray mt-2">Berikut adalah produk unggulan yang kami sajikan untuk kalian semua</p>
            </div>
            <div class="flex overflow-x-scroll gap-8 scrolling-wrapper">
        @forelse ($best_products as $product)
        <div class="w-full md:w-1/4 md:px-4 pb-8" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="bg-white h-full w-[310px] rounded-md shadow-md mb-4 overflow-hidden dark:bg-dark">
                            <div class="relative">
                                <span
                                    class="absolute top-0 p-2 opacity-80 text-white bg-primary rounded-br-md  tracking-widest font-medium">{{ $product->stok }}</span>
                                <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                    class="w-full h-80 md:h-72 mx-auto ">
                            </div>
                            {{-- Form Add Cart --}}
        <h4 class=" font-medium text-lg px-4 mt-3 dark:text-mode">{{ $product->name }}</h4>
                            <div class="pt-5 pb-1 text-center px-4 flex justify-between">
                                <p class="py-2 text-3xl font-semibold text-dark dark:text-secondary">Rp.
                                    {{ number_format($product->price) }}</p>


        <div class=" bg-primary hover:bg-secondary btn border-none rounded float-right">
                                    <a href=""
                                        class="w-10 text-white font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-eye-check mx-auto" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="2"></circle>
                                            <path
                                                d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033">
                                            </path>
                                            <path d="M15 19l2 2l4 -4"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
        @empty
                    <p class="mx-auto py-12">Produk tidak ada!</p>
                @endforelse
        </div>
        </x-container>
    </section>
    {{-- Akhir Product Unggulan --}}

    {{-- Tentang Kami --}}
    <section class="overflow-hidden min-h-screen py-12" id="tentang">
    <x-container>
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full px-4 md:w-1/2">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/services/image-1.jpg" alt=""
                                class="w-full rounded-2xl" data-aos="fade-down" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/services/image-2.jpg" alt=""
                                class="w-full rounded-2xl" data-aos="fade-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/services/image-3.jpg" alt=""
                                class="w-full rounded-2xl" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000" />
                            <span class="absolute -right-7 -bottom-7 z-[-1]" data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                                <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.66667" cy="104" r="1.66667"
                                        transform="rotate(-90 1.66667 104)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="104" r="1.66667"
                                        transform="rotate(-90 16.3333 104)" fill="#3056D3" />
                                    <circle cx="31" cy="104" r="1.66667"
                                        transform="rotate(-90 31 104)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="104" r="1.66667"
                                        transform="rotate(-90 45.6667 104)" fill="#3056D3" />
                                    <circle cx="60.3334" cy="104" r="1.66667"
                                        transform="rotate(-90 60.3334 104)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="104" r="1.66667"
                                        transform="rotate(-90 88.6667 104)" fill="#3056D3" />
                                    <circle cx="117.667" cy="104" r="1.66667"
                                        transform="rotate(-90 117.667 104)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="104" r="1.66667"
                                        transform="rotate(-90 74.6667 104)" fill="#3056D3" />
                                    <circle cx="103" cy="104" r="1.66667"
                                        transform="rotate(-90 103 104)" fill="#3056D3" />
                                    <circle cx="132" cy="104" r="1.66667"
                                        transform="rotate(-90 132 104)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 1.66667 89.3333)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 16.3333 89.3333)" fill="#3056D3" />
                                    <circle cx="31" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 31 89.3333)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="89.3333" r="1.66667"
                                        transform="rotate(-90 45.6667 89.3333)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 60.3333 89.3338)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 88.6667 89.3338)" fill="#3056D3" />
                                    <circle cx="117.667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 117.667 89.3338)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 74.6667 89.3338)" fill="#3056D3" />
                                    <circle cx="103" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 103 89.3338)" fill="#3056D3" />
                                    <circle cx="132" cy="89.3338" r="1.66667"
                                        transform="rotate(-90 132 89.3338)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="74.6673" r="1.66667"
                                        transform="rotate(-90 1.66667 74.6673)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 1.66667 31.0003)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 16.3333 74.6668)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 16.3333 31.0003)" fill="#3056D3" />
                                    <circle cx="31" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 31 74.6668)" fill="#3056D3" />
                                    <circle cx="31" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 31 31.0003)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 45.6667 74.6668)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="31.0003" r="1.66667"
                                        transform="rotate(-90 45.6667 31.0003)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 60.3333 74.6668)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="30.9998" r="1.66667"
                                        transform="rotate(-90 60.3333 30.9998)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 88.6667 74.6668)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="30.9998" r="1.66667"
                                        transform="rotate(-90 88.6667 30.9998)" fill="#3056D3" />
                                    <circle cx="117.667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 117.667 74.6668)" fill="#3056D3" />
                                    <circle cx="117.667" cy="30.9998" r="1.66667"
                                        transform="rotate(-90 117.667 30.9998)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 74.6667 74.6668)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="30.9998" r="1.66667"
                                        transform="rotate(-90 74.6667 30.9998)" fill="#3056D3" />
                                    <circle cx="103" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 103 74.6668)" fill="#3056D3" />
                                    <circle cx="103" cy="30.9998" r="1.66667"
                                        transform="rotate(-90 103 30.9998)" fill="#3056D3" />
                                    <circle cx="132" cy="74.6668" r="1.66667"
                                        transform="rotate(-90 132 74.6668)" fill="#3056D3" />
                                    <circle cx="132" cy="30.9998" r="1.66667"
                                        transform="rotate(-90 132 30.9998)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 1.66667 60.0003)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 1.66667 16.3333)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 16.3333 60.0003)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 16.3333 16.3333)" fill="#3056D3" />
                                    <circle cx="31" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 31 60.0003)" fill="#3056D3" />
                                    <circle cx="31" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 31 16.3333)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 45.6667 60.0003)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 45.6667 16.3333)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 60.3333 60.0003)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 60.3333 16.3333)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 88.6667 60.0003)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 88.6667 16.3333)" fill="#3056D3" />
                                    <circle cx="117.667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 117.667 60.0003)" fill="#3056D3" />
                                    <circle cx="117.667" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 117.667 16.3333)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 74.6667 60.0003)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 74.6667 16.3333)" fill="#3056D3" />
                                    <circle cx="103" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 103 60.0003)" fill="#3056D3" />
                                    <circle cx="103" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 103 16.3333)" fill="#3056D3" />
                                    <circle cx="132" cy="60.0003" r="1.66667"
                                        transform="rotate(-90 132 60.0003)" fill="#3056D3" />
                                    <circle cx="132" cy="16.3333" r="1.66667"
                                        transform="rotate(-90 132 16.3333)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="45.3333" r="1.66667"
                                        transform="rotate(-90 1.66667 45.3333)" fill="#3056D3" />
                                    <circle cx="1.66667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 1.66667 1.66683)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="45.3333" r="1.66667"
                                        transform="rotate(-90 16.3333 45.3333)" fill="#3056D3" />
                                    <circle cx="16.3333" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 16.3333 1.66683)" fill="#3056D3" />
                                    <circle cx="31" cy="45.3333" r="1.66667"
                                        transform="rotate(-90 31 45.3333)" fill="#3056D3" />
                                    <circle cx="31" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 31 1.66683)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="45.3333" r="1.66667"
                                        transform="rotate(-90 45.6667 45.3333)" fill="#3056D3" />
                                    <circle cx="45.6667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 45.6667 1.66683)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 60.3333 45.3338)" fill="#3056D3" />
                                    <circle cx="60.3333" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 60.3333 1.66683)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 88.6667 45.3338)" fill="#3056D3" />
                                    <circle cx="88.6667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 88.6667 1.66683)" fill="#3056D3" />
                                    <circle cx="117.667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 117.667 45.3338)" fill="#3056D3" />
                                    <circle cx="117.667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 117.667 1.66683)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 74.6667 45.3338)" fill="#3056D3" />
                                    <circle cx="74.6667" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 74.6667 1.66683)" fill="#3056D3" />
                                    <circle cx="103" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 103 45.3338)" fill="#3056D3" />
                                    <circle cx="103" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 103 1.66683)" fill="#3056D3" />
                                    <circle cx="132" cy="45.3338" r="1.66667"
                                        transform="rotate(-90 132 45.3338)" fill="#3056D3" />
                                    <circle cx="132" cy="1.66683" r="1.66667"
                                        transform="rotate(-90 132 1.66683)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4 pl-8">
                <div class="mt-10 lg:mt-0">
                    <span class="mb-2 block text-lg font-semibold" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                        CV. Al-Amin
                    </span>
                    <h2 class="text-dark mb-8 text-3xl  sm:text-4xl" data-aos="fade-left">
                        <span class="font-bold text-primary">Sari Roti</span> <span class="text-secondary">
                            Aceh Utara</span>
                    </h2>
                    <p class="text-body-color mb-8 text-base" data-aos="fade-left">
                        Kami adalah produk yang bergerak di bidang industri penjulan roti. Kami bekerja sama dengan
                        <a class="font-semibold" href="https://www.sariroti.com/id">Sari Roti </a> Daerah
                        penjualan kami berada di Barat Indonesia, tepatnya di Provinsi Aceh, Kab. Aceh Utara.
                        Kami menyediakan roti yang berkualitas dengan harga yang <span
                            class="font-semibold">bersahabat</span>
                    </p>
                    <a href="https://instagram.com/sariroti_acehutara"
                        class="bg-primary inline-flex items-center justify-center rounded-lg py-4 px-10 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                        data-aos="fade-zoom-out">
                        Mari Berteman
                    </a>
                </div>
            </div>
        </div>
    </x-container>
    </section>
    {{-- Akhir Tentang Kami --}}

    {{-- Kerja Sama --}}
    <section id="kerja-sama" class="py-12 my-24 opacity-90"
        style="background-image: url(https://cdn1.katadata.co.id/media/images/thumb/2016/12/09/2016_12_09-16_55_37_7cd69b1295ae68425cce6baa2a96e987_620x413_thumb.jpg); background-size: cover;"
        data-aos="fade-on">
    <x-container>
        <div class="flex flex-wrap items-center justify-center">
            <div class="w-full mb-8 md:w-1/3 px-4">
                <img src="https://upload.wikimedia.org/wikipedia/id/6/67/Sari_Roti-Rotinya_Indonesia.png"
                    alt="" class="w-40 shadow-md mb-4 mx-auto" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            </div>
            <div class="w-full mb-8 md:w-1/3 px-4">
                <img src="https://indomaret.co.id/Assets/image/logo_indomaret.png" alt=""
                    class="w-40 shadow-md mb-4 mx-auto" data-aos="zoom-out" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
            </div>
            <div class="w-full mb-8 md:w-1/3 px-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Alfamart_logo.svg" alt=""
                    class="w-40 shadow-md mb-4 mx-auto" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
            </div>
        </div>
    </x-container>
    </section>
    {{-- Akhir Kerja Sama --}}

    {{-- Products --}}
    <section id="products">
        <x-container>
            <div class="text-center pt-24 pb-12 px-4" data-aos="fade-down" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <h2 class="text-4xl text-primary dark:text-secondary">Daftar <strong>Roti</strong></h2>
                <p class="text-gray mt-2">Berikut adalah beberapa daftar roti yang kami miliki, silahkan lihat dan
                    pesan</p>
            </div>
            <div class="flex flex-wrap ">
                @forelse ($products as $product)
        <div class="w-full md:w-1/4 md:px-4 pb-8" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="bg-white h-full w-[310px] rounded-md shadow-md mb-4 overflow-hidden dark:bg-dark">
                            <div class="relative">
                                <span
                                    class="absolute top-0 p-2 opacity-80 text-white bg-primary rounded-br-md  tracking-widest font-medium">{{ $product->stok }}</span>
                                <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                    class="w-full h-80 md:h-72 mx-auto ">
                            </div>
                            {{-- Form Add Cart --}}
        <h4 class=" font-medium text-lg px-4 mt-3 dark:text-mode">{{ $product->name }}</h4>
                            <div class="pt-5 pb-1 text-center px-4 flex justify-between">
                                <p class="py-2 text-3xl font-semibold text-dark dark:text-secondary">Rp.
                                    {{ number_format($product->price) }}</p>


        <div class=" bg-primary hover:bg-secondary btn border-none rounded float-right">
                                    <a href=""
                                        class="w-10 text-white font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-eye-check mx-auto" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="2"></circle>
                                            <path
                                                d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033">
                                            </path>
                                            <path d="M15 19l2 2l4 -4"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
        @empty
                    <p class="mx-auto py-12">Produk tidak ada!</p>
                @endforelse
            </div>
            <div class="flex flex-wrap justify-center pt-12">
                <div class="px-4">
                    <a href="{{ route('product') }}"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-secondary hover:bg-secondary focus:ring-4 focus:ring-secondary dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                        data-aos="fade-on" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        Lihat Semua
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </x-container>

    </section>
    {{-- Akhir Products --}}

    {{-- Cara Penjualan --}}
    <section id="products" class="py-12">
        <x-container>
        <div class="text-center pt-24 pb-12 px-4" data-aos="fade-up" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <h2 class="text-4xl text-primary dark:text-secondary">Seperti Apa Cara Penjualan <strong>Kami</strong>
            </h2>
            <p class="text-gray mt-2">Kami memiliki 4 cara dalam berjualan</p>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 px-4" data-aos="fade-up-right" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="bg-white dark:bg-dark w-full rounded-md shadow-md mb-4 p-8">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-primary icon icon-tabler icon-tabler-truck dark:text-secondary" width="52"
                            height="52" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="7" cy="17" r="2"></circle>
                            <circle cx="17" cy="17" r="2"></circle>
                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                        </svg>
                    </div>
                    <div class="text-left">
                        <h4 class="text-lg mt-4 font-bold">Penjualan Langsung</h4>
                        <p class="text-xs text-gray text-justify">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-4" data-aos="fade-up-right" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="bg-white dark:bg-dark w-full rounded-md shadow-md mb-4 p-8">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-primary icon icon-tabler icon-tabler-building-skyscraper dark:text-secondary"
                            width="52" height="52" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="21" x2="21" y2="21"></line>
                            <path d="M5 21v-14l8 -4v18"></path>
                            <path d="M19 21v-10l-6 -4"></path>
                            <line x1="9" y1="9" x2="9" y2="9.01"></line>
                            <line x1="9" y1="12" x2="9" y2="12.01"></line>
                            <line x1="9" y1="15" x2="9" y2="15.01"></line>
                            <line x1="9" y1="18" x2="9" y2="18.01"></line>
                        </svg>
                    </div>
                    <div class="text-left">
                        <h4 class="text-lg mt-4 font-bold">Dari Kantor</h4>
                        <p class="text-xs text-gray text-justify">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-4" data-aos="fade-up-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="bg-white dark:bg-dark w-full rounded-md shadow-md mb-4 p-8">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-primary icon icon-tabler icon-tabler-building-store dark:text-secondary"
                            width="52" height="52" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="21" x2="21" y2="21"></line>
                            <path
                                d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4">
                            </path>
                            <line x1="5" y1="21" x2="5" y2="10.85"></line>
                            <line x1="19" y1="21" x2="19" y2="10.85"></line>
                            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                        </svg>
                    </div>
                    <div class="text-left">
                        <h4 class="text-lg mt-4 font-bold">Titip Toko</h4>
                        <p class="text-xs text-gray text-justify">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-4" data-aos="fade-up-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="bg-white dark:bg-dark w-full rounded-md shadow-md mb-4 p-8">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-primary icon icon-tabler icon-tabler-brand-whatsapp dark:text-secondary"
                            width="52" height="52" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                            <path
                                d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1">
                            </path>
                        </svg>
                    </div>
                    <div class="text-left">
                        <h4 class="text-lg mt-4 font-bold">Pesan Online</h4>
                        <p class="text-xs text-gray text-justify">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
    </section>
    {{-- Akhir Cara Penjualan --}}

    {{-- Kontak --}}
    <section id="kontak" class="py-12">
    <x-container>
        <div class="text-center pt-24 pb-12 px-4" data-aos="fade-up" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <h2 class="text-4xl text-primary dark:text-secondary">Hubungi <strong>Kami</strong></h2>
            <p class="text-gray mt-2">Berikut adalah lokasi dan beberapa sosial media kami</p>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 px-4 mb-4" data-aos="fade-up-right" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63572.31933358085!2d96.96387071533023!3d5.220219913949265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304771b3043ad8e3%3A0x184e1f55c4060615!2sBandar%20Udara%20Malikus%20Saleh!5e0!3m2!1sid!2sid!4v1668813754656!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"class="rounded-md shadow-md w-full"></iframe>
            </div>
            <div class="w-full md:w-1/2 px-4 mb-4" data-aos="fade-up-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="flex flex-row items-center flex-wrap gap-3 mb-4">
                    <div class="bg-white dark:bg-dark p-2 border border-gray rounded-md">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-mail dark:text-secondary" width="40"
                                height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="3" y="5" width="18" height="14" rx="2">
                                </rect>
                                <polyline points="3 7 12 13 21 7"></polyline>
                            </svg></a>
                    </div>
                    <div>
                        <h4 class="font-medium dark:text-secondary">Email</h4>
                        <p>sarirotiacehutara@gmail.com</p>
                    </div>
                </div>
                <div class="flex flex-row w-full items-center flex-wrap gap-3 mb-4">
                    <div class="bg-white dark:bg-dark p-2 border border-gray rounded-md">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-map-pin dark:text-secondary" width="40"
                                height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="11" r="3"></circle>
                                <path
                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                </path>
                            </svg></a>
                    </div>
                    <div>
                        <h4 class="font-medium dark:text-secondary">Alamat</h4>
                        <p>Jl. Banda Aceh, Gedung.s</p>
                    </div>
                </div>
                <div class="flex flex-row items-center flex-wrap gap-3">
                    <div class="bg-white dark:bg-dark p-2 border border-gray rounded-md">
                        <a href="https://www.instagram.com/sariroti_acehutara/"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-instagram dark:text-secondary"
                                width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="4" y="4" width="16" height="16" rx="4">
                                </rect>
                                <circle cx="12" cy="12" r="3"></circle>
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                            </svg></a>
                    </div>
                    <div>
                        <h4 class="font-medium dark:text-secondary">Instagram</h4>
                        <a href="https://instagram.com/sariroti_aceh_utara">Sari Roti Aceh Utara</a>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
    </section>
    {{-- Akhiir Kontak --}}
