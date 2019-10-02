@extends('.leyot.app')
@section('title')
    - Data Penduduk
@endsection
@section('content')
<!-- Main content -->
<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                    <th>NO. </th>
                    <th>Nama </th>
                    <th>Nik </th>
                    <th>Alamat</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
              </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach ($penduduks as $pdd)
                <tr>
                    <td><?php echo $i++;?></td>
                    <td>{{$pdd->nama}}</td>
                    <td>{{$pdd->nik}}</td>
                    <td>{{$pdd->alamat}}</td>
                    <td style="width=30px;">
                        <form action="{{ route('penduduk.destroy',$pdd->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('penduduk.edit',$pdd->id)}}">
                                <input class="btn btn-primary" type="submit" value="Edit">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>NO. </th>
                    <th>Nama </th>
                    <th>Nik </th>
                    <th>Alamat</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                </tr>
            </tfoot>
          </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</section>
@endsection
