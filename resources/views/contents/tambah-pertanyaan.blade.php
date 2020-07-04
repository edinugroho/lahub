@extends('layouts.master')
@section('title', 'Tambah Pertanyaan')
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/pertanyaan">Pertanyaan</a></li>
            <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Pertanyaan</h3>
            
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form action="/pertanyaan" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul pertanyaan...">
                </div>
                <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea class="form-control" name="isi" rows="3" placeholder="Isi Pertanyaan..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection