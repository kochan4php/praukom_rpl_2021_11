@extends('layouts.dashboard.app')

@section('container-dashboard')
  <div class="row pt-3 pb-1 mb-1 gap-4 gap-lg-0">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header text-center pb-0">
          <h3>Profile</h3>
        </div>
        <div class="card-body pb-0">
          <table class="table table-responsive">
            <tbody>
              <tr>
                <td class="border-0 custom-font text-nowrap">{{ __('ID Admin') }}</td>
                <td class="border-0 custom-font">{{ __(':') }}</td>
                <td class="border-0 custom-font">{{ __($admin->id_admin) }}</td>
              </tr>
              <tr>
                <td class="border-0 custom-font text-nowrap">{{ __('Nama Admin') }}</td>
                <td class="border-0 custom-font">{{ __(':') }}</td>
                <td class="border-0 custom-font">{{ __($admin->nama_admin) }}</td>
              </tr>
              <tr>
                <td class="border-0 custom-font text-nowrap">{{ __('NIP Admin') }}</td>
                <td class="border-0 custom-font">{{ __(':') }}</td>
                <td class="border-0 custom-font">{{ __($admin->nip) }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header text-center pb-0">
          <h3>Edit Profile</h3>
        </div>
        <div class="card-body pb-0">
          <x-alert-error-validation />
          <x-alert-sukses />
          <form action="{{ route('admin.profile.update', $admin->id_admin) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3 row custom-font">
              <label for="nis" class="col-sm-4 col-form-label text-md-end">
                {{ __('Nama Admin') }}
              </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="202115908"
                  required value="{{ old('nama_admin', $admin->nama_admin) }}">
              </div>
            </div>
            <div class="mb-3 row custom-font">
              <label for="nis" class="col-sm-4 col-form-label text-md-end">
                {{ __('NIP Admin') }}
              </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nip" name="nip" placeholder="202115908" required
                  value="{{ old('nip', $admin->nip) }}">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-4"></div>
              <div class="col-sm-8 d-flex gap-2">
                <button type="submit" class="btn btn-primary">Perbarui</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
