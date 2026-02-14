@extends('layouts/app')

@section('content')
     <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
       
     </h1>

     <div class="card">
        <div class="card-header">
        <div>
            <a href =" "class="btn btn-sm btn-primary">Tambah Data
        </a>
     </div>
     


     </div>
        <div class="card-body">
               <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.hp</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        
                                            @foreach ($data as $item)
                                            <tr>
                                            <td>{{$item->nip}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->alamat}}</td>
                                            <td>{{$item->nohp}}</td>
                                           <td> 
                                                <tr>
                                                     <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                           </td>
                                            @endforeach
                                        
                                         
                                           
                                            </a>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
        </div>
     </div>

          
     
@endsection
