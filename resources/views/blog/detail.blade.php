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
         /* Set a light background color */
      }

      header {
         background-color: #343a40;
         /* Dark background color for the header */
         color: #fff;
         /* Light text color for the header */
         padding: 15px;
         text-align: center;
      }

      .blog-post {
         background-color: #fff;
         /* White background for the blog post */
         border-radius: 10px;
         /* Add some border radius for a softer look */
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         /* Add a subtle box shadow */
         padding: 20px;
         margin-bottom: 20px;
      }

      .blog-post img {
         width: 100%;
         border-radius: 8px;
         /* Rounded corners for the image */
      }

      footer {
         background-color: #343a40;
         /* Dark background color for the footer */
         color: #fff;
         /* Light text color for the footer */
         padding: 15px;
         text-align: center;
      }
   </style>
</head>

<body>


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
      </article>
   </main>

   <footer>
      <!-- Add your footer content here -->
   </footer>

   <!-- Link to Bootstrap JS (optional, only if you need Bootstrap JavaScript features) -->
   <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>