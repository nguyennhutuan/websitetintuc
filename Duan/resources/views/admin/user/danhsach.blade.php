@extends('admin.layout.index')

@section('title')
    Danh sách User
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách User</h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbaothanhcong'))
            <div class="col-lg-12 alert alert-success">
                {{ session('thongbaothanhcong') }}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $us)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $us->id }}</td>
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                        <td>
                            @if($us->quyen == 1)
                            {{ "Admin" }}
                            @else
                            {{ "Thường" }}
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$us->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$us->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection