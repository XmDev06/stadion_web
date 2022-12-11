@include("layouts.admin.header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update User</li>
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

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('users.update', $user->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{$user->name}}" type="text" class="form-control" id="name" aria-describedby="name"
                                           name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input value="{{$user->phone}}" type="number" class="form-control" id="phone" aria-describedby="phone"
                                           name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" aria-describedby="password"
                                           name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="is_admin" class="form-label">Is Admin</label><br>
                                    <select id="is_admin" class="form-select" aria-label="Default select example"
                                            name="is_admin">
                                        <option @if($user->is_admin == 0)selected @endif value="0">User</option>
                                        <option @if($user->is_admin == 2)selected @endif value="2">Stadion Admin</option>
                                        <option @if($user->is_admin == 1)selected @endif value="1">Adminstrator</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


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
