@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-white shadow-sm">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('manage.add.form.class')}}" class="btn btn-outline-info">Add Class</a>
                        <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($class as $class )
                                        <tr>
                                            <td>{{$class->name}}</td>
                                            <td>{{$class->walas}}</td>
                                            <td>{{$class->jurusan}}</td>
                                            <td>{{$class->jumlah}}</td>
                                        </tr>
                                        @csrf
                                        @method('DELETE')
                                    @empty
                                    <td colspan="5" class="text-center">
                                        Sorry, currently data is not available, please add class
                                    </td>
                                    @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
