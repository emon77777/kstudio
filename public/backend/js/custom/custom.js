$(function(){
    
    /*--------- CONTACT STARTS ----------*/
    
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


    // Contact add email input field
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

    /*---------- CONTACT ENDS ----------*/


    /*---------- PORTFOLIO CATEGORY STARTS -----------*/

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
                                <td>${sl}</td>
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


    // Update Category by submitting the modal form
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

    /*-------- PORTFOLIO CATEGORY ENDS --------*/


    /* ------- PORTFOLIO STARTS ---------- */

    showAllPortfolios();

    // Show All Portfolios
    function showAllPortfolios(){
		$.ajax({
			url:'/admin/portfolio/all',
			method:'GET',
			dataType:'JSON',
			success:function(response){
				if(response.msg == 'success'){
					var output = '';
					var sl = 1;
					$.each(response.data, function(key, val){
					
						output += `
                            <tr>
                                <td>${sl}</td>
                                <td>${val.title}</td>
                                <td>${val.subtitle}</td>
                                <td>${val.description}</td>
                                <td>${val.category.name}</td>
                                <td><img src="${'/uploads/'+val.image}" alt="portfolio image" height="50"></td>
                                <td>${JSON.parse(val.menu)}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" id="portfolio-edit-btn" data-toggle="modal" data-target="#portfolio-edit-modal" value="${val.id}"><i class="fas fa-edit"></i></button>
                                
                                    <button class="btn btn-danger btn-sm ml-2" id="portfolio-delete-btn"  data-toggle="modal" data-target="#portfolio-delete-modal" value="${val.id}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>`;

						sl++;
					});
					
					$("#portfolio-list").html(output);
				}
			}
		});
	}

    // Add Menu Input In Create Form
    function addMenu(){
        var inputMenu = `<div class="d-flex mb-2">
        <input type="text" class="form-control form-control-sm portfolio-menu" name="menu[]">
        <span class="btn btn-danger btn-sm ml-2 remove-menu"><i class="fas fa-times"></i></span>
      </div>`;

        $('#menu-container').append(inputMenu);
    }

    $('#add-menu').click(addMenu);

    // Remove Menu Input In Create Form
    function removeMenu(){
        $(this).parent().remove();
    }

    $('#menu-container').on('click', '.remove-menu', removeMenu);
    
    // Create Portfolio
    $("#portfolio-form-data").on('submit',function(e){
        e.preventDefault();

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$.ajax({
			url: '/admin/portfolio',
			type: 'post',
			data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
			success:function(response){
                if(response.msg == 'success'){
                    $(".modal").modal("hide");
                    showAllPortfolios();
                }else if(response.msg == 'error'){

                    if('title' in response.errors){
                        $("#portfolio-title-error").text(response.errors.title[0]);
                    }else{
                        $("#portfolio-title-error").text('');
                    }
                    if('subTitle' in response.errors){
                        $("#portfolio-subtitle-error").text(response.errors.subTitle[0]);
                    }else{
                        $("#portfolio-subtitle-error").text('');
                    }
                    if('category' in response.errors){
                        $("#portfolio-category-error").text(response.errors.category[0]);
                    }else{
                        $("#portfolio-category-error").text('');
                    }
                    if('description' in response.errors){
                        $("#portfolio-description-error").text(response.errors.description[0]);
                    }else{
                        $("#portfolio-description-error").text('');
                    }
                    if('image' in response.errors){
                        $("#portfolio-image-error").text(response.errors.image[0]);
                    }else{
                        $("#portfolio-image-error").text('');
                    }

                    for (var key in response.errors) {
                        if (key.startsWith("menu.")) {
                            // Display the error message
                            $("#portfolio-menu-error").text(response.errors[key][0].replace(key, 'menu'));
                        }else{
                            $("#portfolio-menu-error").text('');
                        }
                    }
                }
			}
		});

	});

    
    // Show portfolio edit form
    $(document).on("click", "#portfolio-edit-btn",function(){
		let portfolioId = $(this).val();

		// Sending http request to controllers edit method
		$.ajax({
			url: '/admin/portfolio/'+portfolioId+'/edit',
			type: 'get',
			success: function(response){

                if(response.msg == 'success'){
                    // remove previous validation errors
                    $("#portfolio-edit-title-error").text('');
                    $("#portfolio-edit-subtitle-error").text('');
                    $("#portfolio-edit-description-error").text('');
                    $("#portfolio-edit-menu-error").text('');

                    // remove extra edit menu
                    $('.added-edit-menu').each(function(){
                        $(this).remove();
                    });

                    // parse json string to object
                    var menu = JSON.parse(response.portfolio.menu);
                      
                    // modal input values
                    $("#portfolio-edit-title").val(response.portfolio.title);
                    $("#portfolio-edit-sub-title").val(response.portfolio.subtitle);
                    $("#portfolio-edit-category").val(response.portfolio.category_id);
                    $("#portfolio-edit-description").val(response.portfolio.description);

                    for(var i=0; i< menu.length; i++){
                        if(i==0){
                            $("#portfolio-edit-menu").val(menu[i]);
                        }else{
                            var editMenu = `<div class="d-flex mb-2 added-edit-menu">
                            <input type="text" class="form-control form-control-sm portfolio-edit-menu" name="menu[]" value="${menu[i]}">
                            <span class="btn btn-danger btn-sm ml-2 remove-edit-menu"><i class="fas fa-times"></i></span>
                          </div>`;

                          $('#edit-menu-container').append(editMenu);
                        }
                    }
                    
                }

				//setting value for portfolio modal update button
				$("#portfolio-update-btn").val(portfolioId); 
			}
		})
	});

    // Add Menu Input In Edit Form
    function addEditMenu(){
        var inputMenu = `<div class="d-flex mb-2 added-edit-menu">
        <input type="text" class="form-control form-control-sm portfolio-menu" name="menu[]">
        <span class="btn btn-danger btn-sm ml-2 remove-edit-menu"><i class="fas fa-times"></i></span>
      </div>`;

        $('#edit-menu-container').append(inputMenu);
    }

    $('#add-edit-menu').click(addEditMenu);

    // Remove Menu Input In Edit Form
    function removeEditMenu(){
        $(this).parent().remove();
    }

    $('#edit-menu-container').on('click', '.remove-edit-menu', removeEditMenu);


    // Update Portfolio
	$("#portfolio-edit-form").on('submit',function(e){
        e.preventDefault();

		// portfolio id
		let portfolioId = $("#portfolio-update-btn").val();

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$.ajax({
			url: '/admin/portfolio/'+ portfolioId,
			type: 'post',
			data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
			success:function(response){

                if(response.msg == 'success'){
                    $(".modal").modal("hide");
                    showAllPortfolios();
                }else if(response.msg == 'error'){

                    if('title' in response.errors){
                        $("#portfolio-edit-title-error").text(response.errors.title[0]);
                    }else{
                        $("#portfolio-edit-title-error").text('');
                    }
                    if('subTitle' in response.errors){
                        $("#portfolio-edit-subtitle-error").text(response.errors.subTitle[0]);
                    }else{
                        $("#portfolio-edit-subtitle-error").text('');
                    }
                    if('category' in response.errors){
                        $("#portfolio-edit-category-error").text(response.errors.category[0]);
                    }else{
                        $("#portfolio-edit-category-error").text('');
                    }
                    if('description' in response.errors){
                        $("#portfolio-edit-description-error").text(response.errors.description[0]);
                    }else{
                        $("#portfolio-edit-description-error").text('');
                    }

                    for (var key in response.errors) {
                        if (key.startsWith("menu.")) {
                            // Display the error message
                            $("#portfolio-edit-menu-error").text(response.errors[key][0].replace(key, 'menu'));
                        }else{
                            $("#portfolio-edit-menu-error").text('');
                        }
                    }
                }
			}
		});

	});


    // Delete Portfolio
    // portfolio delete modal
    $(document).on("click","#portfolio-delete-btn", function(){
        let portfolioId = $(this).val();
        
        $("#portfolio-delete-modal-btn").val(portfolioId);
    });

    // Category delete request 
    $("#portfolio-delete-modal-btn").click(function(e){
        e.preventDefault();

        let portfolioId = $(this).val();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/portfolio/'+portfolioId,
            type: 'delete',
            success:function(response){
                if(response.msg == 'success'){
                    $(".modal").modal("hide");
                    showAllPortfolios();
                }
            }
        });
    });


    /* ------- PORTFOLIO ENDS ---------- */
    
});