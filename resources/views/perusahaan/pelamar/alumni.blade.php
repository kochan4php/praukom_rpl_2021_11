@extends('layouts.dashboard.app')

@section('container-dashboard')
  <div class="row pt-3 pb-1 mb-1">
    <div class="col">
      <div class="card">
        <div class="card-header pb-0">
          <h2>Detail Data Alumni</h2>
        </div>
        <div class="card-body">
          <div class="row mt-3 gap-4 gap-lg-0">
            <div class="col-lg-3 text-center">
              @if (is_null($alumni->foto))
                <img src="{{ Avatar::create($alumni->nama_lengkap) }}" alt="{{ $alumni->username }}" width="170"
                  class="rounded-circle">
              @else
                <img src="{{ asset('storage/' . $alumni->foto) }}" alt="{{ $alumni->username }}" width="170">
              @endif
            </div>
            <div class="col-lg-9">
              <table class="table table-responsive">
                <tbody>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('NIS') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __($alumni->nis) }}</td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Nama Lengkap') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __($alumni->nama_lengkap) }}</td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Jenis Kelamin') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">
                      @if ($alumni->jenis_kelamin === 'L')
                        {{ __('Laki-laki') }}
                      @elseif ($alumni->jenis_kelamin === 'P')
                        {{ __('Perempuan') }}
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Jurusan') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __($alumni->jurusan->keterangan) }}</td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Tahun Angkatan') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __($alumni->angkatan->angkatan_tahun) }}</td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Tempat Lahir') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">
                      @if (is_null($alumni->tempat_lahir))
                        {{ __('Data tempat lahir tidak ada') }}
                      @else
                        {{ __($alumni->tempat_lahir) }}
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Tanggal Lahir') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">
                      @if (is_null($alumni->tanggal_lahir))
                        {{ __('Data tanggal lahir tidak ada') }}
                      @else
                        {{ \Carbon\Carbon::parse($alumni->tanggal_lahir)->format('d M Y') }}
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('No. Telepon') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">
                      @if (is_null($alumni->no_telepon))
                        {{ __('Data nomor telepon siswa tidak ada') }}
                      @else
                        {{ __($alumni->no_telepon) }}
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td class="border-0 fs-5 fs-md-6 text-nowrap">{{ __('Alamat') }}</td>
                    <td class="border-0 fs-5 fs-md-6">{{ __(':') }}</td>
                    <td class="border-0 fs-5 fs-md-6">
                      @if (is_null($alumni->alamat_tempat_tinggal))
                        {{ __('Data alamat tempat tinggal siswa tidak ada') }}
                      @else
                        {{ __($alumni->alamat_tempat_tinggal) }}
                      @endif
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col">
              <a href="{{ route('perusahaan.pelamar.index') }}" class="btn btn-danger custom-btn">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
