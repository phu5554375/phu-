@extends('frontend.layout.app')
@section('content')

	<div id="siteContainer">
		
		<div id="siteContent" class="isg-front-page">
		<div id="root">
			<div class="app container-fluid">
				<div class="row wrapper">
					<div id="config-panel" class="config-panel">
						<div class="config-panel-inner">
							<h3>Your Roll</h3>
							
							<span class="panel-close">
								<span aria-hidden="true" class="fa fa-times"></span></span>
								
										
												
													<div class="voucher"><a>
														<i class="far fa-envelope"></i> Điền email của bạn</a>
														<div style="display: block;">
										<input type="email" placeholder="email" value="">
															</div></div></div>
															<span>
							<button onclick="shareFB()" class="order-btn"> <span aria-hidden="true" class="fa fa-shopping-basket"></span>Print</button>
															</span></div>
					<div id="album-panel" class="album-panel">
						<a href="{{url('/')}}" class="hvr-wobble-vertical">
						<img width="200" height="53" src="{{url('paperoll/assets/img/logo.png')}}" alt="Social Roll">
					</a>
					<div class="album-panel-inner">
						<h3><span>Albums</span></h3>
						<span class="album-panel-close">
							<span aria-hidden="true" class="fa fa-times"></span></span>
							<div class="btn-album-create">
								<a>
								 <span aria-hidden="true" class="fa fa-plus"></span>
								  <span>Add album</span></a></div>

								  <div class="action-button-album">
								  	<a class="login-instagram-btn hint--top" aria-label="Import Instagram album" href="">
								  		<i class="fab fa-instagram"></i> Instagram</a>
								  		<a class="login-fb-btn hint--top" aria-label="Import Facebook albums" href="https://paperoll.io/auth/facebook">
								  			<i class="fab fa-facebook"></i> Facebook</a><a class="login-computer-btn hint--top" aria-label="Create album and upload photos">
								  				<i class="fas fa-cloud-upload-alt"></i> <span>Computer</span></a>
								  			</div>
								  			<div>
								  				<ul class="album-list-scroll">
								  					<li class="album-item">
								  						<div class="album-drag-content">
				
						<form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">

      					{{ csrf_field() }}

      						<input type="file" id="uploadFile" name="images[]" multiple />

      					<input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>

  						</form>
  						
						</div>
											</li></ul>
											</div>
								  </div></div>
								  	<div id="scroll" class="roll-wrapper">
								  	
								  		<h2 class="roll-title">Roll preview</h2>
	<div class="roll" id="roll" style="background-color: rgb(246, 246, 246);"><div>
			<h2 id="album-LOCAL_4" style="color: rgb(246, 246, 246);">My album</h2>
											<div class="thumbnail">
												{{-- <div id="preview"><img src="filed.png" /></div> --}}

  <div id="image_preview"></div>
											</div>
										</div>
									</div>
								  </div>
								<div>
							</div>
								  				
								  					 </div>
								  					 </div>
			
	
		</div>
	
    <!-- END Site Footer -->
	</div>
	<script type="text/javascript">

$(document).ready(function (e) {
 $("#uploadFile").change(function(){
 	var $fileUpload = $("input[type='file']");
    if (parseInt($fileUpload.get(0).files.length)>5){
    	$("#uploadFile").val(null);
    	alert("Tối đa bạn chỉ chọn được 5 hình ảnh");

    } else {
    	$('#image_preview').html("");

	    var total_file=document.getElementById("uploadFile").files.length;

	    for(var i=0;i<total_file;i++)

	    {

	      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
		  $("[name='images[]']").prop("required", true);


	    }
    }
   

  });
	
	

  $('form').ajaxForm(function() 

   {

    alert("Uploaded SuccessFully");

   }); 
});
</script>
<script>
	function shareFB() {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajaxSetup({cache: true});
        $.getScript('//connect.facebook.net/en_US/sdk.js', function () {
            FB.init({
                appId: '742001872626851', //replace with your app ID
                version: 'v2.3'
            });
            FB.ui({
                    method: 'share',
                    title: 'Lucki.win',
                    description: 'Lucki.win',
                    href: 'https://tet.lucki.win',
                },
                function (response) {
                    if (response && !response.error_code) {
                        emailAddr = $("#email_txt").text();
                        $.ajax({
                            type: "POST",
                            url: "/send-email",
                            data: {
								"email" : emailAddr,
							},
                            success: function (result) {
								alert("success");
                            },
                            dataType: "json",
                        });
                    }
                });
        });
    };
</script>
@endsection