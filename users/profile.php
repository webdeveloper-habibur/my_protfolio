<?php session_start(); ?>
<?php require '../admin_header.php'; ?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
                    <div class="col-lg-6 ">
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit profile</h3>
                            </div>
                            <div class="card-body">
                                <form action="profile_update.php"method="POST">
                                <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text"name="name" class="form-control" value="<?=$after_assoc_user_query['name']?>">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">password</label>
                                <input type="password"name="password" class="form-control">
                                </div>
                                <div><input type="hidden" name="user_id" value="<?=$after_assoc_user_query['id']?>"></div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
					<div class="col-lg-6">
                    <div class="card">
                            <div class="card-header">
                                <h3>Edit Image</h3>
                            </div>
                            <div class="card-body">
                                <form action="image_update.php"method="POST" enctype="multipart/form-data">
                                <?php if(isset($_SESSION['photo_update'])){?>
                            <div class="alert alert-success"><?= $_SESSION['photo_update']?></div>
                            <?php } unset($_SESSION['photo_update'])?>

                                <div class="mb-3">
                                <label for="" class="form-label">image</label>
                                <input type="file"name="image" class="form-control" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                                <div class="mb2"><img width="100" src="../uploads/user//id.png"id="blah2" alt=""></div>
                                <?php if(isset( $_SESSION['extand'])){?>
                                    <strong class="btn text-danger"><?= $_SESSION['extand']?></strong>
                                <?php } unset( $_SESSION['extand']) ?>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Updade Image</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php require '../admin_footer.php';?>
<?php if(isset($_SESSION['update'])) { ?>
    <script>
        swal.fire(
            'Good job!',
           '<?= $_SESSION['update']?>',
           'success'
        )
    </script>
<?php } unset($_SESSION['update']) ?>
