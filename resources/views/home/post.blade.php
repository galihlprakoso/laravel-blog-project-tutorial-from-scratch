@extends('layouts.app')

@section('content')
  <div class="container mt-4">
    <x-post
      :title="$post->title"
      :author="$post->user->name"
      :thumbnail="$post->thumbnail"
      :description="$post->content"
      :published-at="$post->created_at"
      href=""
    />
  </div>
@endsection
