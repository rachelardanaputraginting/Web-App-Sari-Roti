<div>
    {{-- breadcumbs --}}
    <section id="breadcumbs" class="pt-6">
        <x-container>
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="text-sm breadcrumbs">
                        <ul>
                            <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                            <li><a href="{{ route('admin.user') }}">Pelanggan</a></li>
                            <li class="font-semibold">Tambah Pelanggan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </x-container>
    </section>
    {{-- Akhir breadcumbs --}}

    {{-- semua user --}}
    <section id="semua-user" class="py-12">
        <x-container>
            <div class="flex flex-wrap px-4 mb-8">
                <div class="w-full flex items-center bg-white dark:bg-dark py-2 px-4 shadow-md rounded-md text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-clipboard-text dark:text-secondary" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                        </path>
                        <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                    </svg>
                    <h2 class="px-4 font-semibold py-5 text-2xl dark:text-secondary">Tambah Pelanggan</h2>
                </div>
            </div>
            <div class="flex flex-wrap px-4">
                <form wire:submit.prevent="store"
                    class="w-full flex flex-wrap justify-between bg-white dark:bg-dark shadow-md rounded-md ">
                    <div class="w-full md:w-1/2 px-4">
                        <div class="form-group mb-3">
                            <label for="name">Nama</label>
                            <input type="text" wire:model="name" id="name" placeholder="Masukkan nama.."
                                class="w-full rounded-md input-bordered input @error('name') border-red-500 @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="province" class="form-label">Provinsi</label>
                            <select class="select select-bordered w-full" id="province" name="province"
                                wire:model="province">
                                <option>-- Provinsi Asal --</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->province_id }}">{{ $province->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('province')
                                <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="city" class="form-label">Kota Asal</label>
                            <select class="select select-bordered w-full" id="city" name="city"
                                wire:model="city">
                                <option>-- Kota --</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->city_id }}">{{ $city->title }}</option>
                                @endforeach
                            </select>
                            @error('city')
                                <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="street">Jalan</label>
                            <input type="text" wire:model="street" id="street" placeholder="Masukkan street.."
                                class="w-full rounded-md input-bordered input @error('street') border-red-500 @enderror"
                                value="{{ old('street') }}">
                            @error('street')
                                <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-4">
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" id="email" placeholder="Masukkan email.."
                                class="w-full rounded-md input-bordered input @error('email') border-red-500 @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Telephone</label>
                            <input type="text" wire:model="phone" id="phone"
                                placeholder="Masukkan no. telephone.."
                                class="w-full rounded-md input-bordered input @error('phone') border-red-500 @enderror"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-red-500 text-xs ml-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-8">
                            <label for="image">Foto</label>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="w-20 mb-2 rounded-md">
                            @endif
                            <div wire:loading wire:target="image">Preview..</div>
                            <input type="file"
                                class="w-full rounded-md file-input file-input-bordered @error('image') border-red-500 @enderror"
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
    {{-- akhir semua user --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script>

    </script>

    {{-- <script>
        $(document).ready(function() {
            $('#province').on('change', function() {
                let provinceId = $(this).val();
                if (provinceId) {
                    jQuery.ajax({
                        url: 'province/' + provinceId + '/cities',
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#city').empty();
                            $.each(data, function(key, value) {
                                $('#city').append(
                                    '<option value="' + key + '" selected>' + value +
                                    '</option>');
                            });
                        },
                    });
                } else {
                    $('select[name="city"]').empty();
                }
            });
        });
    </script> --}}
</div>
