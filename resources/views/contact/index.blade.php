@extends('contact.layout')
@section('content')
                 
<div class="container">
    <div class="row">

         <div class="col-md-9">
            <div class="card">
                <div class="card-header">Jadwal Mata Kuliah</div>
                <div class="card-body">
                <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Tambah Jadwal">
                <i class="fa fa-plus" aria-hidden="true"></i>Tambah
                
</a>
<br/>
<br/>
<div class="table-responsive">
    <table class="table">
        <thead>
              <tr>
                         
                         <th>Hari</th>
                         <th>Mata Kuliah</th>
                         <th>Dosen</th>
                         <th>Jumlah SKS</th>
                         <th>Actions</th>
             </tr>
</thead>
<tbody>
    @foreach($contacts as $item)
<tr>
                                       
                         <td>{{ $loop->Hari }}</td>
                         <td>{{ $item->MataKuliah }}</td>
                         <td>{{ $item->Dosen }}</td>
                         <td>{{ $item->JumlahSKS }}</td>
                         <td>
    <a href="{{ url('/contact/' . $item->id) }}" title="View Jadwal"><button class="btn btn-info btn-sm">
        <i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
 <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Jadwal"><button class="btn btn-primary btn-sm">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
 <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
         {{ method_field('DELETE') }}
        {{ csrf_field() }}
         <button type="submit" class="btn btn-danger btn-sm" title="Hapus Jadwal" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                               </form>
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
                              
 
                                
@endsection