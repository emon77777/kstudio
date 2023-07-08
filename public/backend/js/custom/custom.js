$(function(){
    /* CONTACT STARTS */
    
    // contact delete modal
    let deleteBtn = document.querySelectorAll('.contact-del-btn');

    deleteBtn.forEach(function(button){
        button.addEventListener('click', function(e){
            let contactId = this.value;
            let form = document.querySelector('#deleteContact');
            let actionUrl = `http://localhost:8000/admin/contact/${contactId}`;

            form.setAttribute('action', actionUrl);
        });
    });


    // Contact add/remove email input field
    function addEmailInput(){
        var addInput = `<div class="d-flex mb-2">
        <input type="email" class="form-control form-control-sm" name="email[]" id="email" placeholder="Enter email" value="">
        <button type="button" class="btn btn-danger btn-sm remove-email-input" ><i class="fas fa-times"></i></button>
      </div>`;

        $('.email-container').append(addInput);
    }

    // Contact remove email input field
    function removeEmailInput(){
        $(this).parent().remove();
    }
    
    $('#add-email-btn').click(addEmailInput);

    $('.email-container').on('click', '.remove-email-input', removeEmailInput);


    // Contact add/romove phone input field
    function addPhoneInput(){
        var addInput = `<div class="d-flex mb-2">
        <input type="number" class="form-control form-control-sm" name="phone[]" id="phone" placeholder="Enter phone" value="">
        <button type="button" class="btn btn-danger btn-sm remove-phone-input" ><i class="fas fa-times"></i></button>
      </div>`;

        $('.phone-container').append(addInput);
    }

    // Contact remove phone input field
    function removePhoneInput(){
        $(this).parent().remove();
    }
    
    $('#add-phone-btn').click(addPhoneInput);

    $('.phone-container').on('click', '.remove-phone-input', removePhoneInput);

    /* CONTACT ENDS */


    /* PORTFOLIO CATEGORY STARTS */

    // Show all category list
    categoryAllShow();

    function categoryAllShow(){
		$.ajax({
			url:'/admin/portfolio/category/all',
			method:'GET',
			dataType:'JSON',
			success:function(response){
				if(response.msg == 'success'){

					var output = '';
					var sl = 1;
					$.each(response.data, function(key, val){

                        var status = val.status == '0' ? '<button type="button" class="btn btn-secondary btn-sm">Inactive</button>' : '<button type="button" class="btn btn-success btn-sm">Active</button>';
					
						output += `
                            <tr>
                                <td>${sl++}</td>
                                <td>${val.name}</td>
                                <td>
                                    ${status}
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm" id="category-edit-btn" data-toggle="modal" data-target="#category-edit" value="${val.id}"><i class="fas fa-edit"></i></button>
                                
                                    <button class="btn btn-danger btn-sm ml-2" id="category-delete-btn"  data-toggle="modal" data-target="#category-delete" value="${val.id}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>`;

						sl++;
					});
					
					$("#all-category").html(output);
				}
			}
		});
	}

    // Show category edit form
    $(document).on("click", "#category-edit-btn",function(){
		let categoryId = $(this).val();

		// Sending http request to controllers edit method
		$.ajax({
			url: '/admin/portfolio/category/'+categoryId+'/edit',
			type: 'get',
			success: function(response){
                // modal input values
                $("#category-edit-name").val(response.name);
                $("#category-edit-status").val(response.status);

				// setting value for category modal update button
				$("#category-update-btn").val(categoryId); 
			}
		})
	});


    // Update Category by submitting the modal
	$("#category-update-btn").click(function(){
		// category id
		let categoryId = $("#category-update-btn").val();
        
        // input values from category edit modal
        let name = $("#category-edit-name").val();
        let status = $("#category-edit-status").val();

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$.ajax({
			url: '/admin/portfolio/category/'+categoryId,
			type: 'put',
			data: {
				name,
				status
			},
			success:function(response){
                if(response.msg == 'success'){
                    $(".modal").modal("hide");
                    categoryAllShow();
                }else if(response.msg == 'error'){
                    if(response.errors.name[0]){
                        $("#category-edit-name-error").text(response.errors.name[0]);
                    }
                    if(response.errors.status[0]){
                        $("#category-edit-status-error").text(response.errors.status[0]);
                    }
                }
			}
		});

	});


    // Category delete modal
    $(document).on("click","#category-delete-btn", function(){
        let categoryId = $(this).val();
        
        $("#category-delete-modal-btn").val(categoryId);
    });

    // Category delete request 
    $("#category-delete-modal-btn").click(function(){
        let categoryId = $(this).val();
        
        $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

        $.ajax({
			url: '/admin/portfolio/category/'+categoryId,
			type: 'delete',
			success:function(response){
                if(response.msg == 'success'){
                    $(".modal").modal("hide");
                    categoryAllShow();
                }
			}
		});

    });

    /* PORTFOLIO CATEGORY ENDS */


    /* PORTFOLIO START */
        // Add Menu Input In Create Form
        function addMenu(){
            var inputMenu = `<div class="d-flex mb-2">
            <input type="text" class="form-control portfolio-menu" name="menu[]">
            <span class="btn btn-danger btn ml-2 remove-menu"><i class="fas fa-times"></i></span>
        </div>`;

            $('#menu-container').append(inputMenu);
        }

        $('#add-menu').click(addMenu);

        // Remove Menu Input In Create Form
        function removeMenu(){
            $(this).parent().remove();
        }

        $('#menu-container').on('click', '.remove-menu', removeMenu);
    /* PORTFOLIO END */
    
});