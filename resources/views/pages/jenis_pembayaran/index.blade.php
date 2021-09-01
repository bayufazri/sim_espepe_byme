@extends('layouts.master')
@section('title','Data Jenis Pembayaran')
@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Data Jenis Pembayaran</h3>
       @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
       @endif
</div>

<a href="{{ route('jenispembayaran.create') }}" class="btn btn-success" style="margin-left:25px;margin-bottom:20px;"><i class="fa fa-plus" style="margin-right:10px; "></i>Tambah Data</a>
<div class="panel-body">
    <div class="panel-body no-padding">
        <table class="table table-bordered"  id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jenispembayaran as $jp)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $jp->jenis_pembayaran }}</td>
                    <td>
                        <form action="{{ route('jenispembayaran.destroy', $jp->id) }}" method="POST">
                           <a class="btn btn-primary btn-action" href="{{ route('jenispembayaran.show',$jp->id) }}"><i class="fa fa-eye"></i></a>
                           <a class="btn btn-info btn-action" href="{{ route('jenispembayaran.edit',$jp->id) }}"><i class="fa fa-pencil"></i></a>
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('Anda Yakin ?')"><i class="fa fa-trash"></i></button>
                        </form>
                   </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" align="center">Data Tidak Tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection