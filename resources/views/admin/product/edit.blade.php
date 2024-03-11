@extends('admin.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/') }}assets/backend/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Categories</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row items-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label for="regular_price">Regular Price</label>
                                <input type="number" class="form-control" name="regular_price" id="regular_price" placeholder="Enter Regular Price" value="{{$product->regular_price}}">
                            </div>
                            <div class="form-group">
                                <label for="sale_price">Sale Price</label>
                                <input type="number" class="form-control" name="sale_price" id="sale_price" placeholder="Enter Sale Price" {{$product->sale_price}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group pb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                @if(isset($category->image))
                                    <img src="{{ asset($category->image) }}" height="100px" width="100px" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="parent_id">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ $product->meta_title }}">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Meta URL</label>
                                <input type="text" class="form-control" name="meta_url" id="meta_url" value="{{ $product->meta_url }}">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{ $product->meta_keyword }}">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Meta Description</label>
                                <textarea class="summernote" id="summernote" name="meta_description">
                                    {!! $product->meta_description !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 pb-5 pt-3 text-center">
                    <input type="submit" value="Save" class="form-contol btn btn-success float-right">
                </div>
            </div>
        </form>
    </div>
  </section>
</div>
  <!-- /.content -->
@endsection

@section('script')
<script src="{{ asset('/') }}assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
      $('.summernote').summernote()
    })
  </script>
@endsection
