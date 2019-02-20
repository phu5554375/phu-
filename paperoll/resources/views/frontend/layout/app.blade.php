
<!DOCTYPE html>
<html lang="en-us">
   @include("frontend.layout.head")
    <body class="@yield("body_class")">
     
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">
                @stack("ribbon")
            </div>
            <div id="content">
                @yield("content")
            </div>
        </div>
      
        @include("frontend.layout.script")
    </body>

</html>