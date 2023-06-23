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

    <form method="post" action="{{ route('pustakawan.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <!-- Nama Pustakawan -->
        <div>
            <x-input-label for="nama_pustakawan" :value="__('Nama Pustakawan')" />
            <x-text-input id="nama_pustakawan" class="block mt-1 w-full" type="text" name="nama_pustakawan" :value="old('nama_pustakawan', $user->pustakawan->nama_pustakawan ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nama_pustakawan')" />
        </div>

        <!-- Jenis Kelamin -->
        <div>
            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
            <x-select-input id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full"
                            :selected="old('jenis_kelamin', optional($user->pustakawan)->jenis_kelamin ?? '')"
                            :options="['L' => 'Laki-laki', 'P' => 'Perempuan']" required />
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <!-- Tanggal Lahir -->
        <div>
            <x-input-label for="tgl_lahir_pustakawan" :value="__('Tanggal Lahir')" />
            <x-date-input id="tgl_lahir_pustakawan" name="tgl_lahir_pustakawan" class="mt-1 block w-full"
                          :value="old('tgl_lahir_pustakawan', optional(optional($user->pustakawan)->tgl_lahir_pustakawan)->format('Y-m-d'))"
                          required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('tgl_lahir_pustakawan')" />
        </div>

        <!-- Alamat -->
        <div>
            <x-input-label for="alamat_pustakawan" :value="__('Alamat')" />
            <x-text-input id="alamat_pustakawan" class="block mt-1 w-full" type="text" name="alamat_pustakawan" :value="old('alamat_pustakawan', $user->pustakawan->alamat_pustakawan ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('alamat_pustakawan')" />
        </div>

        <!-- Nomor Telepon -->
        <div>
            <x-input-label for="tlp_pustakawan" :value="__('Nomor Telepon')" />
            <x-text-input id="tlp_pustakawan" class="block mt-1 w-full" type="text" name="tlp_pustakawan" :value="old('tlp_pustakawan', $user->pustakawan->tlp_pustakawan ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('tlp_pustakawan')" />
        </div>

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
