<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail || {{$post->title}}</title>
   <!-- Link to Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
   <style>
      body {
         background-color: #f8f9fa;
      }

      header {
         background-color: #343a40;
         color: #fff;
         padding: 15px;
         text-align: center;
      }

      .blog-post {
         background-color: #fff;
         border-radius: 10px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         padding: 20px;
         margin-bottom: 20px;
      }

      .blog-post img {
         width: 100%;
         border-radius: 8px;
      }

      footer {
         background-color: #343a40;
         color: #fff;
         padding: 15px;
         text-align: center;
      }

      /* Style for comments */
      .comments-section {
         margin-top: 30px;
      }

      .comment {
         margin-bottom: 20px;
      }
   </style>
</head>

<body>
   <header>
      <h1>Blog Title</h1>
   </header>

   <main class="container mt-4">
      <article class="blog-post">
         <h2 class="mb-4 text-center">Category: {{$post->kategori}}</h2>
         <a href="{{ url('/blogs')}}" class="btn btn-secondary mb-3">Back to Posts</a>
         <div class="card mb-3">
            <img src="{{ $post->imgUrl }}" class="card-img-top img-fluid" alt="Image">
            <div class="card-body">
               <h1 class="card-title font-weight-bold">{{$post->title}}</h1>
               <p class="card-text" style="line-height: 1.9; margin-bottom: 10px;">{{$post->deskripsi}}</p>
               <small class="text-muted">Last updated: {{ date('d M Y', strtotime($post->created_at)) }}</small>
            </div>
         </div>

         <!-- Comments Section -->
         <div class="comments-section">
            <h3 class="mb-3">Comments</h3>

            <!-- Display Comments -->
            <p>All Comments</p>
            @foreach($comments as $comment)
            <div class="comment">
               <p><strong>{{$comment->comment}}</strong></p>
            </div>
            @endforeach

            <!-- Comment Form -->
            <form action="{{url('comment/'.$post->id)}}" method="POST">

               @csrf
               <div class="mb-3">
                  <label for="comment_text" class="form-label">Your Comment</label>
                  <textarea class="form-control" id="comment_text" name="comment_text" rows="3" required></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
         </div>
      </article>
   </main>

   <footer>
      <!-- Add your footer content here -->
   </footer>

   <!-- Link to Bootstrap JS (optional, only if you need Bootstrap JavaScript features) -->
   <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>