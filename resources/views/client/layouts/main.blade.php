<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
  <body class="bg-dark">
    <header>
        @include('client.layouts.partials.navbar')
        @include('client.layouts.partials.header')
    </header>
    <main>
        <div class="container py-2  bg-light bg-opacity-10">
            <div class="row gap-2">
                <div class="col-lg-9">
                    <section>
                        @yield('content')
                    </section>
                </div>
                <div class="col-lg">
                    @include('client.layouts.partials.sidebar')
                </div>
            </div>
        </div>
    </main>
    <footer>

        @include('client.layouts.partials.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


