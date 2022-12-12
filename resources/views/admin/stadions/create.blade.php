@include("layouts.admin.header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Stadion</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Stadion</li>
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
                            <form action="{{route('stadions.store')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="phone" aria-describedby="phone" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="phone" aria-describedby="phone" name="phone_2">
                                </div>
                                <div class="mb-3">
                                    <label for="narxi" class="form-label">Narxi(so'm)</label>
                                    <input type="number" class="form-control" id="narxi" aria-describedby="narxi" name="narxi">
                                </div>
                                <div class="mb-3">
                                    <label for="narxi" class="form-label">Narxi(so'm)</label>
                                    <textarea type="number" class="form-control" id="narxi" aria-describedby="narxi" placeholder="Stadion uchun mo'ljal kiriting" name="moljal"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">User</label><br>
                                    <select id="user_id" class="form-select" aria-label="Default select example" name="user_id">
                                        <option selected>Select user</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">Viloyat</label><br>
                                    <select id="user_id" class="form-select" aria-label="Default select example" name="viloyat">
                                        <option selected>Select viloyat</option>
                                        @foreach($viloyatlar as $viloyat)
                                            <option value="{{$viloyat->id}}">{{$viloyat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="user_id" class="form-label">Tuman</label><br>
                                    <select id="user_id" class="form-select" aria-label="Default select example" name="tuman">
                                        <option selected>Select tuman</option>
                                        @foreach($tumanlar as $tuman)
                                            <option value="{{$tuman->id}}">{{$tuman->name}}</option>
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
