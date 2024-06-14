@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-custom">
                    <div class="card-header">Informasi Pribadi</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('edit-profil.update', $editProfil->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama" value="{{ $editProfil->name }}" required>
                            </div>
                            <div class="form-row">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{ $editProfil->email }}" required>
                            </div>
                            
                            <div class="form-row">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                            </div>

                            <div class="form-row">
                                <label for="no_telp">No Telp</label>
                                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No Telp" value="{{ $editProfil->no_telp }}" required>
                            </div>
                            <div class="form-row">
                                <label for="domisili">Domisili</label>
                                <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Masukkan Domisili" value="{{ $editProfil->domisili }}" required>
                            </div>

                            <div class="form-row">
                                <label for="gender">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Laki - laki" {{ $editProfil->gender == 'Laki - laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="genderMale">
                                        Laki - laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Perempuan" {{ $editProfil->gender == 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="genderFemale">
                                        Permpuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="usia">Usia</label>
                                <input type="text" class="form-control" name="usia" id="usia" placeholder="Masukkan Usia" value="{{ $editProfil->usia }}" required>
                            </div>

                            <div class="row justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
