@extends('layouts/app')

@section('content')
     <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
        {{ $title }}
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
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.hp</th>
                                            <th>Semester</th>
                                            <th>Id_gol</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                             <td>61</td>
                                              <td>61</td>
                                           <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
        </div>
     </div>

          
     
@endsection
