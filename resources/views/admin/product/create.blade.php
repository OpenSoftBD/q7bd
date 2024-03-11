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
                <h1>Add New Product</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row items-center">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Select Category</label>

                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Select Sub Category</label>

                                    <select class="form-control select2" name="subcategory_id" style="width: 100%;">
                                        <option value="">Select Sub Category</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Select Sub Sub Category</label>

                                    <select class="form-control select2" name="subsubcategory_id" style="width: 100%;">
                                        <option value="">Select Sub Sub Category</option>
                                        @foreach ($subsubcategories as $subsubcategory)
                                            <option value="{{ $subsubcategory->id }}">{{ $subsubcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Brand</label>
                                    <input type="text" class="form-control" name="brand" id="brand" placeholder="Enter brand">
                                </div>

                                <div class="form-group">
                                    <label for="name">Product Status</label>
                                    <select class="form-control select2" name="product_status" style="width: 100%;">
                                        <option value="In Stock">In Stock</option>
                                        <option value="Out Of Stock">Out Of Stock</option>
                                        <option value="Upcoming">Upcoming</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Key Features</label>
                                    <input type="text" class="form-control" name="key_features" id="key_features" placeholder="Enter Key Features">
                                </div>

                                <div class="form-group">
                                    <label for="regular_price">Regular Price</label>
                                    <input type="number" class="form-control" name="regular_price" id="regular_price" placeholder="Enter Regular Price">
                                </div>
                                <div class="form-group">
                                    <label for="sale_price">Sale Price</label>
                                    <input type="number" class="form-control" name="sale_price" id="sale_price" placeholder="Enter Sale Price">
                                </div>

                                <div class="form-group">
                                    <label for="topbar-heading">Description</label>
                                    <textarea class="summernote" name="description">
                                        Enter Description
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="topbar-heading">Topbar Heading</label>
                                    <input type="text" class="form-control" name="topbar_heading" id="topbar_heading" placeholder="Enter Topbar Heading">
                                </div>
                                <div class="form-group">
                                    <label for="topbar-heading">Topbar Description</label>
                                    <textarea class="summernote" name="topbar_description">
                                        Enter Topbar Description
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topbar-heading">Bottom Description</label>
                                    <textarea class="summernote" id="summernote" name="bottom_description">Enter Bottom Description</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="parent_id">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter Meta Title">
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Meta URL</label>
                                    <input type="text" class="form-control" name="meta_url" id="meta_url" placeholder="Enter Meta Url">
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" placeholder="Enter Meta Keywords">
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Meta Description</label>
                                    <textarea class="summernote" id="summernote" name="meta_description">
                                        Enter Meta Description
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
