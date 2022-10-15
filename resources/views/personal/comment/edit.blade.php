@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active"> Главная</li>
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
                    <form action="{{route('personal.comment.update',$comment->id)}}" method="post" class="w-50">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <textarea class="form-control" name="message" >{{$comment->message}}</textarea>
                            @error('message')
                            {{--{{$message}}--}}
                            <div class="text-danger">Это поле является обязательным</div>
                            @enderror
                        </div>
                        <input class="btn btn-primary" value="Обновить" type="submit">
                    </form>
                </div><!-- /.container-fluid -->
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
