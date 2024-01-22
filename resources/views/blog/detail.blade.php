<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Page</title>
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
         <h2 class="mb-4 text-center">Category: {{$post[2]}}</h2>
         <a href="{{ url('/blogs')}}" class="btn btn-secondary mb-3">Back to Posts</a>
         @php(dd($post[4]))
         <div class="card mb-3">
            <img src="{{ $post[4] }}" class="card-img-top img-fluid" alt="Image">
            <div class="card-body">
               <h5 class="card-title font-weight-bold">{{$post[1]}}</h5>
               <p class="card-text">{{$post[3]}}</p>
               <small class="text-muted">Last updated: {{ date('d M Y', strtotime($post[5])) }}</small>
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