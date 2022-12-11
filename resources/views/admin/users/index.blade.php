@include("layouts.admin.header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('users.create')}}" class="btn btn-success mb-4">Create user</a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Is Admin</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>+{{$user->phone}}</td>
                                        <td>
                                            @if($user->is_admin==1)
                                                Adminstrator
                                            @elseif($user->is_admin==2)
                                                Stadion Admin
                                            @elseif($user->is_admin==0)
                                                User
                                            @endif
                                        </td>
                                        <td>
                                            {{--                                            <a class="btn btn-primary" href="{{route('users.show', $user->id)}}">Show</a>--}}
                                            <a class="btn btn-primary"
                                               href="{{route('users.edit', $user->id)}}">Update</a>

                                            <form action="{{route('users.destroy', $user->id)}}" method="post"
                                                  style="display: inline-block">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="submit" class="btn btn-danger" value="Delete">
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
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include("layouts.admin.footer")
