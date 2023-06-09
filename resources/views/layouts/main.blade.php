<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Sweet Alert CDN -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Summernote CSS Link -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<style>
  .google-button{
    background-color:red;
    color:white;
  }
  .google-button:hover{
    background-color:white;
    border:1px solid red;
    color:black;
  }
  </style>
  
    <title>Home Page</title>
</head>
<body>
        @include('layouts.header')
        @yield('main-container')
        @include('layouts.footer')

  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <!-- Summernote JS Link -->
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
    $(document).ready(function() {
        $("#mysummernote").summernote({
          height:150,width:500,
        });
        $('.dropdown-toggle').dropdown();
    });
</script>

</body>
</html>
