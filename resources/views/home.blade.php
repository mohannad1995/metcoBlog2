@extends('layouts.app')

@section('content')

<div class="container my-3 my-sm-5">
<div class="row">
    <div class="col-12 col-lg-8">
            @if(count($errors) >0)
            @foreach($error->all() as $error)
                  <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            @if(session('response'))
                  <div class="alert alert-success">{{session('response')}}</div>
            @endif
         <article class="mb-3">
        <header class="mb-2">   
            <div class="card-header">Dashboard</div>
        </header>
       
        @if(count($posts) >0)
        @foreach ($posts->all() as $post)
    <h1>{{$post->post_title}}</h1>
    <section id="main" class="mb-3">
        <figure class="figure">
            <img src="{{$post->post_image}}" class="figure-img img-fluid"  alt=" figure image" >
        </figure>
        <p>{{$post->post_description}}</p>
        <cite style="fload:down;"> Posted on:{{date('M J  ,Y H:i' , strtotime($post->updated_at))}}</cite>
      <section class="comments" class="small">
            
          
               <ul class="nav nav-pills">
        <li ><a href='{{url("/view/{$post->id}")}}'  class="btn btn-sm btn-primary mb-3"><i class="fa fa-eye" aria-hidden="true"></i> <span class="sr-only">View</span></a></li>
        <li ><a href='{{url("/edit/{$post->id}")}}' class="btn btn-sm btn-primary mb-3"><i class="fa fa-edit" aria-hidden="true"></i> <span class="sr-only">Edit</span></a></li>
        <li ><a href='{{url("/delete/{$post->id}")}}'class="btn btn-sm btn-primary mb-3"><i class="fa fa-trash" aria-hidden="true"></i> <span class="sr-only">Delete</span></a></li>
        
                </ul> 
                

  
                    
        <hr>
        <h2>Comments</h2>
        
              <hr>
        @endforeach
         @else
        <p>No Post Avaliable !</p>
        @endif 

            <hr>
    </section>
</article>
</div>
<div class="col-12 col-md-4">
 <aside>
    
     <div class="card mb-3">
         <div class="card-body">
             <div class="text-center">
                    @if( !empty($profile))
             <img src="{{$profile->profile_pic}}" class="img-fluid rounded-circle"  alt="figure image">
             @else
             <img src="{{url('images/avatar.png')}}" class="img-fluid rounded-circle"  alt="figure image">
             @endif
             @if( !empty($profile))
             <h5>{{$profile->username}}</h5>
             @else
             <h4></h4>
             @endif
             @if( !empty($profile))
             <p>{{$profile->designation}}</p>
             @else
             <p></p>
             @endif
            </div>
            
         </div>
     </div>
     <h2 class="mb-3">Related posts</h2>
            <div class="list-group mb-3">
              <a href="#0" class="list-group-item list-group-item-action">
                 
                <div class="badge badge-primary float-right">Category</div>
                <h5>php fundamentals</h5>
                <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                <p class="mb-0">PHP: Hypertext Preprocessor is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group</p>
              </a>
              <a href="#0" class="list-group-item list-group-item-action">
                <div class="badge badge-primary float-right">Category</div>
                <h5>Turkish</h5>
                <p class="small mb-2"> Name </p>
                <div class="small mb-2"><span class="badge badge-primary"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 13 <span class="sr-only">likes</span></span> <span class="badge badge-primary"><i class="fa fa-comments" aria-hidden="true"></i> 3 <span class="sr-only">comments</span></span></div>
                <p class="mb-0">Turkish Airlines is the national flag carrier airline of Turkey. As of 2018, it operates scheduled services to 304 destinations in Europe, Asia, Africa, and the Americas, making it the largest carrier in the world by number of passenger destinations</p>
              </a>
              
            
              
            </div>
     
     <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">About the blog</h5>
              <p class="card-text">A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries. Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page <a href="#0">Read more...</a></p>
            </div>
          </div>
          <h2 class="mb-3">Categories</h2>
            <div class="list-group mb-3">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white">Sports</a>
              <a href="#" class="list-group-item list-group-item-action bg-info text-white">Travel</a>
              <a href="#" class="list-group-item list-group-item-action bg-info text-white">Education</a>
              <a href="#" class="list-group-item list-group-item-action bg-info text-white">languages</a>
              <a href="#" class="list-group-item list-group-item-action bg-info text-white">programming</a>
            </div>
 </aside>
</div>
</div>
</div>
<footer class="small bg-light">
        <div class="container py-3 py-sm-5">
          <div class="row">
          </div>
          <ul class="list-inline text-center">
            <li class="list-inline-item">&copy; 2019 mohannad</li>
            <li class="list-inline-item">All rights reserved.</li>
          </ul>
        </div>
      </footer>

@endsection