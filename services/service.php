<<?php session_start(); ?>
<?php 
require '../admin_header.php'; ?>
<?php require '../db.php';
$service= "SELECT * FROM services ";
$about_query= mysqli_query($db_connect,$service);
?>
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3>Services</h3>
                            </div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['success'])){?>
                            <div class="alert alert-success"><?= $_SESSION['success']?></div>
                            <?php } unset($_SESSION['success'])?>

                            <table class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($about_query as $sl=>$service){ ?>
                                <tr>
                                    <td><?=$sl+1?></td>
                                    <td><?=$service['title']?></td>
                                    <td><?=$service['short_des']?></td>
                                    <td>
                                    <a href="status_change.php? id=<?=$service['id']?>"  class="btn btn-<?=($service['status'] == 1  ?'success': 'light')?>"><?= ($service['status'] == 1 ?'Active':'Dactive') ?></a>
                                    </td>
                                    <td> <div class="d-flex">
                                        <a href="delete_service.php?id=<?=$service['id']?>"class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
                                    </div>
                                    </td>                                 
                                </tr>
                                <?php } ?>
                            </table> 

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m-auto">
                        <div class="card ">
                            <div class="card-header">
                                <h3>Add New Services</h3>
                            </div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['successes'])){?>
                            <div class="alert alert-success"><?= $_SESSION['successes']?></div>
                            <?php } unset($_SESSION['successes'])?>
                            <form action="service_post.php"method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text"name="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Short Description</label>
                                <input type="text"name="short_des" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="sumbit" class="btn btn-success">Add Services</button>
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