@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        @if(count($post) > 0)
        @foreach($post as $item)
        <div class="col-md-8 mt-5">
            <h1 class="mb-3">{{ $item->title }}</h1>

            <P>By. <a href="/blog?author={{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> 
               in <a href="/blog?category={{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a>
            </P>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            
            <article class="my-3">  
                {!! $item->body !!}
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
        @endforeach
        @else 
        <div class="text-center">
            Data Tidak Ditemukan
        </div>
        @endif
    </div>
</div>
    
@endsection