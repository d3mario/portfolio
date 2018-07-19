<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">

	var Image = new Array("images/nails.png", "images/hair-icon.png");
	var Description = new Array("This is a image of nails", "This is a image of hair");
	
	var Image_Number = 0;
	var Image_Length = Image.length -1;
	
	function change_image(num)	
	{
		Image_Number = Image_Number + num;
		if (Image_Number > Image_Length)
			{
				Image_Number = 0;	
			}
			
			if	(Image_Number < 0)
				{
					Image_Number = Image_Length;
				}
				
			document.slideshow.src= Image[Image_Number];
			document.getElementById("description").innerHTML = Description[Image_Number];
			return false;	
	}
	
	function auto()
		{
			setInterval("change_image(1)",1000);	
		}
</script>

<img src="images/nails.png" name="slideshow"/>
<table>
	<tr>
    	<td align="left"><a href="#"onclick="return change_image(-1)">Previous</a></td>
    	<td align="right"><a href="#"onclick="return change_image(1)">Next</a></td>
            	<td align="right"><a href="javascript:auto()">Auto</a></td>
</tr>

</table>

<div id="description">

</div>

</body>
</html>