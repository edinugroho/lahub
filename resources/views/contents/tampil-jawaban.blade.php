@extends('layouts.master')
@section('title', 'Jawaban')
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Jawaban</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Jawaban</li>
            </ol>
        </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header bg-warning">
            <h3 class="widget-user-username">{{ $pertanyaan->judul }}</h3>
        </div>
        <div class="card-body">
            <p>Pertanyaan : {{ $pertanyaan->isi }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Jawaban</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jawabans as $jawaban)
                        <tr>
                            <td>{{ $jawaban->isi }}</td>
                        <tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Jawaban</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Jawaban</h3>
            
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form action="/jawaban/{{ $pertanyaan->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="isi">Isi Jawaban</label>
                    <textarea class="form-control" name="isi" rows="3" placeholder="Isi Jawaban..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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