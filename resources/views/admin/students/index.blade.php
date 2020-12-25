<html>
<head>
    <title>Students</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="alert alert-sm alert-success text-center">
                    Showning Students Data
                </p>
                <a href="{{route('students.create')}}" type="button" class="btn btn-sm btn-success p-2 m-3">
                    <i class="fa fa-plus"></i> Add New Student </a>
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>name</td>
                            <td>email</td>
                            <td>Show</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>
                                <a data-toggle="modal" data-target="#exampleModal" href="javascript:void()"
                                   class="btn btn-sm btn-primary click_here" student_id="{{$student->id}}">
                                    <i class="fa fa-eye"></i> Show
                                </a>
                            </td>
                            <td><a class="btn btn-sm btn-info" href="{{route('students.edit',$student)}}"><i class="fa fa-edit"></i> Edit</a></td>
                            <td>
                                <form class="d-inline cpa-form" action="{{route('students.destroy',$student)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete_item"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer clearfix">
                    <span>Total Results: {{ $students->total() }}</span>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel"> Student Details </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/de87b8fe5b.js"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
            $('.click_here').on('click',function(){
                var student_id = $(this).attr('student_id');
                student_id = parseInt(student_id);
                $('.modal-body').load('/student/loadDetails/'+student_id);
            });
            $(".cpa-form").submit(function(e){
                if(confirm('Are You Sure You Want To Delete ?')){
                    return true;
                }
                else{
                    return false;
                }
            });
        });
    </script>
</body>
</html>
