<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title ></title>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.9/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.9/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
 <br><br>
<form class="" action="store" method="post">
  <div class="container">
      <div class="row justify-content-md-center">
          <h3>ประวัติ</h3><br><br>
      </div>
      <div class="form-group">
        {{ csrf_field() }}
        <label for="inputAddress">ชื่อ-นามสกุล :</label>
        <input type="text" class="form-control" name="name"  placeholder="ชื่อ-นามสกุล">
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="inputState">เพศ :</label>
          <select id="inputState" name="sex" class="form-control">
            <option selected>เพศ</option>
            <option>ชาย</option>
            <option>หญิง</option>
          </select>
        </div>
        <div class="form-group col-md-7">
          <label for="inputState">สถานะภาพ :</label>
          <select id="inputState" name="status" class="form-control">
            <option selected>สถานะภาพ</option>
            <option>โสด</option>
            <option>สมรส</option>
            <option>หย่า</option>
            <option>หม้าย</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">สัญชาติ :</label>
        <input type="text" name="nationality" class="form-control"  placeholder="ศาสนา">
      </div>
      <div class="form-group">
        <label for="inputAddress">ศาสนา :</label>
        <input type="text" name="religion" class="form-control"  placeholder="ศาสนา">
      </div>
      <div class="form-group">
        <label for="inputAddress">วัน/เดือน/ปี เกิด :</label>
        <input id="datepicker" name="birthdays" width="276">
      </div>
      <div class="form-group">
        <label for="inputAddress">ที่อยู่ :</label>
        <textarea name="address" class="form-control"  rows="4" cols="80"></textarea>
      </div>
      <div class="form-group">
        <label for="inputAddress">เบอร์โทร :</label>
        <input type="number" name="phone" class="form-control"   placeholder="เบอร์โทร">
      </div>
      <div class="form-group">
        <label for="inputAddress">จบจาก :</label>
        <input type="text" class="form-control" name="graduated"  placeholder="จบจาก">
      </div>
      <div class="form-group">
        <label for="inputAddress">สาขา :</label>
        <input type="text" class="form-control" name="branch" equired placeholder="สาขาวิชาชีพ">
      </div>
      <div class="row justify-content-md-center">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
  </div>{{-- end container --}}
</form>
<br><br><br><br><br><br>


<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
  </body>
</html>
