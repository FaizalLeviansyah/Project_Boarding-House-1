@extends('layouts.backend.app')
@section('title','Data Kosan')
@section('content')
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
  @elseif($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
  @endif

<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
              <h4 class="card-title">Data List Kamar
                <a href="{{route('kamar.create')}}" class="btn btn-primary btn-sm">Tambah Kamar</a>
              </h4>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead>
                    <tr>
                      <th width="1%">No</th>
                      <th class="text-nowrap">Nama Kamar</th>
                      <th class="text-nowrap">Type Kamar</th>
                      <th class="text-nowrap">Jenis Kamar</th>
                      <th class="text-nowrap">Tersedia</th>
                      <th class="text-nowrap">Sisa</th>
                      <th class="text-nowrap">Harga Kamar</th>
                      <th class="text-nowrap">Status Kamar</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kamar as $key => $item)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$item->nama_kamar}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->jenis_kamar}}</td>
                      <td>{{$item->stok_kamar}}</td>
                      <td>{{$item->sisa_kamar}}</td>
                      <td>{{rupiah($item->harga_kamar)}}</td>
                      <td><span class="btn btn-{{$item->is_active == 0 ? 'primary' : 'success'}} btn-sm text-white">{{$item->is_active == 1 ? 'Aktif' : 'Tidak Aktif'}}</span></td>
                      <td class="text-center">
                        <a href="{{url('room', $item->slug)}}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{route('kamar.edit', $item->slug)}}" class="btn btn-warning btn-sm">Edit</a>
                        <a data-id-kamar="{{$item->id}}" id="isAktifKamar" class="btn btn-danger btn-sm">{{$item->is_active == 0 ? 'Aktifkan' : 'Non-Aktifkan'}}</a>
                        @if ($item-> latitude == null)
                          <a href="{{route('kamar.editmap', $item->slug)}}" class="btn btn-primary btn-sm">Upload To Map</a>
                        @endif
                        @if ($item->status == 0)
                            <span class="btn btn-primary btn-sm text-white">Review</span>
                        @endif
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

@endsection
@section('scripts')
<script type="text/javascript">
    // Non-aktif dan aktifkan Kamar
    $(document).on('click', '#isAktifKamar', function () {
    var id = $(this).attr('data-id-kamar');
    $.get('is-aktif-kamar', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(_resp){
        location.reload()
    });
    });
</script>
@endsection
