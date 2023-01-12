<div>
    {{-- breadcumbs --}}
    <section id="breadcumbs" class="pt-6">
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


    {{-- semua Produk --}}
    <section id="semua-produk" class="py-12">

        <div class="flex px-4 mb-8">
            <div class="w-full flex items-center bg-white dark:bg-dark py-2 px-4 shadow-md rounded-md text-primary">
                <div class="flex w-full flex-wrap items-center">
                    <div class="w-full md:w-1/2 flex items-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-bread dark:text-secondary" width="40" height="40"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M17 5a3 3 0 0 1 2 5.235v6.765a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6.764a3 3 0 0 1 1.824 -5.231l.176 -.005h10z">
                            </path>
                        </svg>
                        <h2 class="px-4 font-semibold py-4 text-2xl dark:text-secondary">Produk</h2>
                    </div>
                    <div class="w-full md:w-1/2 ">
                        <div class="form-control">
                            <div class="form-control">
                                <label class="input-group">
                                    <input type="search" placeholder="Cari..."
                                        class="input input-bordered w-full dark:text-white" wire:model="search" />
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
        </div>
        <div class="w-full px-4">
            <div class="pt-2 pb-4 ">
                <a href="{{ route('admin.product.create') }}"
                    class="px-3 py-2.5 text-white bg-green-500 rounded-md">Tambah Data</a>
            </div>
        </div>
        <div class="flex overflow-x-scroll scrolling-wrapper">
            <div class="w-full flex flex-wrap">
                <div class="w-full px-4">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                            class="w-24 rounded-md">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>Rp. {{ number_format($product->price) }}</td>
                                    <td>{{ $product->stok }}</td>
                                    <td>
                                        <a href="{{ route('admin.product.edit', $product->id) }}"
                                            class="btn btn-sm bg-secondary text-white border-none"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-edit-circle" width="22"
                                                height="22" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z">
                                                </path>
                                                <path d="M16 5l3 3"></path>
                                                <path
                                                    d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999">
                                                </path>
                                            </svg></a>
                                        <label for="delete-product"
                                            class="btn btn-sm bg-danger border-none text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-trash" width="22" height="22"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <line x1="4" y1="7" x2="20" y2="7">
                                                </line>
                                                <line x1="10" y1="11" x2="10" y2="17">
                                                </line>
                                                <line x1="14" y1="11" x2="14" y2="17">
                                                </line>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                </path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg></label>

                                        {{-- Modal Hapus --}}
                                        <input type="checkbox" id="delete-product"
                                            class="modal-toggle bg-transparent" />
                                        <div class="modal w-64 mx-auto bg-transparent">
                                            <div class="modal-box relative shadow-md">
                                                <label for="my-modal-3"
                                                    class="dark:text-secondary hover:text-secondary text-secondary p-1 rounded-full absolute right-2 top-2">✕</label>
                                                <h3 class="text-lg font-semibold mb-5 text-center">Anda
                                                    Yakin?
                                                </h3>
                                                <div class="flex gap-4 justify-center items-center">
                                                    <button type="submit" wire:click="delete({{ $product->id }})"
                                                        class="w-20 bg-success py-2 rounded-md text-white">Ya</button>
                                                    <label for="my-modal-3"
                                                        class="text-center w-20 bg-error py-2 rounded-md text-white">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Akhir Modal Hapus --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" align="center">Tidak ada produk</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="flex justify-between px-4">
            {{ $products->links('pagination::tailwind') }}
        </div>


    </section>
    {{-- akhir semua Produk --}}


</div>
