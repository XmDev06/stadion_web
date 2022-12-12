@include("layouts.admin.header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Stadion</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Stadion</li>
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
                            <form action="{{route('stadions.update', $stadion->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{$stadion->name}}" type="text" class="form-control" id="name"
                                           aria-describedby="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input value="{{$stadion->phone}}" type="number" class="form-control" id="phone"
                                           aria-describedby="phone" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone 2</label>
                                    <input value="{{$stadion->phone_2}}" type="number" class="form-control" id="phone"
                                           aria-describedby="phone" name="phone_2">
                                </div>
                                <div class="mb-3">
                                    <label for="narxi" class="form-label">Narxi(so'm)</label>
                                    <input value="{{$stadion->narxi}}" type="number" class="form-control" id="narxi" aria-describedby="narxi" name="narxi">
                                </div>
                                <div class="mb-3">
                                    <label for="narxi" class="form-label">Mo'ljal</label>
                                    <textarea type="number" class="form-control" id="narxi" aria-describedby="narxi" name="moljal">{{$stadion->moljal}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">User</label><br>
                                    <select id="user_id" class="form-select" aria-label="Default select example"
                                            name="user_id">
                                        @foreach($users as $user)
                                            @if($stadion->user_id == $user->id)
                                                <option selected
                                                        value="{{$stadion->user_id}}">{{$user->name}}</option>
                                            @else
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">Viloyat</label><br>
                                    <select id="user_id" class="form-select" aria-label="Default select example"
                                            name="viloyat">
                                        @foreach($viloyatlar as $viloyat)
                                            @if($stadion->viloyat == $viloyat->id)
                                                <option selected
                                                        value="{{$stadion->viloyat}}">{{$viloyat->name}}</option>
                                            @else
                                                <option value="{{$viloyat->id}}">{{$viloyat->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">Tuman</label><br>
                                    <select id="user_id" class="form-select" aria-label="Default select example"
                                            name="tuman">
                                        @foreach($tumanlar as $tuman)
                                            @if($stadion->tuman == $tuman->id)
                                                <option selected
                                                        value="{{$stadion->tuman}}">{{$tuman->name}}</option>
                                            @else
                                                <option value="{{$tuman->id}}">{{$tuman->name}}</option>
                                            @endif
                                        @endforeach
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
