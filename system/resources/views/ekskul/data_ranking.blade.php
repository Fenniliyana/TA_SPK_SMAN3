@extends('template.base')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title mb-0">Data Minat Setelah Dilakukan Perangkingan</h5> 
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <a href="{{url('rule/perangkingan/siswa/reset')}}" class="btn btn-outline-primary btn-sm"> Ulangi Perangkingan</a>
            </div>
           
        </div>
        
                   <div class="my-3 border-top"></div>
        <table id="example2" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Ekstrakurikuler</th>
                    <th>Rangking Siswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_ekskul as $key=>$ekskul)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$ekskul->nama}}</td>
                        <td>
                            @foreach( $ekskul->ranking_siswa as $key=>$ranking)
                                <h5 class="badge rounded-pill alert-primary text-capitalize">{{$key+1}}</h5> 
                                <h5 class="badge rounded-pill alert-success text-capitalize">{{$ranking->Siswa->siswa_nama}} </h5> 
                              
                                <h5 class="badge rounded-pill alert-success text-capitalize">{{$ranking->peroleh_nilai}}</h5> <br>
                            @endforeach
                                 
                                
                           
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div> 
@endsection
@section('script')
<script>
    $(function() {
    "use strict";

    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );

});
</script>
@endsection
