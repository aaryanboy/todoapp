<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('head') <!--this helps to create a stack-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
/* Header styles */
.bg-dark {
    background-color: #343a40; /* Dark gray */
    border-bottom: 3px solid #17a2b8; /* Accent color for the bottom border */
    position: sticky;
    top: 0px;
}

.bg-dark .container {
    max-width: 1200px; /* Limit container width */
    margin: 0 auto; /* Center align */
    display: flex;
    align-items: center;
   
    justify-content: space-between; /* Space between title and optional elements */
}

.h1.text-white {
    color: #ffffff; /* White text */
    font-size: 2.5rem; /* Increase font size */
    font-weight: bold;
    text-transform: uppercase; /* Capitalize letters */
    letter-spacing: 1px; /* Add letter spacing for elegance */
}


/* Padding improvements */
.container.py-3 {
    padding: 2rem 1rem; /* More generous padding for spacing */
}

/* Optional: Add background pattern or subtle shadow */
.bg-dark {
    background: linear-gradient(135deg, #343a40, #495057); /* Gradient for depth */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow */
}</style>
  </head>
  <body>
    <div class="bg-dark"> 
        <div class="container py-3"> <!-- container with padding 3 -->
            <div class="h1 text-white">Todo List App</div>
        </div>
    </div>
    @yield('main-section')
  </body>
</html>