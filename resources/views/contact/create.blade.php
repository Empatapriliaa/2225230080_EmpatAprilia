@extends('contact.layout')
@section('content')

<div class="card">
  <div class="card-header">Jadwal Mata Kuliah</div>
<div class="card-body">


<br/>
      <form action="{{ url('contact') }}" method="post">
        @csrf
        <label>Hari</label></br>
        <input type="text" name="Hari" id="Hari" class="form-control"></br>
        <label>Mata Kuliah</label></br>
        <input type="text" name="Mata_Kuliah" id="Mata_Kuliah" class="form-control"></br>
        <label>Dosen</label></br>
        <input type="text" name="Dosen" id="Dosen" class="form-control"></br>
        <label>Jumlah SKS</label></br>
        <input type="text" name="Jumlah_SKS" id="jumlah_SKS" class="form-control"></br>
        <button type="submit" >Simpan</button>
    </form>
   
</div>
</div>
 
@stop