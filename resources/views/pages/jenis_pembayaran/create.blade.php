@extends('layouts.master')
@section('title','Tambah Jenis Pembayaran')
@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Tambah Jenis Pembayaran
        <a href={{ route('jenispembayaran.index') }} style="float:right;color:white" class="btn btn-danger"><i
                class="fa fa-arrow-left"></i> Kembali</a></h3>


    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terjadi Kesalahan pada saat penginputan<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>

<div class="panel-body">
    <form action="{{ route('jenispembayaran.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Jenis Pembayaran</label>
                <input type="text" name="jenis_pembayaran" class="form-control" placeholder="Jenis Pembayaran" value="{{ old('jenis_pembayaran') }}"
                    required>
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-primary" style="margin-top:25px; " type="submit" id="btnClick"><i
                        class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
    </form>
</div>


@endsection
