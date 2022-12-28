<div>
        {{-- breadcumbs --}}
        <section id="breadcumbs" class="pt-6">
            <x-container>
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="text-sm breadcrumbs">
                            <ul>
                                <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                                <li><a href="{{ route('admin.product') }}">Produk</a></li>
                                <li class="font-semibold">Tambah Produk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </x-container>
        </section>
        {{-- Akhir breadcumbs --}}

        {{-- semua produk --}}
        <section id="semua-produk" class="py-12">
            <x-container>
                <div class="flex flex-wrap px-4 mb-8">
                    <div class="w-full flex items-center bg-white py-2 px-4 shadow-md rounded-md text-primary dark:bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-text dark:text-secondary"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                            </path>
                            <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                            <path d="M9 12h6"></path>
                            <path d="M9 16h6"></path>
                        </svg>
                        <h2 class="px-4 font-semibold py-5 text-2xl dark:text-secondary">Tambah Produk</h2>
                    </div>
                </div>
                <div class="flex flex-wrap px-4">
                    <form wire:submit.prevent="store" type="post"
                        class="w-full flex flex-wrap justify-between bg-white dark:bg-dark shadow-md rounded-md ">
                        <div class="w-full md:w-1/2 px-4">
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" wire:model="name" id="name" placeholder="Masukkan nama.." autofocus
                                    class="w-full rounded-md input-bordered input @error('name') border-red-500 @enderror"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="price">Harga</label>
                                <input type="text" wire:model="price" id="price" placeholder="Masukkan harga.."
                                    class="w-full rounded-md input-bordered input @error('price') border-red-500 @enderror"
                                    value="{{ old('price') }}">
                                @error('price')
                                    <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="stok">Jumlah</label>
                                <input type="text" wire:model="stok" id="stok" placeholder="Masukkan stok.."
                                    class="w-full rounded-md input-bordered input @error('stok') border-red-500 @enderror"
                                    value="{{ old('stok') }}">
                                @error('stok')
                                    <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <div class="form-group mb-3">
                                <label for="description">Keterangan</label>
                                <textarea wire:model="description" id="description" placeholder="Masukkan keterangan.."
                                    class="w-full rounded-md  textarea textarea-bordered text-base @error('description') border-red-500 @enderror" rows="4">{{ old('description') }}
                                    </textarea>
                                @error('description')
                                    <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-8">
                                <label for="image">Gambar</label>
                                    <img id="previewImage" alt=""
                                        class="w-20 mb-2">
                                    <input type="file"
                                    onchange="document.getElementById('previewImage').src = window.URL.createObjectURL(this.files[0])"  class="w-full rounded-md file-input file-input-bordered @error('image') border-red-500 @enderror"
                                    value="{{ old('image') }}" wire:model="image">
                                    @error('image')
                                        <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="btn btn-success text-white mb-4">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </x-container>
        </section>
        {{-- akhir semua produk --}}
</div>
