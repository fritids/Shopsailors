	<!--
	Copyright (c) 2007 John Dyer (http://johndyer.name)
	
	Permission is hereby granted, free of charge, to any person
	obtaining a copy of this software and associated documentation
	files (the "Software"), to deal in the Software without
	restriction, including without limitation the rights to use,
	copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the
	Software is furnished to do so, subject to the following
	conditions:
	
	The above copyright notice and this permission notice shall be
	included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
	OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
	HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
	FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
	OTHER DEALINGS IN THE SOFTWARE.
	-->
	
	<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
		<title>Color Picker</title>
		<style type="text/css">
		body, td {
			font-family: tahoma;
			font-size: 10pt;
		}
		</style>
	
		<script type="text/javascript" src="refresh_web/prototype.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorMethods.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorValuePicker.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/slider.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorPicker.js" ></script>
	
	</head>
	<body>

		<h1>JavaScript Color Picker</h1>
		
		<table>
			<tr>
				<td valign="top">
					<div id="cp1_ColorMap"></div>
				</td>
				<td valign="top">
					<div id="cp1_ColorBar"></div>
				</td>
				<td valign="top">
					<table>
						<tr>
							<td colspan="3">
								<div id="cp1_Preview" style="background-color: #fff; width: 60px; height: 60px; padding: 0; margin: 0; border: solid 1px #000;">
									<br />
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_HueRadio" name="cp1_Mode" value="0" />
							</td>
							<td>
								<label for="cp1_HueRadio">H:</label>
							</td>
							<td>
								<input type="text" id="cp1_Hue" value="0" style="width: 40px;" /> &deg;
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_SaturationRadio" name="cp1_Mode" value="1" />
							</td>
							<td>
								<label for="cp1_SaturationRadio">S:</label>
							</td>
							<td>
								<input type="text" id="cp1_Saturation" value="100" style="width: 40px;" /> %
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_BrightnessRadio" name="cp1_Mode" value="2" />
							</td>
							<td>
								<label for="cp1_BrightnessRadio">B:</label>
							</td>
							<td>
								<input type="text" id="cp1_Brightness" value="100" style="width: 40px;" /> %
							</td>
						</tr>
						<tr>
							<td colspan="3" height="5">
	
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_RedRadio" name="cp1_Mode" value="r" />
							</td>
							<td>
								<label for="cp1_RedRadio">R:</label>
							</td>
							<td>
								<input type="text" id="cp1_Red" value="255" style="width: 40px;" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_GreenRadio" name="cp1_Mode" value="g" />
							</td>
							<td>
								<label for="cp1_GreenRadio">G:</label>
							</td>
							<td>
								<input type="text" id="cp1_Green" value="0" style="width: 40px;" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_BlueRadio" name="cp1_Mode" value="b" />
							</td>
							<td>
								<label for="cp1_BlueRadio">B:</label>
							</td>
							<td>
								<input type="text" id="cp1_Blue" value="0" style="width: 40px;" />
							</td>
						</tr>
						<tr>
							<td colspan="3">
								#<input type="text" id="cp1_Hex" value="" style="width: 60px;" />
                                <input type="button" value="OK" onclick="changeColor()"/>
							</td>
						</tr>
	
					</table>
				</td>
			</tr>
		</table>
		
	
	<div style="display:none;">
		<img src="refresh_web/colorpicker/images/rangearrows.gif" />
		<img src="refresh_web/colorpicker/images/mappoint.gif" />
		
		<img src="refresh_web/colorpicker/images/bar-saturation.png" />
		<img src="refresh_web/colorpicker/images/bar-brightness.png" />
		
		<img src="refresh_web/colorpicker/images/bar-blue-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-br.png" />
		<img src="refresh_web/colorpicker/images/bar-red-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-red-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-red-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-red-br.png" />	
		<img src="refresh_web/colorpicker/images/bar-green-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-green-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-green-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-green-br.png" />
		
		<img src="refresh_web/colorpicker/images/map-red-max.png" />
		<img src="refresh_web/colorpicker/images/map-red-min.png" />
		<img src="refresh_web/colorpicker/images/map-green-max.png" />
		<img src="refresh_web/colorpicker/images/map-green-min.png" />
		<img src="refresh_web/colorpicker/images/map-blue-max.png" />
		<img src="refresh_web/colorpicker/images/map-blue-min.png" />
		
		<img src="refresh_web/colorpicker/images/map-saturation.png" />
		<img src="refresh_web/colorpicker/images/map-saturation-overlay.png" />
		<img src="refresh_web/colorpicker/images/map-brightness.png" />
		<img src="refresh_web/colorpicker/images/map-hue.png" />
	</div>
	
	<script type="text/javascript">

    // Changes were made here to fit the Shopsailors engine purpose
    Event.observe(window,'load',function() {
		cp1 = new Refresh.Web.ColorPicker('cp1',{startHex: '<?php echo $_GET['color']; ?>', startMode:'h'});
	});
    
    // Changes were made here to fit the Shopsailors engine purpose
	function changeColor(){
        window.opener.colorPicker_changeColor("<?php echo $_GET['element']; ?>",$("cp1_Hex").value);
        window.close ();
    }
	</script>
</body>
</html>
