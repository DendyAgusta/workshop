
@extends('layouts.main')
@section('container')

<table align="center" class="table mt-5">
<tr align="center">
    <th>Nama perusahaan</th>
    <th>No Hp/Wa</th>
    <th>price/month</th>
    <th>Alat</th>
    <th>Month</th>
    <th>Total Harga</th>
    <th colspan="2">Aksi</th>
</tr>
@foreach ($alat as $key=>$value)

<tr align="center">
<td>{{ $value->name }}</td>
<td>{{ $value->number }}</td>
<td>{{ $value->price }}</td>
<td>{{ $value->heavyequipmenttypes->name }}</td>
<td>{{ $value->months->name }}</td>
<td>
    @php
        $ka = $value->months->name;
        $om = $value->price;
        $ma = $ka * $om;
        echo $ma;
    @endphp
</td>
<td><a href="{{ url('pesanan/'.$value->id.'/edit') }}" class="text-dark btn btn-outline-info btn-success">Upgrade</a></td>
<td>
    <form action="{{ url('pesanan/'.$value->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button class="text-dark btn btn-outline-info btn-danger" type="submit">Delete</button>
    </form>
</td>
</tr>

@endforeach
</table>
<div class="row justify-content-center mt-5">
    <a href="pesanan/create" class="w-25 btn btn-outline-info btn-warning text-dark">Tambah</a>
 </div>
    
@endsection

    

    


