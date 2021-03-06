
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <br>Plan1 - 1000 <input type="radio" value="1000" name="plan" class="plan" checked/>
      <br>Plan2 - 2000 <input type="radio" value="2000" name="plan" class="plan" />
      <br>Plan3 - 3000 <input type="radio" value="3000" name="plan" class="plan" />
      <br>Plan4 - 4000 <input type="radio" value="4000" name="plan" class="plan" />
      
    </div>
    <div class="form-group">
      <br>1-Month 1000 - 1000<input type="radio" value="1" name="month" class="month" checked/>
      <br>3-Month 900 - 2700<input type="radio" value="3" name="month" class="month" />
      <br>6-Month 800 - 4800<input type="radio" value="6" name="month" class="month" />
      <br>12-Month 600 - 7200<input type="radio" value="12" name="month" class="month" />
    </div>
    <div class="form-group">
      Total- <span id='total_amount'>1000</span>mmks
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script>
	$(document).on('change', '.plan', function() {
    	plan = $(this).val();
    	month = $('.month:checked').val();
    	month = parseInt(month)
    	plan = parseInt(plan)
    	total = 0;
    	
    	switch(month) {
		  case 1:
		    total = month*plan;
		    break;
		  case 3:
		    total = month*(plan-100);
		    break;
		  case 6:
		    total = month*(plan-200);
		    break;
		  case 12:
		    total = month*(plan-400);
		    break;
		  default:
		   total = month*plan;
		}
		$("#total_amount").html(total);
	});
	
	$(document).on('change', '.month', function() {
    	month = $(this).val();
    	plan = $('.plan:checked').val();
    	month = parseInt(month)
    	plan = parseInt(plan)
    	total = 0;
    	switch(month) {
		  case 1:
		    total = month*plan;
		    break;
		  case 3:
		    total = month*(plan-100);
		    break;
		  case 6:
		    total = month*(plan-200);
		    break;
		  case 12:
		    total = month*(plan-400);
		    break;
		  default:
		   total = month*plan;
		}
    	
    	$("#total_amount").html(total);
	});
	

</script>
</body>
</html>