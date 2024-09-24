@extends('layouts.admin.app')

@section('title', 'Tambah Dokumen')

@section('content')
<style>
    /* Animasi spinner loading */
    .spinner {
        display: none;
        position: fixed;
        z-index: 10000;
        top: 50%;
        left: 50%;
        width: 100px;
        height: 100px;
        background: transparent;
        border-radius: 50%;
        border: 10px solid rgba(0, 0, 0, 0.1);
        border-top-color: #3498db;
        animation: spin 1s infinite linear;
        transform: translate(-50%, -50%);
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 9999;
        display: none;
    }
</style>

<!-- Spinner loading -->
<div class="overlay"></div>
<div class="spinner"></div>

<form action="{{ route('super.dokumen.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="judul">Judul Dokumen</label>
        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" required>
        @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="gambar">Gambar Sampul Dokumen <span style="color:red"> (Screenshoot dari halaman depan dokumen)</span></label>
        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
        @error('gambar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="file">File <span style="color:red">(*Ukuran PDF wajib dibawah 2MB)</span></label>
        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" accept=".pdf">
        @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-success">Simpan</button>
</form>


<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        console.log("Form submitted");
        // Menampilkan overlay dan spinner loading
        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.spinner').style.display = 'block';

        // Mencegah submit ganda
        this.querySelector('button[type="submit"]').disabled = true;
    });
</script>

@endsection
