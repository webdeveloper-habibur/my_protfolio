<<?php session_start(); ?>
<?php 
require '../admin_header.php'; ?>
<?php require '../db.php';
$portfolio= "SELECT * FROM portfolios ";
$portfolio_query= mysqli_query($db_connect,$portfolio);
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
                                    <th>catagory</th>
                                    <th>image</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($portfolio_query as $sl=>$portfolio){ ?>
                                <tr>
                                    <td><?=$sl+1?></td>
                                    <td><?=$portfolio['title']?></td>
                                    <td><?=$portfolio['catagory']?></td> 
                                    <td><img width="100" src="../uploads/portfolio/<?= $portfolio['image']?>" alt=""></td>
                                    <td>
                                    <a href="status_change.php? id=<?=$portfolio['id']?>"  class="btn btn-<?=($portfolio['status'] == 1  ?'success': 'light')?>"><?= ($portfolio['status'] == 1 ?'Active':'Dactive') ?></a>
                                    </td>
                                    <td> <div class="d-flex">
                                        <a href="delete_portfolio.php? id=<?=$portfolio['id']?>"class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
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
                                <h3>Update portfolio</h3>
                            </div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['successes'])){?>
                            <div class="alert alert-success"><?= $_SESSION['successes']?></div>
                            <?php } unset($_SESSION['successes'])?>
                            <form action="portfolio_post.php"method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text"name="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Catagory</label>
                                <input type="text"name="catagory" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Portfolion Image</label>
                                <input type="file"name="image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="sumbit" class="btn btn-success">Update portfolio</button>
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