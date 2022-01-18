@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class="text-secondary">
                        Enter the information to add a class, enter the data correctly
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.class')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select name="name" id="class" class="form-control">
                                        <option value="">Pilih nama Kelas</option>
                                        <option value="x">X</option>
                                        <option value="xi">XI</option>
                                        <option value="xii">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Walikelas">Kelas</label>
                                    <select name="walas" id="class" class="form-control">
                                        <option value="">Pilih walikelas</option>
                                        <option value="Udin">Udin</option>
                                        <option value="Teguh">Teguh</option>
                                        <option value="Supri">Supri</option>
                                        <option value="Gunawan">Gunawan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="jurusan" id="" class="form-control" placeholder="Jumlah Siswa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah Siswa</label>
                                    <input type="text" name="jumlah" id="" class="form-control" placeholder="Jumlah Siswa">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Add Class</button>
                                <a href="{{route('home')}}" class="btn btn-outline-secondary">Back To Home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
