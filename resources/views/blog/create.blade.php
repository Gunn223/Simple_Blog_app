<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      body {
         background-color: #f8f9fa;
      }

      .container {
         background-color: #ffffff;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         padding: 20px;
         margin-top: 50px;
      }

      h1 {
         color: #007bff;
         text-align: center;
      }

      form {
         max-width: 400px;
         margin: auto;
      }

      .form-group label {
         color: #495057;
         font-weight: bold;
      }

      .btn-primary {
         background-color: #007bff;
         border-color: #007bff;
         width: 100%;
         /* Lebar tombol 100% dari form */
      }

      .btn-primary:hover {
         background-color: #0056b3;
         border-color: #0056b3;
      }

      .back-link {
         display: block;
         margin-top: 20px;
         text-align: center;
         color: #007bff;
      }
   </style>
   <title>Add Post</title>
</head>

<body>
   <div class="container">
      <h1>Buat Post</h1>
      <form action="{{ url('blogs') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul">
         </div>
         <div class="form-group">
            <label for="kategori">Kategori:</label>
            <input type="text" class="form-control" id="kategori" name="kategori">
         </div>
         <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
         </div>
         <div class="form-group">
            <label for="imgUrl">URL Gambar:</label>
            <input type="text" class="form-control" id="imgUrl" name="imgUrl">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <a href="{{ url('blogs') }}" class="back-link">&lt; Home Blog</a>
      </form>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>