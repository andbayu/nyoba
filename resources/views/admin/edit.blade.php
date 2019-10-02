@extends('.leyot.app')
@section('title')
    - Edit Data Penduduk
@endsection
@section('content')
<!-- Main content -->
<section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
          </div>
            <div class="card-body">
                <form class="form-group" action="{{route('penduduk.update',$pdd->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{$pdd->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nik">Nik :</label>
                            <input class="form-control" type="number" name="nik" id="nik" value="{{$pdd->nik}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input class="form-control" type="text" name="alamat" id="almat" value="{{$pdd->alamat}}">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>

                </form>
            </div>
          </div>
        </div>
</section>

@endsection
