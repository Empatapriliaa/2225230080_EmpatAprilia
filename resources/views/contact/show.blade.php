@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Jadwal Mata Kuliah</div>
<div class="card-body">

<div class="card-body">
    <h5 class="card-title">Hari : {{ $contacts->hari }}</h5>
    <p class="card-text">MataKuliah : {{ $contacts->matakulia }}</p>
    <p class="card-text">Dosen : {{ $contacts->dosen }}</p>
    <p class="card-text">JumlahSKS : {{ $contacts->jumlahsks }}</p>
</div>

</hr>
</div>
</div>