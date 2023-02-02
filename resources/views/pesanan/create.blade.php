@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="p-3 btn btn-outline-warning text-dark col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark">PEMESANAN ALAT BERAT</h1>
            <form action="{{ url('pesanan') }}" method="post" class="">
                @csrf
                <div class="form-floating">
                    <label for="Nama">Nama </label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="nomor">No Hp/Wa</label>
                    <input type="text" class="form-control" name="number" placeholder="No Hp/Wa" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="nomor">satuan harga</label>
                    <input type="number" class="form-control" name="price" placeholder="satuan harga" autocomplete="off">
                </div>
                
                <div class="form-floating">
                    <label for="fakultas">/ bulan</label>
                     <select id="fakultas" name="months_id" class="form-control">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option> 
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="form-floating">
                    <label for="fakultas">Nama Alat Berat</label>
                     <select id="fakultas" name="heavyequipmenttypes_id" class="form-control">
                        <option value="1">Eksavator</option> 
                        <option value="2">Grader</option>
                        <option value="3">Crane</option> 
                        <option value="4">Loader</option>
                    </select>
                </div>
                <button class="w-50 btn btn-outline-success text-dark mt-3" type="submit">Pesan</button>
            </form>
        
        </main>
    </div>
</div>
@endsection

