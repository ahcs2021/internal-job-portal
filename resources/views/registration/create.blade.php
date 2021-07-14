@extends('welcome')

@section('content')

<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>AHCS</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post" id="frm">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" id="name">
          <div class="input-group-append">
            <div class="input-group-text">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="some-class">
        <input style="margin-left:20%" type="radio" class="radio" name="user_type" value="1" id="user_type"/>
        <label for="y">Candidate</label>
        <input style="margin-left:10%" type="radio" class="radio" name="user_type" value="2" id="user_type"/>
        <label for="z">Recruiter</label>
      </div>
        <div class="row">
          <div class="col-12 text-center">
            <button type="button" class="btn btn-primary" id="submit" >Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<br>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<script>
$('#submit').click(function(registerUser){
var register= $("#frm").serializeArray();
 console.log(register)
// var register = {
//     name: $("#name").val(),
//     email: $("#name").val(),
//     password: $("#name").val(),
//     user_type: $("#name").val(),
//};

$.ajax({
  type: 'POST',
    url:'api/register-user',
    data: register,
    success: function(newRegister) {
        alert('successfully data saved');
    },
    error: function() {
        alert('error saving data');
    }
    

});

});
</script>

@endsection