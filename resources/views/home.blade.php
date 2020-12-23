<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row text-center" style="margin-top: 200px;">
                <div class="col-lg-12">
                    <a href="{{route('students.index')}}" class="btn btn-md btn-secondary"> Display Students Data </a>
                </div>
            </div>
        </div>

    </body>
</html>
