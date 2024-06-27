@extends('layouts.admin')
@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
           <a href="{{route('user.create')}}" class="btn btn-primary">add data</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable Example</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>role</th>
                        <th><center>action</center></th>

                    </tr>
                </thead>
                <tbody>
                    @php $i =  1; @endphp
                    @foreach ($user as $data)
                     <tr>

                            <form action="{{route('user.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                 @if ($i == 1)
                                 <td>{{$i++}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->IsAdmin == 1 ? 'Admin' : 'user'}}</td>
                                <td>
                                <button type="submit" disabled class="btn btn-danger">can't Delete</button>
                                @else
                                <td>{{$i++}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->IsAdmin == 1 ? 'Admin' : 'user'}}</td>
                                <td>
                                <a href="{{ route('user.destroy', $data->id) }}" class="btn btn-danger"
                                    data-confirm-delete="true">Delete</a>
                                    <a href="{{route('user.edit', $data->id)}}" class="btn btn-warning">
                                        edit
                                    </a>
                                @endif
                            </form>


                        </td>
                     </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
@endpush
