@extends('layout.struct')

@section('content')

<!-- conatiner of Add Data -->
<div class="container ">

    <form class="w-75 mx-auto my-5"
            enctype="multipart/form-data"
            action="addemp"
            method="POST"
    >
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input name="name" type="text" class="form-control" id="name" >
          @error('name')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('name')[0] }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" >
            @error('email')
                @foreach ($errors->get('email') as $email_err)
                <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $email_err }}</span>
                @endforeach
            @enderror
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input name="address" type="text" class="form-control" id="address" >
            @error('address')
                <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('address')[0] }}</span>
            @enderror
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input name="phone" type="text" class="form-control" id="phone" >
          @error('phone')
          <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('phone')[0] }}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="position">Position</label>
          <input name="position" type="text" class="form-control" id="position" >
          @error('position')
          <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('position')[0] }}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="Department">Department</label>
          <select name="department" id="Department" class="form-control">
              <option selected></option>
              <option>IT</option>
              <option>HR</option>
              <option>SALES</option>
              <option>Accounting</option>
          </select>
            @error('department')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('department')[0] }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Salary">Salary</label>
            <input name="salary" type="number" class="form-control" id="Salary" >
            @error('salary')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('salary')[0] }}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input name="age" type="number" class="form-control" id="age" >
            @error('age')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('age')[0] }}</span>
          @enderror
        </div>


        <div class="form-group">
            <label for="gender">gender :  </label> <br><br>
            <div class="form-check form-check-inline">
                <input value="male" class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="female" class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option1">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            @error('gender')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('gender')[0] }}</span>
          @enderror
        </div>



        <div class="form-group">
            <label for="Image">Image</label>
            <input name="file" type="file" class="form-control" id="Image" >
            @error('file')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('file')[0] }}</span>
            @enderror
        </div>



        <div class="form-group">
            <label for="relationstatus">Relation Status</label>
            <select name="relation_status" id="relationstatus" class="form-control">
                <option selected></option>
                <option>Single</option>
                <option>Married</option>
                <option>In RelationShip</option>
                <option>Divorced</option>
                <option>complicated</option>
            </select>
            @error('relation_status')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('relation_status')[0] }}</span>
          @enderror
          </div>



          <div class="form-group">
            <label for="militarysatus">Military Status</label>
            <select name="military_status" id="militarysatus" class="form-control">
                <option selected></option>
                <option>Exemption</option>
                <option>Completed</option>
                <option>Waiting</option>
            </select>
            @error('military_status')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('military_status')[0] }}</span>
          @enderror
          </div>


          <div class="form-group">
            <label for="hireDate">Date Of Hire</label>
            <input name="hire_date" type="date" class="form-control" id="hireDate" >
            @error('hire_date')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('hire_date')[0] }}</span>
          @enderror
        </div>
          <div class="form-group">
            <label for="Attendace">Date Of Attendace</label>
            <input name="attendance_at" type="datetime-local" class="form-control" id="Attendace" >
            @error('attendance_at')
            <span style="color:rgb(182, 14, 14); font-weight: bold;">* {{ $errors->get('attendance_at')[0] }}</span>
          @enderror
        </div>


        <button type="submit" class="btn btn-primary form-control"> + Submit</button>
      </form>
</div>

@endsection





