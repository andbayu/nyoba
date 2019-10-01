@extends('.leyot.app')
@section('title')
    - Data Penduduk
@endsection
@section('content')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nama: activate to sort column descending" style="width: 93px;">Nama</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="NIK : activate to sort column ascending" style="width: 125px;">NIK</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Alamat : activate to sort column ascending" style="width: 108px;">Alamat</th>
            </tr>
            </thead>

            <tbody>
                {{$no=1}}
                 @foreach ($penduduks as $pdd)
            <tr role="row" class="odd">
            <td class="sorting_1"> {{$no++}}</td>
              <td >{{$pdd->nama}}</td>
              <td>{{$pdd->nik}}</td>
              <td>{{$pdd->alamat}}</td>
            </tr>
              @endforeach
           </tbody>

            <tfoot>
        <tr>
            <th>No. </th>
            <th rowspan="1" colspan="1">Nama</th>
            <th rowspan="1" colspan="1">NIK</th>
            <th rowspan="1" colspan="1">Alamat</th>
        </tr>
            </tfoot>
          </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            </div>
        </div>
    </div>
</div>
        </div>
        <!-- /.card-body -->
      </div>
@endsection
{{-- <thead>
        <tr>
            <th>Nama </th>
            <th>Nik </th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        @foreach ($penduduks as $pdd)
        <tbody>
        <tr>
            <td>{{$pdd->nama}}</td>
            <td>{{$pdd->nik}}</td>
            <td>{{$pdd->alamat}}</td>
        </tr>
        </tbody>
        @endforeach
        <tfoot>
        <tr>
            <th>Nama </th>
            <th>Nik </th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </tfoot> --}}
