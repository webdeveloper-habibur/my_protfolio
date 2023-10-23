<<?php session_start(); ?>
<?php require '../admin_header.php'; ?>

<?php require '../db.php';
$about= "SELECT * FROM abouts ";
$about_query= mysqli_query($db_connect,$about);
$after_assoc_about_query=mysqli_fetch_assoc($about_query);



?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Update About Information</h3>
                            </div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['emg'])){?>
                            <div class="alert alert-success"><?= $_SESSION['emg']?></div>
                            <?php } unset($_SESSION['emg'])?>
                            <form action="about_post.php"method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                <label for="" class="form-label">Nick name</label>
                                <input type="text"name="nick_name" class="form-control" value="<?=$after_assoc_about_query['nick_name'] ?>">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text"name="name" class="form-control"value="<?=$after_assoc_about_query['name'] ?>">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Designation</label>
                                <input type="text"name="Designation" class="form-control"value="<?=$after_assoc_about_query['Designation'] ?>">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label"> Short Description</label>
                                <textarea name="short_description" class="form-control" cols="20"rows="5" ><?=$after_assoc_about_query['short_description'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file"name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <div class="mb2">
                                    <img width="180" id="blah" src="../uploads/about/<?=$after_assoc_about_query['image'] ?>" alt="">
                                </div>
                                <?php if(isset( $_SESSION['extand'])){?>
                                    <strong class="btn text-danger"><?= $_SESSION['extand']?></strong>
                                <?php } unset( $_SESSION['extand']) ?>
                                </div>
                                <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
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

<?php require '../admin_footer.php';?></h3>