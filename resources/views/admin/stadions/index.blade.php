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
                        <li class="breadcrumb-item active">Stadions</li>
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('stadions.create')}}" class="btn btn-success mb-4">Create stadion</a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Phone 2</th>
                                    <th>Narxi</th>
                                    <th>Mo'ljal</th>
                                    <th>User</th>
                                    <th>Viloyat</th>
                                    <th>Tuman</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($stadions as $stadion)
                                    <tr>
                                        <td>{{$stadion->id}}</td>
                                        <td>{{$stadion->name}}</td>
                                        <td>+{{$stadion->phone}}</td>
                                        @if($stadion->phone_2 !== null)
                                            <td>{{$stadion->phone_2}}</td>
                                        @else
                                            <td>Mavjud emas</td>
                                        @endif
                                        <td>{{$stadion->narxi}}</td>
                                        <td>{{$stadion->moljal}}</td>
                                        <td>{{\App\Models\User::find($stadion->user_id)->name}}</td>
                                        <td>{{\App\Models\Viloyatlar::find($stadion->viloyat)->name}}</td>
                                        <td>{{\App\Models\Tumanlar::find($stadion->tuman)->name}}</td>
                                        <td>
{{--                                            <a class="btn btn-primary" href="{{route('stadions.show', $stadion->id)}}">Show</a>--}}
                                            <a class="btn btn-primary" href="{{route('stadions.edit', $stadion->id)}}">Update</a>

                                            <form action="{{route('stadions.destroy', $stadion->id)}}" method="post"
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
