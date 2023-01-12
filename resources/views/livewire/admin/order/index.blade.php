<div>
    {{-- breadcumbs --}}
    <section id="breadcumbs" class="pt-6  px-4">

        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="font-semibold">Produk</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    {{-- Akhir breadcumbs --}}

    {{-- semua produk --}}
    <section id="semua-produk" class="py-12">

        <div class="w-full px-4">
            <div class="w-full flex items-center bg-white dark:bg-dark py-2 px-4 shadow-md rounded-md text-primary">
                <div class="flex w-full flex-wrap items-center">
                    <div class="w-full md:w-1/4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-bread dark:text-secondary" width="40" height="40"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M17 5a3 3 0 0 1 2 5.235v6.765a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6.764a3 3 0 0 1 1.824 -5.231l.176 -.005h10z">
                            </path>
                        </svg>
                        <h2 class="px-4 font-semibold py-5 text-2xl dark:text-secondary">Produk</h2>
                    </div>
                    <div class="w-full -mt-14 md:mt-0 md:w-1/4 flex gap-3 px-4 justify-end relative">

                        <label for="cart-modal"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-shopping-cart mr-2 text-primary dark:text-secondary"
                                width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="6" cy="19" r="2"></circle>
                                <circle cx="17" cy="19" r="2"></circle>
                                <path d="M17 17h-11v-14h-2"></path>
                                <path d="M6 5l14 1l-1 7h-13"></path>
                            </svg>
                            @if ($total_cart)
                                <div
                                    class="badge badge-sm dark:bg-primary border-none text-white py-2.5  bg-secondary border border-secondary shadow-lg absolute top-0 right-16 text-xs animate-pulse ">
                                    {{ $total_cart }}
                                </div>
                            @endif
                        </label>

                        <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-history dark:text-secondary" width="32"
                                height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="12 8 12 12 14 14"></polyline>
                                <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5"></path>
                            </svg>
                            @if (!empty($total_order))
                                <div
                                    class="badge badge-sm dark:bg-primary border-none text-white py-2.5  bg-secondary border border-secondary shadow-lg absolute top-0 right-2 text-xs animate-pulse">
                                    {{ $total_order }}</div>
                            @endif
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 float-right">
                        <div class="form-control">
                            <label class="input-group ">
                                <input type="search" placeholder="Cari..."
                                    class="input input-bordered w-full dark:text-white " wire:model="search" />
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-white"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="semua-products" class="py-12">
            <div class="flex flex-wrap">
                @forelse ($products as $product)
                    <div class="w-full md:w-1/4 px-4 pb-8">
                        <div class="bg-white dark:bg-dark h-full w-full rounded-md shadow-md mb-4 overflow-hidden">
                            <div class="relative">
                                <span
                                    class="absolute top-0 p-2 opacity-80 text-white bg-secondary rounded-br-md tracking-widest font-medium">{{ $product->stok }}</span>
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="w-80 h-80 md:h-64 mx-auto ">
                                @else
                                    <img src="{{ asset('image/blank_image.jpg') }}" alt=""
                                        class="w-80 h-80 md:h-64 mx-auto ">
                                @endif
                            </div>
                            {{-- Form Add Cart --}}
                            <h4 class=" font-medium text-lg px-4 mt-3">{{ $product->name }}</h4>
                            <p class="py-1 text-3xl px-4 font-semibold text-dark dark:text-secondary">Rp.
                                {{ number_format($product->price) }}</p>
                            <div class="pt-5 text-center px-2">
                                <div class="flex justify-between w-full">
                                    <form class="w-full flex items-center justify-between" method="post"
                                        action="{{ route('admin.orders.store', $product->id) }}">
                                        @csrf
                                        <div
                                            class="w-32 mx-1 flex items-center justify-evenly border border-secondary rounded">
                                            <button class="text-white rounded-md"
                                                onclick="
                                             const total_order = document.getElementById({{ $product->id }});
                                         if (total_order.value != 0 && total_order.value > 1) {
                                                total_order.value--
                                            }
                                            "
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
                                                class="w-[50px] h-10 text-center font-semibold rounded-md border-none focus:border-none focus:ring-0 dark:bg-dark"
                                                name="total_order">
                                            <button class="rounded-md text-secondary" type="button"
                                                onclick="
                                            const total_order = document.getElementById({{ $product->id }});
                                            total_order.value++;
                                        ">
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
        </section>


    </section>
    {{-- akhir semua produk --}}


    {{-- Modal Cart --}}

    <input type="checkbox" id="cart-modal" class="modal-toggle" />
    <div class="modal px-4">
        <div
            class="modal-box w-full dark:bg-dark md:w-11/12 max-w-5xl flex flex-col overflow-x-hidden scrolling-wrapper">
            <label for="cart-modal"
                class="text-dark font-bold dark:text-secondary hover:text-secondary dark:hover:text-white p-1 text-lg dark:bg-dark rounded-full fixed right-2 top-2">✕</label>
            @if (!empty($order))
                {{-- cari produk --}}
                <section id="nama-produk">

                    <div class="flex flex-wrap my-8 ">
                        <div
                            class="w-full flex items-center bg-white dark:bg-dark py-2 px-4 shadow-md rounded-md text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-shopping-cart dark:text-secondary" width="40"
                                height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="6" cy="19" r="2"></circle>
                                <circle cx="17" cy="19" r="2"></circle>
                                <path d="M17 17h-11v-14h-2"></path>
                                <path d="M6 5l14 1l-1 7h-13"></path>
                            </svg>
                            <h2 class="px-4 font-semibold py-4 text-2xl dark:text-secondary"> Keranjang</h2>
                        </div>
                    </div>

                </section>
                {{-- akhir cari produk --}}

                {{-- cart --}}
                @if (!empty($order_details))
                    <section id="cart">
                        <div class="flex flex-col md:flex-row">
                            <div
                                class="md:w-2/3 w-full flex overflow-y-hidden scrolling-wrapper rounded-md py-2 bg-white dark:bg-dark">
                                <div class="w-full">
                                    <table class="table w-full dark:bg-dark">

                                        <body>
                                            <tr>
                                                <th>No</th>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th align="right">Total Harga</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                            @forelse ($order_details as $order_detail)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <th>{{ $order_detail->total_price }}</th>
                                                    <td>{{ $order_detail->product->name }}
                                                        <div
                                                            class="w-32 flex mt-4 items-center justify-evenly border border-secondary rounded">
                                                            <button class="text-white rounded-md"
                                                                onclick="const total_order = document.getElementById({{ $order_detail->id }});
                                                                if (total_order.value != 0 && total_order.value > 1) {
                                                                        total_order.value--
                                                                    }
                                                                    "
                                                                type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-minus text-secondary hover:text-primary"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none">
                                                                    </path>
                                                                    <line x1="5" y1="12"
                                                                        x2="19" y2="12"></line>
                                                                </svg></button>
                                                            <input type="text" name="order_quantity[]"
                                                                value="{{ $order_detail->order_quantity }}"
                                                                id="{{ $order_detail->id }}"
                                                                class="w-[50px] h-10 text-center font-semibold rounded-md border-none focus:border-none focus:ring-0 dark:bg-transparent"
                                                                name="total_order">
                                                            <button class="rounded-md text-secondary" type="button"
                                                                onclick="const total_order = document.getElementById({{ $order_detail->id }});
                                                            total_order.value++;">
                                                                <input type="hidden" name="product_price[]"
                                                                    id="product_price"
                                                                    value="{{ $order_detail->product->price }}">
                                                                <input type="hidden" name="order_id" id="order_id"
                                                                    value="{{ $order_detail->order_id }}">
                                                                <input type="hidden" name="product_id[]"
                                                                    id="product_id"
                                                                    value="{{ $order_detail->product_id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-plus hover:text-primary"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none">
                                                                    </path>
                                                                    <line x1="12" y1="5"
                                                                        x2="12" y2="19"></line>
                                                                    <line x1="5" y1="12"
                                                                        x2="19" y2="12"></line>
                                                                </svg></button>
                                                        </div>
                                                    </td>


                                                    <td>Rp. {{ number_format($order_detail->product->price) }}</td>
                                                    <td align="right">Rp.
                                                        {{ number_format($order_detail->total_price) }}
                                                    </td>
                                                    <td>
                                                        <label for="my-modal-3" type="submit"
                                                            class="btn btn-sm btn-error text-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-trash"
                                                                width="22" height="22" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                    fill="none">
                                                                </path>
                                                                <line x1="4" y1="7" x2="20"
                                                                    y2="7">
                                                                </line>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17">
                                                                </line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17">
                                                                </line>
                                                                <path
                                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                </path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                                </path>
                                                            </svg></label>
                                                    </td>
                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="5" align="center">Belum ada pelanggan</td>
                                                </tr>
                                            @endforelse
                                            <tr>
                                                <td>
                                                    <button onclick="updateData({{ $order->id }})"
                                                        class="btn btn-sm btn-success text-white"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-refresh"
                                                            width="22" height="22" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                                        </svg></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-4 pt-8">
                                <form action="" method="post">
                                    @csrf
                                    <div class="w-full">
                                        <select name="customer_name" id="customer_name"
                                            class="select select-bordered w-full">
                                            {{-- <option><input type="text" wire:model="customer_name" --}}
                                            {{-- class="input input-bordered"></option> --}}
                                            <option></option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="w-full py-4">
                                        <label class="input-group">
                                            <span class="font-bold">Rp.</span>
                                            <input type="text"
                                                value="{{ number_format($order->total_order_price) }}"
                                                class="input input-bordered w-full font-bold">
                                        </label>
                                    </div>
                                    <div class="w-full justify-center grid grid-cols-1 md:justify-end  mt-4">
                                        <button class="w-full btn btn-success text-white" type="submit"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="mr-2 icon icon-tabler icon-tabler-discount-check"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1">
                                                </path>
                                                <path d="M9 12l2 2l4 -4"></path>
                                            </svg> Konfirmasi
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </section>
                @endif
                {{-- akhir cart --}}
            @else
                <h3 class="text-center">Pesanan tidak ada!</h3>
            @endif
        </div>
    </div>

    {{-- Akhir Modal Cart --}}


    {{-- Modal Hapus --}}
    <input type="checkbox" id="my-modal-3" class="modal-toggle bg-transparent" />
    <div class="modal w-64 mx-auto bg-transparent">
        <div class="modal-box relative shadow-md">
            <label for="my-modal-3"
                class="dark:text-secondary hover:text-secondary text-secondary p-1 rounded-full absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-semibold mb-5 text-center">Anda
                Yakin?
            </h3>
            <div class="flex gap-4 justify-center items-center">
                <form @if (!empty($order_detail)) action="" @endif method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="w-20 bg-success py-2 rounded-md text-white">Ya</button>

                </form>
                <label for="my-modal-3" class="text-center w-20 bg-error py-2 rounded-md text-white">Tidak</label>
            </div>
        </div>
    </div>
    {{-- Akhir Modal Hapus --}}
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#customer_name').select2({
            placeholder: 'Pilih Pelanggan',
            allowClear: true
        });
    });
</script>
