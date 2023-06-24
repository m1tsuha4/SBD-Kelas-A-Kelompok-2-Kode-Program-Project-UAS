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
        <div class="flex flex-col">
            <label for="nama_pustakawan" class="form-label">{{ __('Nama Pustakawan') }}</label>
            <input id="nama_pustakawan" class="form-control" type="text" name="nama_pustakawan" value="{{ old('nama_pustakawan', $user->pustakawan->nama_pustakawan ?? '') }}" required autocomplete="off" />
            <x-input-error :messages="$errors->get('nama_pustakawan')" />
        </div>

        <div class="flex flex-col">
            <label for="jenis_kelamin" class="form-label">{{ __('Jenis Kelamin') }}</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                <option value="L" {{ old('jenis_kelamin', optional($user->pustakawan)->jenis_kelamin) === 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin', optional($user->pustakawan)->jenis_kelamin) === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
            <x-input-error :messages="$errors->get('jenis_kelamin')" />
        </div>

        <div class="form-group">
            <label for="tgl_lahir_pustakawan" class="form-label">{{ __('Tanggal Lahir') }}</label>
            <x-date-input id="tgl_lahir_pustakawan" name="tgl_lahir_pustakawan" class="mt-1 w-full"
                          :value="old('tgl_lahir_pustakawan', optional(optional($user->pustakawan)->tgl_lahir_pustakawan)->format('Y-m-d'))"
                          required autocomplete="off" />
            <x-input-error :messages="$errors->get('tgl_lahir_pustakawan')" />
        </div>




        <div class="flex flex-col">
            <label for="alamat_pustakawan" class="form-label">{{ __('Alamat') }}</label>
            <input id="alamat_pustakawan" class="form-control" type="text" name="alamat_pustakawan" value="{{ old('alamat_pustakawan', $user->pustakawan->alamat_pustakawan ?? '') }}" required />
            <x-input-error :messages="$errors->get('alamat_pustakawan')" />
        </div>

        <div class="flex flex-col">
            <label for="tlp_pustakawan" class="form-label">{{ __('Nomor Telepon') }}</label>
            <input id="tlp_pustakawan" class="form-control" type="text" name="tlp_pustakawan" value="{{ old('tlp_pustakawan', $user->pustakawan->tlp_pustakawan ?? '') }}" required />
            <x-input-error :messages="$errors->get('tlp_pustakawan')" />
        </div>


        <div class="d-flex justify-content-between">
            <br>
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>

    </form>
</section>
