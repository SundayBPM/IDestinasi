@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-custom">
                    <div class="card-header">Informasi Pribadi</div>
                    <div class="card-body">
                        <div class="form-row">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="form-row">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{ $user->email }}" readonly>
                        </div>
                            
                        <div class="form-row">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan Role" value="{{ $user->role }}" readonly>
                        </div>

                        <div class="form-row">
                            <label for="no_telp">No Telp</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No Telp" value="{{ $user->no_telp }}" readonly>
                        </div>
                        <div class="form-row">
                            <label for="domisili">Domisili</label>
                            <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Masukkan Domisili" value="{{ $user->domisili }}" readonly>
                        </div>

                        <div class="form-row">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" name="gender" id="gender" placeholder="Masukkan Gender" value="{{ $user->gender }}" readonly>
                        </div>
                        <div class="form-row">
                            <label for="usia">Usia</label>
                            <input type="text" class="form-control" name="usia" id="usia" placeholder="Masukkan Usia" value="{{ $user->usia }}" readonly>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <a href="{{ route('edit-profil.edit', $user->id) }}" class="btn btn-primary">Edit</a> <!-- Tombol "Edit" -->        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection