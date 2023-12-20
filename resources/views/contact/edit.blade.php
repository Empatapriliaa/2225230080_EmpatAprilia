@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Jadwal Mata Kuliah</div>
<div class="card-body">

<br/>
      <form action="{{ url('contact/' .$contacs->id)  }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>Hari</label></br>
        <input type="text" name="Hari" id="Hari" class="form-control" value="{{ $model->Hari }}"></br>
        <label>Mata Kuliah</label></br>
        <input type="text" name="Mata_Kuliah" id="MataKuliah" class="form-control"  value="{{ $model->Mata_Kuliah }}"></br>
        <label>Dosen</label></br>
        <input type="text" name="Dosen" id="Dosen" class="form-control"  value="{{ $model->Dosen }}"></br>
        <label>Jumlah SKS</label></br>
        <input type="text" name="Jumlah_SKS" id="jumlahSKS" class="form-control"  value="{{ $model->JumlahSKS }}"></br>
        <button type="submit" >Update</button>
    </form>
</div>
</div>
 
 
@stop