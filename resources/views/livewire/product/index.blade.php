<div>
        {{-- breadcumbs --}}
        <section id="breadcumbs" class="py-6">
            <x-container>
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="text-sm breadcrumbs">
                            <ul>
                                <li><a href="{{ route('index') }}">Beranda</a></li>
                                <li class="font-semibold">Semua Roti</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </x-container>
        </section>
        {{-- Akhir breadcumbs --}}

        {{-- semua produk --}}
        <section id="semua-produk">
            <x-container>
                <div class="flex flex-wrap px-4 mb-8">
                    <div class="w-full flex items-center bg-white py-2 px-4 shadow-md dark:bg-dark rounded-md text-primary" data-aos="fade-on" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="flex flex-wrap w-full items-center" >
                            <div class="w-full md:w-1/2 flex items-center mb-3 dark:text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bread"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M17 5a3 3 0 0 1 2 5.235v6.765a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6.764a3 3 0 0 1 1.824 -5.231l.176 -.005h10z">
                                    </path>
                                </svg>
                                <h2 class="px-4 font-semibold py-4 text-2xl dark:text-secondary">Semua Roti</h2>
                            </div>
                            <div class="w-full md:w-1/2 float-right">
                                <div class="form-control">
                                        <div class="input-group">
                                            <input type="search" placeholder="Cari..." wire:model="search"
                                                class="input input-bordered w-full dark:text-mode" value="{{ $search }}"/>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex flex-wrap">
                    @forelse ($products as $product)
                        <div class="w-full md:w-1/4 px-4 pb-8" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                            <div class="bg-white h-full w-full dark:bg-dark rounded-md shadow-md mb-4 overflow-hidden">
                                <div class="relative">
                                    <span
                                        class="absolute top-0 p-2 opacity-80 text-white bg-secondary rounded-br-md tracking-widest font-medium">{{ $product->stok }}</span>
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="w-80 h-80 md:h-64 mx-auto ">
                                </div>
                                {{-- Form Add Cart --}}
                                <h4 class=" font-medium text-lg px-4 mt-3">{{ $product->name }}</h4>
                                <p class="py-1 text-3xl px-4 font-semibold text-dark">Rp. {{ number_format($product->price) }}</p>

                                <div class="pt-5 text-center px-2">
                                    <div class="flex justify-between w-full">
                                        <form class="w-full flex items-center justify-between" method="post"
                                            action="">
                                            @csrf
                                            <div
                                                class="w-32 mx-1 flex items-center justify-evenly border border-secondary rounded">
                                                <button class="text-white rounded-md"
                                                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-minus text-secondary hover:text-primary"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button>
                                                <input type="text" value="1" id="{{ $product->id }}"
                                                    class="w-[50px] h-10 dark:bg-dark text-center font-semibold rounded-md border-none focus:border-none focus:ring-0" name="total_order">
                                                <button class="rounded-md text-secondary" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-plus hover:text-primary"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg></button>
                                            </div>

                                            <div class="w-1/4 mx-1 bg-secondary hover:bg-dark rounded float-right">
                                                <button type="submit"
                                                    class="w-10 h-10 text-white font-medium rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-shopping-cart-plus mx-auto"
                                                        width="20" height="20" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="6" cy="19" r="2">
                                                        </circle>
                                                        <circle cx="17" cy="19" r="2">
                                                        </circle>
                                                        <path d="M17 17h-11v-14h-2"></path>
                                                        <path d="M6 5l6.005 .429m7.138 6.573l-.143 .998h-13"></path>
                                                        <path d="M15 6h6m-3 -3v6"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- Akhir Form Add Cart --}}


                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="mx-auto py-12">Produk tidak ada!</p>
                    @endforelse
                </div>
            </x-container>
        </section>
        {{-- akhir semua produk --}}

</div>
