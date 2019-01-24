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
            <div class="card-header">View Post</div>
        </header>
       
        @if(count($posts) >0)
        @foreach ($posts->all() as $post)
    <h1>{{$post->post_title}}</h1>
    <section id="main" class="mb-3">
        <figure class="figure">
            <img src="{{$post->post_image}}" class="figure-img img-fluid"  alt=" figure image" >
        </figure>
        <p>{{$post->post_description}}</p>
        <cite style="fload:left;"> Posted on:{{date('M J  ,Y H:i' , strtotime($post->updated_at))}}</cite>
      
      <section class="comments" class="small">
          
                
               <ul class="nav nav-pills">
                    <li ><a href=""  class="btn btn-sm btn-primary mb-3"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="sr-only">Like ()</span></a></li>
                    <li ><a href="" class="btn btn-sm btn-primary mb-3"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="sr-only">Dislike ()</span></a></li>
                    <li ><a href= ""  class="btn btn-sm btn-primary mb-3"><i class="fa fa-comment" aria-hidden="true"></i> <span class="sr-only">Comment</span></a></li>
                    
                            </ul>  
     
  
                    
        <hr>
        <h2>Comments</h2>
        <div class="media">
                <img src="https://placehold.it/64x64" alt="Media object image" class="mr-3">
                <div class="media-body">
                  <p><a href="">Ali</a></p>
                  <p>Great team</p>
                </div>
              </div>
              <hr>
        @endforeach
         @else
        <p>No Post Avaliable !</p>
        @endif 

            <hr>
            <form>
                <div class="row">
                    <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                </div>
            </div>
                <div class="col-12 col-sm-6">
                <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="email" id="email" name="email" required>
                    </div>
                </div>
                </div>
                    <div class="form-group">
                            <label for="comment" >Your Comment:</label>
                            <textarea class="form-control" id="comment" name="comment"  rows="6" placeholder=" write your comment here" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> Submit</button>
            </form>
    </section>
</article>
</div>
<div class="col-12 col-md-4">
 <aside>
    
     
     
          <h2 class="mb-3">Categories</h2>
            <div class="list-group mb-3">
                    @if(count($categories) >0)
                    @foreach ($categories ->all() as $category)
                       <li class="list-group-item"><a  class="list-group-item list-group-item-action bg-info text-white" href='{{url("category/{$category->id}")}}'>{{$category->category}}</a></li>
                    @endforeach
                    @else
                    <p>No Category Found!</p>
                    @endif  
              
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