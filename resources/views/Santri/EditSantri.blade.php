@extends('layout.main')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 pt-4">Edit Data Santri</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form  method="POST" action="/updatedata/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="{{$data->nama_lengkap}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik</label>
                            <input type="text" name="nik" value="{{$data->nik}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                         
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                              </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection