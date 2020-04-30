@extends('layouts.app')

@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container mt-4">
    <div class="card text-white bg-dark">
      <div class="card-body">
        <h2 class="card-title">Create post</h2>
        <form action="">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Your post title">
          </div>
          <div class="form-group">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control" placeholder="Your post thumbnail">
          </div>
          <div class="form-group">
            <label>Content</label>
            <textarea id="content" name="content" placeholder="Your post content"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Save</button>       
          <a href="#" class="btn btn-danger">Delete Post</a>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')  
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#content').summernote();
    });
  </script>
@endpush