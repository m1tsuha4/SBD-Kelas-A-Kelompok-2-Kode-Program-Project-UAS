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
        <style>
            .form-group {
                display: flex;
                flex-direction: column;
                margin-bottom: 1rem;
            }

            .form-group label {
                margin-bottom: 0.5rem;
            }
        </style>

        <div class="form-group">
            <label for="nomor_anggota">{{ __('Nomor Anggota') }}</label>
            <x-text-input id="nomor_anggota" name="nomor_anggota" type="text" class="mt-1 block w-full" :value="old('nomor_anggota', $user->anggota->nomor_anggota ?? '')" required autofocus autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nomor_anggota')" />
        </div>

        <div class="form-group">
            <label for="nama_anggota">{{ __('Nama Anggota') }}</label>
            <x-text-input id="nama_anggota" name="nama_anggota" type="text" class="mt-1 block w-full" :value="old('nama_anggota', $user->anggota->nama_anggota ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nama_anggota')" />
        </div>

        <div class="form-group">
            <label for="alamat">{{ __('Alamat') }}</label>
            <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" :value="old('alamat', $user->anggota->alamat ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">{{ __('Tanggal Lahir') }}</label>
            <x-date-input id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full"
                          :value="old('tanggal_lahir', optional(optional($user->anggota)->tanggal_lahir)->format('Y-m-d'))"
                          required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
            <x-select-input id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full" :selected="old('jenis_kelamin', optional($user->anggota)->jenis_kelamin ?? '')" :options="['L' => 'Laki-laki', 'P' => 'Perempuan']" required />
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <div class="form-group">
            <label for="nomor_telepon">{{ __('Nomor Telepon') }}</label>
            <x-text-input id="nomor_telepon" name="nomor_telepon" type="text" class="mt-1 block w-full" :value="old('nomor_telepon', $user->anggota->nomor_telepon ?? '')" required autocomplete="off" />
            <x-input-error class="mt-2" :messages="$errors->get('nomor_telepon')" />
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">{{ __('Save') }}</button>

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
