@extends('admin.layouts.admin_dash_default')
@section('links')

<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@stop

@section('content')

<div class="container-fluid">
                            <div>
                                
                                <h1>hi,{{ session('username') }}</h1>
                                <h3>Your Email is: {{ session ('useremail') }}</hh3>
                                <h3>Your Role is: {{ session ('userrole') }}</h3>

                            </div>



                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       
                                        <tr>  
                                                <td> ID </td>  
                                                <td> Name </td>
                                                <td> Email </td>
                                                <td> Role </td>  
                                        </tr>          
                                                  
                                                
                                                  
                                                 
                                     
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td> ID </td> 
                                        <td> Name </td>
                                        <td> Email </td> 
                                        <td> Role </td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    @foreach($i as $n)  
                                        <tr>  
                                        <td>{{$n->id}}</td>
                                        <td>{{$n->name}}</td>  
                                        <td>{{$n->email}}</td> 
                                        <td>{{$n->role}} </td> 
                                        
                                       </tr>  
                                    @endforeach  




                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@stop

@section('scripts')
<script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
@stop