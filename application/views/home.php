<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">-->

    <title>Crud Operator</title>
  </head>
  <body>
   
    <div class="container">
    	<div class="row">
    		<div class="col-md-12 mt-5">
    			<h1 class="text-center">Codeigniter Ajax Crud Operator</h1>
    			<h1 style="background-color: black; color: black; height: 1px">
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12 mt-2">
    			<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
				 New Record
				</button>

				<!-- Insert Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">ADD NEW</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				       <form action="" method="post" id="form">
				       	<div class="form-group">
				       		<label for="">Username</label>
				       		<input type="text" name="name" id="name" class="form-control">
				       	</div>
				       	<div class="form-group">
				       		<label for="">Contact</label>
				       		<input type="text" name="contact" id="contact" class="form-control">
				       	</div>
				       	<div class="form-group">
				       		<label for="">Email id</label>
				       		<input type="text" name="email" id="email" class="form-control">
				       	</div>
				       

				       </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary" id="add">Add</button>
				      </div>
				    </div>
				</div>
			</div>

			<!-- edit Modal -->
			<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Model</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				       <form action="" method="post" id="edit_form">
				       	<input type="hidden" name="edit_model_id" id="edit_modal_id" value="">
				       	<div class="form-group">
				       		<label for="">Username</label>
				       		<input type="text" name="name" id="edit_name" class="form-control">
				       	</div>
				       	<div class="form-group">
				       		<label for="">Contact</label>
				       		<input type="text" name="contact" id="edit_contact" class="form-control">
				       	</div>
				       	<div class="form-group">
				       		<label for="">Email id</label>
				       		<input type="text" name="email" id="edit_email" class="form-control">
				       	</div>
				       

				       </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary" id="update">Update</button>
				      </div>
				    </div>
				</div>
			</div>


		</div>	    			
    </div>
    	<div class="row">
    		<div class="col-md-12 mt-3">
    			<table class="table">
    				<thead>
    					<tr>
    						<th>ID</th>
    						<th>USERNAME</th>
    						<th>CONTACT</th>
    						<th>EMAIL</th>
    						<th>ACTION</th>
    					</tr>
    				</thead>
    				<tbody id="tbody">
    					
    				</tbody>
    			</table>
                
                <a id="displayText" class="btn btn-primary" href="javascript:toggle();">Show</a> <== click Here
                <a id="displayText1" class="btn btn-primary" href="javascript:toggle1();">Show</a> <== click Heres



                <div id="toggleText" style="display: none"><h1 style="color: red;">To insert data into a MySQL table, you would need to use the SQL INSERT INTO command. You can insert data into the MySQL table by using the mysql prompt or by using any script like PHP</h1></div>

                 
                <div id="toggleText1" style="display: none"><h1 style="color: green;">To insert data into a MySQL table, you would need to use the SQL INSERT INTO command. You can insert data into the MySQL table by using the mysql prompt or by using any script like PHP</h1></div>
                
    		</div>
    	</div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
    	$(document).on("click","#add",function(e){
    		e.preventDefault();

    		var name = $("#name").val();
    		var contact = $("#contact").val();
    		var email = $("#email").val();
    		
    		$.ajax({
    			url: "<?php echo base_url(); ?>insert",
    			type: "post",
    			dataType: "json",
    			data: {
    				name:name,
    				contact:contact,
    				email:email,
    				
    			},

    			success: function(data){
    				
    				//console.log(data)
                    $('#exampleModal').modal('hide');
                    //$("#form")[0].reset();
                    fetch();
                     if (data.message == "success") {
                    
                       toastr["success"](data.message)

	                    
                    } else {
	                    toastr["error"](data.message)

	                    
                	}
    			}
    			
    		});

    		$("#form")[0].reset();
    	});

    	function fetch(){
    		$.ajax({
    			url:"<?php echo base_url();?>fetch",
    			type:"post",
    			dataType:"json",
    			success: function(data){
    				console.log(data)
    				var tbody = "";
    				var i = "1";
    				for(var key in data){
    					tbody += "<tr>";
    					tbody += "<td>"+ i++ +"</td>";
    					tbody += "<td>"+ data[key]['name'] +"</td>";
    					tbody += "<td>"+ data[key]['contact'] +"</td>";
    					tbody += "<td>"+ data[key]['email'] +"</td>";
    					tbody += `<td>
                                    <a href="#" id="del" value="${data[key]['id']}">Delete</a>
                                    <a href="#" id="edit" value="${data[key]['id']}">Edit</a>
                                    
                                </td>`;

    					tbody += "</tr>";

    				}
    				 $("#tbody").html(tbody);
    			}
    		});
    	}
    	fetch();

    	$(document).on("click", "#del" ,function(e){
    		e.preventDefault();

    		var del_id =$(this).attr("value");

    		if(del_id == ""){
    			alert("Delete id Required");
    		}else{
    			const swalWithBootstrapButtons = Swal.mixin({
			  customClass: {
			    confirmButton: 'btn btn-success',
			    cancelButton: 'btn btn-danger mt-2'
			  },
			  buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonText: 'Yes, delete it!',
			  cancelButtonText: 'No, cancel!',
			  reverseButtons: true
			}).then((result) => {
			  if (result.isConfirmed) {

			  	$.ajax({
			  		url:"<?php echo base_url();?>delete",
	    			type:"post",
	    			dataType:"json",
	    			data:{
	    				del_id:del_id
	    			},
	    			success: function(data){
	    				fetch();
	    				console.log(data);
	    			}

			  	});


			    swalWithBootstrapButtons.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )
			  } else if (
			    /* Read more about handling dismissals below */
			    result.dismiss === Swal.DismissReason.cancel
			  ) {
			    swalWithBootstrapButtons.fire(
			      'Cancelled',
			      'Your imaginary file is safe :)',
			      'error'
			    )
			  }
			});
    		}
    	});

    	$(document).on("click", "#edit", function(e) {
        e.preventDefault();

        var edit_id = $(this).attr("value");
        //alert(edit_id);

        if (edit_id == "") {
            alert("Edit id required");
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>edit",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id
                },
                success: function(data) {
                	//console.log(data);
                    if (data.response === 'success') {
                        $('#editModal').modal('show');
                        $("#edit_modal_id").val(data.post.id);
                        $("#edit_name").val(data.post.name);
                        $("#edit_contact").val(data.post.contact);
                        $("#edit_email").val(data.post.email);
                    } else {
                        toastr["error"](data.message)

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            });
        }
    });



    	$(document).on("click", "#update", function(e) {
        e.preventDefault();

        var edit_id = $("#edit_modal_id").val();
        var edit_name = $("#edit_name").val();
        var edit_contact = $("#edit_contact").val();
        var edit_email = $("#edit_email").val();

        if (edit_id == "" || edit_name == "" || edit_email == "") {
            alert("both field is required");
        } else {

            $.ajax({
                url: "<?php echo base_url(); ?>update",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id,
                    edit_name: edit_name,
                    edit_contact: edit_contact,
                    edit_email: edit_email
                },
                success: function(data) {
                    fetch();
                    console.log(data);
                    if (data.response === 'success') {
                        $('#editModal').modal('hide');
                        Command: toastr["success"](data.message)

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    } else {
                        Command: toastr["error"](data.message)

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }

                }
            });
            $("#edit_form")[0].reset();
        }

    });

    $(document).on("click", "#sendmail", function(e) {
        e.preventDefault();

        var emailid = $(this).attr("value");
        //alert(mailid);


        if (emailid == "") {
            alert("Email id required");
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>sendemail",
                type: "post",
                dataType: "json",
                data: {
                    emailid: emailid
                },
                success: function(data) {
                	console.log(data);
                	if (data.response === 'success') {
                	}else{
                		
                	}
                    
                }
            });
        }   
	});



        function toggle() {
        var ele = document.getElementById("toggleText");
        var text = document.getElementById("displayText");
        if(ele.style.display == "block") {
                ele.style.display = "none";
            text.innerHTML = "Show";
        }
        else {
            ele.style.display = "block";
            text.innerHTML = "Show";
        }
    } 

     function toggle1() {
        var ele = document.getElementById("toggleText1");
        var text = document.getElementById("displayText1");
        if(ele.style.display == "block") {
                ele.style.display = "none";
            text.innerHTML = "Show";
        }
        else {
            ele.style.display = "block";
            text.innerHTML = "Show";
        }
    } 
    

    

    


   

    </script>
  </body>
</html>