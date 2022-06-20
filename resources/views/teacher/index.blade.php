<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <title>Teachers</title>
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All Teachers</h1>
            <a href="{{ route('teachers.create') }}" class="btn btn-success">Add Teacher</a>
        </div>
        <table class="table table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Basel</td>
                <td>B@gmail.com</td>
                <td>0597814587</td>
                <td>20/8/2021</td>
                <td>20/8/2019</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>


        </table>
    </div>

</body>

</html>
