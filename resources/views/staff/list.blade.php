<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
</head>
<body>

<div class="row">
    <div class="col">
        <div style="padding-left: 300px">
            <a type="button" class="btn btn-primary mt-3 mb-3" href="{{route('staffs.create')}}">Thêm mới nhân viên</a>
        </div>
    </div>
    <form style="padding-right: 300px" class="mt-3" action="{{route('staffs.search')}}" method="get">
        <div class="input-group mb-2 col" style="width: 500px">
            <input style="height: 42px" type="text" name="search" class="form-control" id="searchStaff">
            <div class="input-group-prepend">
                <button type="submit" class="btn btn-primary" style="height: 42px; border-radius: 10%;">
                    <i class="fas fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<table class="table table-bordered container">
    <tr>
        <thead>
        <th>Mã nhân viên</th>
        <th>Nhóm</th>
        <th>Tên</th>
        <th>Giới tính</th>
        <th>Số điện thoại</th>
        <th>Chức năng</th>
        </thead>
    </tr>

    <tbody>
    @foreach($staffs as $staff)
        <tr>
            <td>{{$staff->id}}</td>
            <td>{{$staff->group}}</td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->gender}}</td>
            <td>{{$staff->phone}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('staffs.update',$staff->id)}}" type="button"><i class="fas fa-pen"></i></a>
                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{route('staffs.delete',$staff->id)}}" type="button"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
