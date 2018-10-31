<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script> 
<script>  
i = 0;  
$(document).ready(function()
{  
    $("input").keyup(function()
    {   
        var id=$(this).val();
        var dataString = 'roll_no='+ id;
        $.ajax
		({
			type: "POST",
			url: "get_info.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".info").html(html);
			} 
		});
    });  
});  
</script>  
<h2>Update Record</h2>
<table>
    <tr>
        <td>Roll no.</td>
        <td><input type="text" name="roll_no"></td>
    </tr>
</table><br><br>
<div class="info"></div>