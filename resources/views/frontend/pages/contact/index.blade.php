@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
<style>
    label {
        font-size: 1.1rem; /* Besar font label */
        font-weight: 500;
    }

    .form-control {
        font-size: 1.1rem; /* Besar font input/textarea */
        padding: 10px 14px;
    }

    .btn-primary {
        font-size: 1.1rem; /* Besar font tombol */
        padding: 10px 20px;
    }

    h1, p {
        font-size: 1.25rem; /* Judul dan deskripsi atas */
    }
</style>

    <div class="container" style="margin-top: 100px; padding-top: 50px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mt-5">Hubungi Kami</h1>
                <p class="text-center">Silakan hubungi kami jika ada pertanyaan mengenai kursus, harga, atau lainnya.</p>
                <!-- Notifikasi sukses -->
                @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('kontak.kirim') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="subjek">Subjek:</label>
                <input type="text" id="subjek" name="subjek" class="form-control" required>
                    </div>

                    <div class="form-group">
                         <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" class="form-control" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20%;">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
