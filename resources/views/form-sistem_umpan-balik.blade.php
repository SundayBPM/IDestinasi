@extends('layouts/main')

@section('container')
<div class="form-ulasan">
    <!-- Form untuk membuat ulasan -->
    <form action="/ulasan/store" method="POST">
        @csrf
        <!-- Input untuk rating -->
        <input type="number" name="rating" placeholder="Rating">
        <!-- Input untuk ulasan -->
        <textarea name="ulasan" placeholder="Ulasan"></textarea>
        <!-- Hidden input untuk menyimpan ID destinasi -->
        <input type="hidden" name="id_destinasi" value="{{ $id_destinasi }}">
        <!-- Tombol untuk submit form -->
        <button type="submit">Kirim Ulasan</button>
    </form>
</div>
@endsection