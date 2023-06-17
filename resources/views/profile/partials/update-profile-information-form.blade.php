<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
{{--    nomor anggota--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Nomor Anggota')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}
{{--    nama anggota--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Nama Anggota')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}
{{--    alamat--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Alamat')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}
{{--        tanngal lahir--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}
{{--        jenis kelamin--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}
{{--        nomor telepon--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}
        <!-- Field Nomor Anggota -->
        <div>
            <x-input-label for="nomor_anggota" :value="__('Nomor Anggota')" />
            <x-text-input id="nomor_anggota" name="nomor_anggota" type="text" class="mt-1 block w-full" :value="old('nomor_anggota', $user->anggota->nomor_anggota ?? '')" required autofocus autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nomor_anggota')" />
        </div>

        <!-- Field Nama Anggota -->
        <div>
            <x-input-label for="nama_anggota" :value="__('Nama Anggota')" />
            <x-text-input id="nama_anggota" name="nama_anggota" type="text" class="mt-1 block w-full" :value="old('nama_anggota', $user->anggota->nama_anggota ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nama_anggota')" />
        </div>

        <!-- Field Alamat -->
        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" :value="old('alamat', $user->anggota->alamat ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
        </div>

        <!-- Field Tanggal Lahir -->
        <div>
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
{{--            <x-date-input id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full" :value="old('tanggal_lahir', optional($user->anggota)->tanggal_lahir ? $user->anggota->tanggal_lahir->format('Y-m-d') : '')" required autocomplete="off" />--}}
            <x-date-input id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full"
                          :value="old('tanggal_lahir', optional(optional($user->anggota)->tanggal_lahir)->format('Y-m-d'))"
                          required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />
        </div>

        <!-- Field Jenis Kelamin -->
        <div>
            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
            <x-select-input id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full" :selected="old('jenis_kelamin', optional($user->anggota)->jenis_kelamin ?? '')" :options="['L' => 'Laki-laki', 'P' => 'Perempuan']" required />
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <!-- Field Nomor Telepon -->
        <div>
            <x-input-label for="nomor_telepon" :value="__('Nomor Telepon')" />
            <x-text-input id="nomor_telepon" name="nomor_telepon" type="text" class="mt-1 block w-full" :value="old('nomor_telepon', $user->anggota->nomor_telepon ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nomor_telepon')" />

{{--            <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('email')" />--}}

{{--            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())--}}
{{--                <div>--}}
{{--                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">--}}
{{--                        {{ __('Your email address is unverified.') }}--}}

{{--                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">--}}
{{--                            {{ __('Click here to re-send the verification email.') }}--}}
{{--                        </button>--}}
{{--                    </p>--}}

{{--                    @if (session('status') === 'verification-link-sent')--}}
{{--                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">--}}
{{--                            {{ __('A new verification link has been sent to your email address.') }}--}}
{{--                        </p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
