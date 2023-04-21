<!doctype html>
<html lang="en">
  <head>
    <title>E-comm Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    
    <link rel="stylesheet" href="http://localhost/project/eComm/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/project/eComm/resources/css/app.css">
    
    {{-- carousel CSS  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="http://localhost/project/eComm/resources/css/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/project/eComm/resources/css/carousel/owl.theme.default.min.css">

    <script src="http://localhost/project/eComm/resources/js/jquery-3.5.1.min.js"></script>
    <script src="http://localhost/project/eComm/resources/css/carousel/owl.carousel.min.js"></script>
    <style>
        .custome-login{
            height: 500px;
            padding-top: 100px;
        }
    </style>
  </head>
  <body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
      

    
  </body>
  
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  
  <script src="http://localhost/project/eComm/resources/js/bootstrap.min.js"></script>    
</html>
