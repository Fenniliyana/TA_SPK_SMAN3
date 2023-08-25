@extends('template.base')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="mb-0">Profil</h5>
                    <hr>

                        <div class="card-body">
                            <form class="row g-3" method="post" action='{{ url('profil/update') }}'>
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ Auth::user()->Siswa->siswa_nama }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir"
                                        value="{{ Auth::user()->Siswa->siswa_tgl_lahir }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmp_lahir"
                                        value="{{ Auth::user()->Siswa->siswa_tmp_lahir }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="" class="form-select">
                                        <option value="Laki - Laki" @if (Auth::user()->Siswa->siswa_jk == 'Laki - Laki') selected @endif>Laki -
                                            Laki</option>
                                        <option value="Perempuan" @if (Auth::user()->Siswa->siswa_jk == 'Perempuan') selected @endif>
                                            Perempuan</option>
                                    </select>

                                </div>
                                 <div class="col-12">
                                    <label class="form-label">NIS</label>
                                    <input type="text" class="form-control" name="nis"
                                        value="{{ Auth::user()->Siswa->siswa_nis }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas"
                                        value="{{ Auth::user()->Siswa->siswa_kelas }}">
                                </div>                               
                                
                                <div class="col-12">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="4" cols="4">{{ Auth::user()->Siswa->siswa_alamat }}</textarea>
                                </div>
                        </div>
                    </div>
                    <div class="text-start">
                        <button class="btn btn-primary px-4">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
        @if (session()->has('profil'))
            Swal.fire({
                title: 'Berhasil',
                text: 'Data Profil berhasil di ubah',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        @endif
    </script>
@endsection
