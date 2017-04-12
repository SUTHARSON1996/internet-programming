<!DOCTYPE html>
<html>
	<head>
		<title>FAQ</title>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".getanswer").hide();
				$('.suggestion').hide();
				$('.faqinput').keyup(function(){
					var temp = $('.faqinput').val();
					var result = $(this).siblings(".suggestion");
					if(temp.length>0){
						$(".getanswer").show();
						$('.suggestion').show();
						$.get("suggestion.php",{term:temp}).done(function(data){
							result.html(data);
						});
	
					}else{
						$('.suggestion').hide();
						$(".getanswer").hide();
					}
				});	


				$(document).on("click",".suggestion p", function(){					
					//alert( $(this).text());
					$(".faqinput").val($(this).text());
					$(this).parent(".suggestion").empty();
					$('.suggestion').hide();
					$(".getanswer").show();
				});	
				

				$(document).on("click",".getanswer",function(){
					var temp = $('.faqinput').val();
					$.get("faqanswer.php",{term:temp}).done(function(data){
						$(".suggestion").html(data);
						$('.suggestion').show();
						$(".getanswer").hide();
						
					});
				});	
				
				
	
			});
		</script>


		<style>
			.suggestion{
				display:block;
				width:300px;
				border: 1px solid #cccccc;
				border-radius:5px;
				margin-top:5px;
								
			}
			.suggestion p{
				margin:10px;
				padding:5px;
				border: 1px solid #cccccc;
				cursor:pointer;
				border-radius:5px;
							
			}
			.suggestion p:hover{
				border: 2px solid green;
				border-radius:5px;	
			}
		</style>
		
	</head>
	<body>
		<div class="search-box">
			<br/>
			<br/>
			<center>
			<fieldset>
			<legend>USING AJAX for FAQ</legend>
			<label for="search">Enter your query:</label><br/><br/>
			<input type="text" class="faqinput" name="faqinput" placeholder="enter your question"/><input type="submit" class="getanswer" value="Get Answer" />
			<div class="suggestion"></div>
			</fieldset>
			</center>
		</div>
	</body>

</html>
