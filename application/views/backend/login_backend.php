<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('backend/_partials/header'); ?>
</head>

<body>

 
	<section>
    <!-- Background image -->

    <div class="p-5 bg-image" style="
                height: 350px;
                ">
        <div class="text-center">
            
                         
            <h1 style="font-family: WildWest; font-size: 40px;" width="120px" height="80px" style="margin: 5px">
                LOGIN
            </h1>
            <h2 style="font-family: WildWest; font-size: 40px;" width="120px" height="80px" style="margin: 5px">
                LELANG MOBIL
            </h2>
        </div>
    </div>
    <!-- Background image -->

    <div class="card shadow p-0 mb-1 bg-white rounded" style="
                margin-left: 500px;
                margin-right: 500px;
                margin-bottom: 150px;
                margin-top: -130px;
                background-image: url('img/bg.jpg');
                backdrop-filter: blur(30px);
                font-family: WildWest;
                ">

        <div class="card-body py-5 px-md-0">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-left">
                    
                    <form method="post">

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label text-dark" for="name">Username</label>
                            <input type="text" id="name" class="form-control" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
					placeholder="Your username or email" value="<?= set_value('username') ?>" required  />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label text-dark" for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
					placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                        </div>

                        <!-- Submit button -->
                        <input type="submit"  name="login" style="background-color:#0080FF; color:white;" class="btn btn-block mb-4 w-100" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
	<?php $this->load->view('backend/_partials/footer'); ?>
</body>

</html>