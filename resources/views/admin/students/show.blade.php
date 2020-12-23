<html>
<head>
    <title>Students</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/de87b8fe5b.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="alert alert-sm alert-info text-center">
                    Show Student Data
                </p>
                <div class="card">
                    <div class="card-header">
                        Show Student Data
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name : {{$student->name}} </h5>
                        <h5 class="card-title">Email : {{$student->email}} </h5>
                        <h5 class="card-title">Paswword : {{$student->password}} </h5>
                        <h5 class="card-title">Created_at : {{$student->created_at}} </h5>
                        <h5 class="card-title">Updated_at : {{$student->updated_at}} </h5>
                        <a href="{{route('students.edit',$student)}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit Data </a>
                        <form action="{{route('students.destroy',$student)}}" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-sm alert-default">
                    <a href="{{route('students.index')}}" class="btn btn-info btn-sm">
                        <i class="fa fa-undo"></i> Back To Students Data</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
