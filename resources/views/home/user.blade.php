<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dimclo</title>
    {{-- <link rel="stylesheet" href="./dist/output.css" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container h-8 mx-auto p-5">
      <!--Navigation section awal-->
        @include('home.navbar');
      <!--Navigation section end-->

      <!--start Hero Section-->
      @include('home.hero')
      <!--End Hero Section-->

      @include('home.product')
      <!--Food Items Section-->

      <div class="md:flex md:flex-row md:justify-between text-center border-t-2 border-gray-300">

        <div class="h-screen w-full text-center mt-3 py-8"><br><br><br><br><br><br><br><br><br><br>
            <h2 class="text-3xl text-gray-600 justify-between text-center items-center mt-2">Discover the Best Deals</h2><br>
            <blockquote class="text-lg text-gray-700 italic text-center">
                "The perfect place to find everything you need at amazing prices."
            </blockquote>
            <p class="text-gray-600 text-center mt-2">- Dimclo</p><br><br><br><br><br><br><br><br><br><br><br>
        </div>



            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15813.040784665554!2d110.41138212006466!3d-7.762206553893938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1686894152832!5m2!1sen!2sid" width="1240" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

      </div>





      <!-- Footer start -->
        @include('home.footer')
      <!-- Footer end -->
    </div>


</body>
</html>
