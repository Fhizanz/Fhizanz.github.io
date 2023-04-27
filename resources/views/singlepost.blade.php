@extends('layouts.main')

@section('container')



@if ($post != NULL)
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 ">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <P>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
               in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </P>

            @if ($post->image)
                <div style="max-height: 250px; overflow:hidden;">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            
            <article class="my-3">  
                {!! $post->body !!}
            </article>
        
            <a href="/blog">Back to Posts</a>
        </div>
        {{-- <div class="card">
            <div class="card-title">
                {{ $item->title }}
            </div>
            <div class="card-body">
                <img src="https://source.unsplash.com/1200x400?{{ $item->category->name }}" alt="">
                <h5>{{ $item->category->name }}</h5>
            </div>
        </div> --}}
    </div>
</div>
        

    @else
      <p class="text-center fs-4">No Post Found.</p>
    @endif

@endsection
