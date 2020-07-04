@extends('layouts.master')
@section('title', 'Pertanyaan')
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
            </ol>
        </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaans as $pertanyaan)
                        <tr>
                            <td>{{ $pertanyaan->judul }}</td>
                            <td>{{ $pertanyaan->isi }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-info" href="/jawaban/{{ $pertanyaan->id }}">Jawaban</a>
                                    <a class="btn btn-primary" href="/pertanyaan/{{ $pertanyaan->id }}">Detail</a>
                                    <a class="btn btn-warning" href="/pertanyaan/{{ $pertanyaan->id }}/edit">Edit</a>
                                    <form action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        <tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Pertanyaan</th>
                        <th>Isi</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table><br>
            <a href="/pertanyaan/create" class="btn btn-block btn-primary">Tambah Pertanyaan</a>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@push('script')
    <script src="/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endpush