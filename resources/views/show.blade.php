@extends('layouts.default')

@section('content')
         <section>
            <div class="container mt-5">
            <h3>EDIT PROJECT</h3>
            <div class ="row">
                <div class ="col-lg-9">
                <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multypart/form-data">
                    @csrf()
                    <div>
                    <div class="form-floating mb-2">Nama Komponen<div>
                 <input type="text" name="komponens" class="form-control" id="floatingInput" value="{{$data->komponens}}" >
                <label for="floatingInput"></label>
                          
                        
                    </div>
                    <div>
                        <div class="form-floating mb-2">Fungsi</div>
                        <input type="text" name="komponens" class="form-control" id="floatingInput" value="{{$data->fungsi}}">
                        <label for="floatingInput"></label>
                    </div>
        
                    <div>
                    <div class="form-floating mb-2">Jenis</div>
                        <input type="text" name="komponens" class="form-control" id="floatingInput"value="{{$data->jenis}}">
                    <div>
                    <div class="form-label">File Gambar</div>
                    <input type="file" name="fGAMBAR" class="form-control"value="{{$data->fGAMBAR}}">
                </div>
                    </div>
                    <div class="form-label mt-2">
                       <button type="submit" class="btn btn-outline-success">update project</button>
                    </div>
                    <div class="form-label mt-5">
                       <a href="{{ url('/home')}}">
                       <button type="button" class="btn btn-outline-primary">Kembali ke halaman Sebelumnya</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
