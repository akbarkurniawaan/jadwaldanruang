@extends('upt.base')


@section('content')
	<h1>Apakah anda yakin akan menghapus konten ini?</h1>
	<h1>" {{ $tahun_ajaran->tahun_ajaran }} "</h1>
    <form action="{{ route('deletetahun_ajaran', $tahun_ajaran->id_tahunajaran) }}" method="post" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" class="btn btn-lg btn-success" value="Delete"> 
    </form>
@stop

