@extends('layouts.admin_app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi nuova categoria</h1>
                <form class="form-group" action="{{ route('admin.category_list.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="" placeholder="Enter category name">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Create new category">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
