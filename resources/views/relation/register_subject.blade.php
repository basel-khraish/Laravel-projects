<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>register subject</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">All Subject</h1>
        <div class="row">
            <form action="{{ route('register_subject_submit') }}" method="post">
                @csrf
                <table class="table table-bordered table-hover table-striped">
                    @foreach ($subjects as $subject)
                        <tr>
                            <td><input type="checkbox"  {{ $student->subjects->find($subject->id) ? 'checked':''}} name="subject[]" value="{{ $subject->id }}"></td>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->hours }} Hours</td>
                        </tr>
                    @endforeach
                </table>
                <button class="btn btn-success w-25">Register</button>
            </form>
        </div>
    </div>
</body>

</html>
