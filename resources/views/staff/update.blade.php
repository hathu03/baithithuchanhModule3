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
<div class="card mb-4 container mt-5" style="height: 550px">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Chỉnh sửa nhân viên
    </div>
    <form action="" method="post">
        @csrf
        <div class="col-12 row">
            <div class="col-6" >
                <div class="form-group col-md-6">
                    <label for="inputName">Mã nhân viên</label>
                    <input disabled style="width: 500px" type="text" class="form-control" id="inputName" name="id" value="{{$staff->id}}">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Chọn nhóm nhân viên</label>
                    <select value="{{$staff->group}}" style="width: 500px" name="group" class="form-control" id="exampleFormControlSelect1">
                        <option>Quản trị hệ thống</option>
                        <option>Quản lý nhân sự</option>
                        <option>Lễ tân</option>
                        <option>Quản lý phòng</option>
                        <option>Quản lý dịch vụ</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Họ tên</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputPassword4" name="name" value="{{$staff->name}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Ngày sinh</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputPassword4" name="birthday" value="{{$staff->birthday}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Giới tính</label>
                    <select style="width: 500px" name="gender" class="form-control" id="exampleFormControlSelect1" value="{{$staff->gender}}">
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="col-6">

                <div class="form-group col-md-6">
                    <label for="inputName">Số điện thoại</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputName" name="phone" value="{{$staff->phone}}">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Số CMND</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputEmail4" name="cmnd" value="{{$staff->cmnd}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputPassword4" name="email" value="{{$staff->email}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Địa chỉ</label>
                    <textarea style="width: 500px" name="address" class="form-control" value="{{$staff->address}}" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div style="padding-left: 340px">
                    <button type="submit" style="background-color: transparent; border: transparent">
                        <a type="button" class="btn btn-danger" href="{{route('staffs.index')}}">Hủy</a>
                    </button>
                    <button type="submit" style="background-color: transparent; border: transparent">
                        <a class="btn btn-primary" href="{{route('staffs.index')}}"><i class="fas fa-check"></i>&ensp;Cập nhật</a>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
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
