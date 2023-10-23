<?php
session_start();
require '../db.php';
$select= "SELECT * FROM messages";
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
                        <h3>Client list</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>message</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($select_result as $key=>$client) {?>
                                <tr>
                                    <td><?=$key+1 ?></td>
                                    <td><?=$client['name']?></td>
                                    <td><?=$client['email']?></td>
                                    <td><?=$client['subject']?></td>
                                    <td><?=$client['message']?></td>
                                    <td><a href="client_delete.php?id=<?=$client['id']?>"class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a></td>
                                    
                                                                     
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
         
                                <!-- <script>
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
                                </script> -->
