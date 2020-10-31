@extends('layouts.app')
@section('title','Siswa')

@section('content')

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteLabel">Yakin ingin menghapus ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-delete" action="" method="POST">
        @method('delete')
        @csrf
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
{!! session()->get('msg') !!}

@if (request()->search )
<a class="btn btn-danger mt-2 mb-1 float-right" href="/siswa">Batal dan kembali</a>
@else
  @guest
  <a class="btn btn-warning mt-2 mb-4 float-right" href="/login">Login untuk menambah siswa</a>
  @else
  <a class="btn btn-info mt-2 mb-4 float-right" href="/siswa/create">Tambah Siswa</a>
  @endguest
@endif
<form action="{{ route('cari.siswa') }}" method="get">
  @csrf
  <div class="input-group float-left flex-nowrap col-lg-6">
  <input value="{{ request()->search }}" type="text" name="search" class="form-control" placeholder="cari siswa" aria-label="cari siswa" aria-describedby="addon-wrapping">
    <button class="btn btn-secondary p-0" type="submit"> 
    <div class="input-group-prepend">
        <span class="input-group-text bg-secondary border-0 text-white" id="addon-wrapping"><i class="fas fa-search" ></i></span>
    </div>
    </button>
  </div>
</form>
<div class="table-responsive">
  <table class="table">
    <thead class="thead-light">
      <tr>
        {{-- <th width=5% scope="col">#</th> --}}
        <th width=15% scope="col">Nis</th>
        <th width=40% scope="col">Nama.lengkap</th>
        <th width=20% scope="col">Kelas</th>
        <th width=20% scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @forelse($siswa as $s)
      
      <tr>
        {{-- untuk nomor  --}}
        {{-- <th scope="row">{{ $loop->iteration }}</th> --}} 
        <th scope="row">{{ $s->nis}}</th>
        <td>{{ $s->fullname }}</td>
        <td width=20%>{{ $s->kelas}}</td>
        <td>
          @guest
          <a class="btn btn-sm btn-info" href="{{ route('detail.siswa',$s->nis) }}">detail</a> 
          @else
          <a class="btn btn-sm btn-success" href="{{ route('edit.siswa',$s->nis) }}">edit</a>  
          <a class="btn btn-sm btn-info" href="{{ route('detail.siswa',$s->nis) }}">detail</a> 
          <button data-action="{{ route('hapus.siswa',$s->nis) }}" type="button" class="btn btn-delete btn-danger btn-sm" data-toggle="modal" data-target="#delete">
            Hapus
          </button>
          @endguest
        </td>
      </tr>
      @empty
      <tr>
        {{-- untuk nomor  --}}
        {{-- <th scope="row">{{ $loop->iteration }}</th> --}} 
        <th  colspan="4" class="text-center" scope="row"> <b>Data tidak ditemukan</b> </th>
      </tr>
      @endforelse
    </tbody>
</table>
</div>
{{ $siswa->links('pagination::bootstrap-4')}}
@endsection

@section('script')
    <script>
      $('.btn-delete').click(function () {
          console.log($(this).data('action'))
          $('#form-delete').attr('action', $(this).data('action'));
        
      });

    </script>
@endsection