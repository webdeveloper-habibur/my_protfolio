<?php
session_start();
require '../db.php';
$select= "SELECT * FROM users";
$select_result= mysqli_query($db_connect,$select);
?>
             <?php require '../admin_header.php'; ?>
             <!-- Content body start
        ***********************************--> 
        <div class="content-body">
            <!-- row -->
			<div class="container">
				<div class="row">
                <div class="col-lg-8 m-auto">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>User list</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($select_result as $key=>$user) {?>
                                <tr>
                                    <td><?=$key+1 ?></td>
                                    <td><?=$user['name']?></td>
                                    <td><?=$user['email']?></td>
                                    <td><a href="user_delete.php? id=<?=$user['id']?>" class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a></td>
                                                                     
                                </tr>
                                <?php } ?>

                        </table>
                    
                    

                    </div>
                </div>
            </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
            
         <?php require '../admin_footer.php'; ?>
         
                                <script>
                                    $('.del').click(function(){
                                           Swal.fire({
                                        title: 'Are you sure?',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                            )
                                        }
                                        })

                                    })
                                </script>
