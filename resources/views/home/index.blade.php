@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
  <div class="container mt-4">
    <x-jumbotron
      title="Welcome to Public Blog!"
      subtitle="Developed by www.ghack.dev. This tutorial is available on youtube!"
      description="Make sure you have subscribed this channel. Like and share this tutorial!"
    />
    @foreach($posts as $post)
      <x-post
        :title="$post->title"
        :author="$post->user->name"
        :thumbnail="$post->thumbnail"
        :description="$post->content"
        :published-at="$post->created_at"
        :href="'/post/'.$post->id"
      />
    @endforeach

    {{ $posts->appends(Request::all())->links() }}
  </div>
@endsection
