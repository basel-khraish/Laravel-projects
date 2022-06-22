<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <table class="table table-borderd table-hoverd container" style="direction: rtl; text-align:center;">
        <tr class="table-dark">
            <th>الرقم</th>
            <th>اسم الزوج</th>
            <th>اسم الزوجة</th>
            <th>تاريخ البدء</th>
            <th>تاريخ الانتهاء</th>
        </tr>
        @foreach ($insurances as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->wife }}</td>
                <td>{{ $item->start }}</td>
                <td>{{ $item->expire }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
