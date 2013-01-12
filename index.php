<?php include_once( 'libs/render.php' );?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CodR - Online Code Editor</title>
	
	<!-- meta tags here -->
	
	<meta name="description" content="CodR allows you to code right into browser" />
	<meta name="keywords" content="browser, code, editor, online, personal, jquery, javascript, html5" />
	<meta name="author" content="Anthony Young" />
	
	<!-- codemirror css here -->
	
	<link rel="stylesheet" href="CodeMirror/lib/codemirror.css">
	<link rel="stylesheet" href="CodeMirror/theme/monokai.css">
	
	
	<!-- js here -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<script src="CodeMirror/lib/codemirror.js"></script>
	<script src="CodeMirror/lib/util/closetag.js"></script>
	<script src="CodeMirror/mode/javascript/javascript.js"></script>
	<script src="CodeMirror/mode/htmlmixed/htmlmixed.js"></script>
	<script src="CodeMirror/mode/css/css.js"></script>
	<script src="CodeMirror/mode/xml/xml.js"></script>
	<script src="CodeMirror/mode/php/php.js"></script>
	<script src="CodeMirror/mode/clike/clike.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<script type="text/javascript" src="js/hotkeys.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
	<script type="text/javascript" src="js/main.js"></script>
	
	<!-- css here -->
	
	<link rel="stylesheet" href="css/bootstrap.css" />
	
	<link rel="stylesheet" href="css/main.css" />
	
	<?php if (false): ?>
	
	<link rel="stylesheet" href="css/playground.css" />
	
	<?php endif;?>
	
</head>
<body>

	<!-- start of nav -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="brand" href="/">CodR</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            
              <li class="divider-vertical"></li>
              <li class="active">
                <a href="/">Home</a>
              </li>
              <li class="divider-vertical"></li>
              
              <li>
              <a href="#" onclick="document.codeRunner.submit();return false;" class="button_old green_old"><span class="icon-play"></span><span class="">Run - CTRL + S</span></a>
              </li>
              
			  <?php if(isset($html_structure) && !empty($html_structure)) { ?> 
            <li>
					<a href="#" onclick="show_confirm(); return false; " class="button red"> Reset <span class="icon">ALT + R</span></a>
            </li>
            <li>		
					
					<a href="download.php" class="button fade"> Download <span class="icon">ALT + D</span></a>
			</li>		
					
			  <?php } ?>              
              
              

            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end of nav -->


    <!-- start of container-fluid -->

    <div class="container-fluid" style="margin-top: 50px;">
	    
	    
		<div class="row-fluid">
			<div class="span4">
			
			<?php if (false): ?>
			
			<!--Sidebar content-->
				sidebar
				
				<div id="interact">
					<a href="#" onclick="document.codeRunner.submit();return false;" class="button green"> Run <span class="icon play">CTRL + S</span></a>
					<?php if(isset($html_structure) && !empty($html_structure)) { ?> 
					<a href="#" onclick="show_confirm(); return false; " class="button red"> Reset <span class="icon">ALT + R</span></a>
					<a href="download.php" class="button fade"> Download <span class="icon">ALT + D</span></a>
					<?php } ?>
					<a href="#" class="button fade" id="add_ex_files"> Add Files <?php if(isset($_SESSION['external_libs_count']) && $_SESSION['external_libs_count'] != 0) { echo '<span class="resources_count">'.$_SESSION['external_libs_count'].'</span>'; }?><span class="icon">ALT + A</span></a>
				</div><!-- end interact -->
	
				<div id="info_copyright">
					<span class="official_logo">
						Anthony young
					</span>
	
				</div>	
				
				<?php endif; ?>		
				
    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">HTML LEFT</a>
    <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>				
				
				
			<!-- SETTING USER FILE -->
			<input type="hidden" name="filename" value="<?php if(isset($username)) { echo $username; } ?>" id="filename"/>
			<input type="hidden" name="active_tab" value="<?php if(isset($_SESSION['active_tab'])) { echo $_SESSION['active_tab'];} else { echo 'html'; }?>" id="active_tab"/>
			<!-- SETTING USER FILE  -->
					
			<div id="compiler">
				<div id="editorWrapper" class="box">
					<div id="editor">
						<div id="codeplaceWrapper">
							<!-- CODE CLASS STARTS HERE -->
							<div id="html_area" class="areaBox onTop">

								<div class="textareaWrapper">
									<textarea id="html_code" name="html_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_html'])) { echo $_SESSION['playground_html']; } ?></textarea>
								</div>
							</div><!-- end html -->
							<!-- END CODE CLASS STARTS HERE -->
						</div>
					</div>
				</div>
			</div>
							
			
			</div>
			<div class="span4">
			<!--Body content-->
				

    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">CSS MIDDLE</a>
    <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>				
				
				


			<div id="compiler">
				<div id="editorWrapper" class="box">
					<div id="editor">
						<div id="codeplaceWrapper">


							<!-- CODE CLASS STARTS HERE -->
							<div id="css_area" class="areaBox">
								<div class="textareaWrapper">
									<textarea id="css_code" name="css_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_css'])) { echo $_SESSION['playground_css']; } ?></textarea>
								</div>
							</div><!-- end css -->
							<!-- END CODE CLASS STARTS HERE -->

							<!-- CODE CLASS STARTS HERE -->
							<div id="comments_area" class="areaBox">
								<h2>Comments
								</h2>
								<div class="textareaWrapper">
									<textarea id="comments_code" name="comments_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_comments'])) { echo $_SESSION['playground_comments']; } ?></textarea>
								</div>
							</div><!-- end css -->
							<!-- END CODE CLASS STARTS HERE -->

							<!-- REQUIRED TO DELETE UNWANTED FILES -->
							<div id="load"></div>
							<!-- REQUIRED TO DELETE UNWANTED FILES -->

							
						</div><!-- end codePlaceWrapper -->
					</div><!-- end editor -->
					<div id="nav">
						<a href="#" id="html" class="active"> Html </a>
						<a href="#" id="css"> Css </a>
						<a href="#" id="js"> Js </a>
						<a href="#" id="comments"> Comments </a>
					</div><!-- end nav -->
				</div><!-- end editorWrapper -->
			</form>
				
			<?php if (false): ?>	
				
			<div id="outputWrapper" class="test span4 offset6">
				<div class="frameArea">
					<iframe id="outputPreview" <?php if(isset($filename)) { echo 'src="'.$filename.'"'; } ?>></iframe>
				</div>
				
				<div id="outputNav">
					<strong>Output</strong>
				</div>
				<a href="#" class="fullscreen off"> Toogle FullScreen </a>
			</div>
			
			<?php endif; ?>
			
		</div><!-- end compiler -->				
				
				
				
			
			</div><!-- end span4 -->
			
			
		    <div class="span4">
		    
    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">JS - RIGHT</a>
    <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>
		    
			<div id="compiler">
				<div id="editorWrapper" class="box">
					<div id="editor">
						<div id="codeplaceWrapper">
						
							<!-- REQUIRED TO DELETE UNWANTED FILES -->
							<div id="load"></div>
							<!-- REQUIRED TO DELETE UNWANTED FILES -->						
						
							<!-- CODE CLASS STARTS HERE -->
							<div id="js_area" class="areaBox">
								<h2>Js
									<label for="Add To">OnLoad
									<select name="add_to" id="add_to">
										<?php
										if(isset($_SESSION['js_default_position']))
										{
											echo '<option value="'.$_SESSION['js_default_position'].'" selected="selected">'.$_SESSION['js_default_position'].'</option>';
											foreach($left_positions as $key => $value)
											{
												echo '<option value="'.$value.'">'.$value.'</option>';
											}
										}
										else
										{
											foreach($js_on_load_position as $key => $value)
											{
												echo '<option value="'.$value.'">'.$value.'</option>';
											}
										}
										?>
									</select>
									</label>

									<label for="Format">Format
										<select name="onload" id="onload">
											<?php
												if(isset($_SESSION['selected_js_lib'])){
													echo '<option value="'.$_SESSION['selected_js_lib'].'" selected="selected">'.$_SESSION['selected_js_lib'].'</option>';
													foreach($left_js_array as $key => $value)
													{
														echo '<option value="'.$value.'">'.$value.'</option>';
													}
												}
												else
												{
													foreach($js_array as $key => $value)
													{
														echo '<option value="'.$value.'">'.$value.'</option>';
													}
												}
											?>
										</select>
									</label>
								</h2>
								<div class="textareaWrapper">
									<textarea id="js_code" name="js_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_js'])) { echo $_SESSION['playground_js']; } ?></textarea>
								</div>
							</div><!-- end css -->
							<!-- END CODE CLASS STARTS HERE -->
						</div>
					</div>
				</div>
			</div>		    
		    
		    
		    

		
			</div><!-- end span4 -->
	

	
	
		</div><!-- end row-fluid -->
	    
	    
	    
		<div id="outputWrapper" class="test span12">
			<div class="frameArea">
				<iframe id="outputPreview" <?php if(isset($filename)) { echo 'src="'.$filename.'"'; } ?>></iframe>
			</div>
			
			<div id="outputNav">
				<strong>Output</strong>
			</div>
			<a href="#" class="fullscreen off"> Toogle FullScreen </a>
		</div>	    

		

	    
    </div>
    <!-- end of container-fluid -->
    






	<!-- old -->
	<?php if (false): ?>

	<div id="bodyWrapper">
	
		
		<div class="modal-backdrop"></div>
		
		<div id="header">
		</div><!-- end header -->

		


		<form method="post" action="index.php" name="codeRunner">

			<div class="popUpdialog">
				<ul>
					<li><a href="#"> Add External Css And Js Files </a></li>
				</ul>
				<div class="popUpBody">
					<input type="text" name="load_js_css_file" placeholder="Add File Url Here" id="load_js_css_file" class="input_text"/>
					<a href="#" id="add_js_css_file" class="add_button"><span> + </span></a>
					<h2> Added Files </h2>
					<ul id="files_tab">
						<?php if(isset($_SESSION['existing_external_libs'])) { echo $_SESSION['existing_external_libs']; } ?>
					</ul>
					<br />
					<a href="#" class="button green" style="text-align:center;" id="done_loading_external_sheets"> I am Done </a>
				</div><!-- end popUpBody -->
			</div>



			<?php if (false): ?>
			<div id="sidebar">
				<div id="interact">
					<a href="#" onclick="document.codeRunner.submit();return false;" class="button green"> Run <span class="icon play">CTRL + S</span></a>
					<?php if(isset($html_structure) && !empty($html_structure)) { ?> 
					<a href="#" onclick="show_confirm(); return false; " class="button red"> Reset <span class="icon">ALT + R</span></a>
					<a href="download.php" class="button fade"> Download <span class="icon">ALT + D</span></a>
					<?php } ?>
					<a href="#" class="button fade" id="add_ex_files"> Add Files <?php if(isset($_SESSION['external_libs_count']) && $_SESSION['external_libs_count'] != 0) { echo '<span class="resources_count">'.$_SESSION['external_libs_count'].'</span>'; }?><span class="icon">ALT + A</span></a>
				</div><!-- end interact -->
	
				<div id="info_copyright">
					<span class="official_logo">
						Anthony young
					</span>
	
				</div>
			</div><!-- end sidebar -->
			<?php endif; ?>
			
			
			
			
<?php if (false): ?>
			<!-- SETTING USER FILE -->
			<input type="hidden" name="filename" value="<?php if(isset($username)) { echo $username; } ?>" id="filename"/>
			<input type="hidden" name="active_tab" value="<?php if(isset($_SESSION['active_tab'])) { echo $_SESSION['active_tab'];} else { echo 'html'; }?>" id="active_tab"/>
			<!-- SETTING USER FILE  -->

			<div id="compiler">
				<div id="editorWrapper" class="box">
					<div id="editor">
						<div id="codeplaceWrapper">
							<!-- CODE CLASS STARTS HERE -->
							<div id="html_area" class="areaBox onTop">
								<h2>Html
								</h2>
								<div class="textareaWrapper">
									<textarea id="html_code" name="html_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_html'])) { echo $_SESSION['playground_html']; } ?></textarea>
								</div>
							</div><!-- end html -->
							<!-- END CODE CLASS STARTS HERE -->

							<!-- CODE CLASS STARTS HERE -->
							<div id="css_area" class="areaBox">
								<h2>CSS
								</h2>
								<div class="textareaWrapper">
									<textarea id="css_code" name="css_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_css'])) { echo $_SESSION['playground_css']; } ?></textarea>
								</div>
							</div><!-- end css -->
							<!-- END CODE CLASS STARTS HERE -->

							<!-- CODE CLASS STARTS HERE -->
							<div id="comments_area" class="areaBox">
								<h2>Comments
								</h2>
								<div class="textareaWrapper">
									<textarea id="comments_code" name="comments_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_comments'])) { echo $_SESSION['playground_comments']; } ?></textarea>
								</div>
							</div><!-- end css -->
							<!-- END CODE CLASS STARTS HERE -->

							<!-- REQUIRED TO DELETE UNWANTED FILES -->
							<div id="load"></div>
							<!-- REQUIRED TO DELETE UNWANTED FILES -->

							<!-- CODE CLASS STARTS HERE -->
							<div id="js_area" class="areaBox">
								
									<label for="Add To">OnLoad
									<select name="add_to" id="add_to">
										<?php
										if(isset($_SESSION['js_default_position']))
										{
											echo '<option value="'.$_SESSION['js_default_position'].'" selected="selected">'.$_SESSION['js_default_position'].'</option>';
											foreach($left_positions as $key => $value)
											{
												echo '<option value="'.$value.'">'.$value.'</option>';
											}
										}
										else
										{
											foreach($js_on_load_position as $key => $value)
											{
												echo '<option value="'.$value.'">'.$value.'</option>';
											}
										}
										?>
									</select>
									</label>

									<label for="Format">Format
										<select name="onload" id="onload">
											<?php
												if(isset($_SESSION['selected_js_lib'])){
													echo '<option value="'.$_SESSION['selected_js_lib'].'" selected="selected">'.$_SESSION['selected_js_lib'].'</option>';
													foreach($left_js_array as $key => $value)
													{
														echo '<option value="'.$value.'">'.$value.'</option>';
													}
												}
												else
												{
													foreach($js_array as $key => $value)
													{
														echo '<option value="'.$value.'">'.$value.'</option>';
													}
												}
											?>
										</select>
									</label>
								</h2>
								<div class="textareaWrapper">
									<textarea id="js_code" name="js_code" class="codeEdtitor"><?php if(isset($_SESSION['playground_js'])) { echo $_SESSION['playground_js']; } ?></textarea>
								</div>
							</div><!-- end css -->
							<!-- END CODE CLASS STARTS HERE -->
						</div><!-- end codePlaceWrapper -->
					</div><!-- end editor -->
					<div id="nav">
						<a href="#" id="html" class="active"> Html </a>
						<a href="#" id="css"> Css </a>
						<a href="#" id="js"> Js </a>
						<a href="#" id="comments"> Comments </a>
					</div><!-- end nav -->
				</div><!-- end editorWrapper -->
			</form>
				
			<?php if (false): ?>	
				
			<div id="outputWrapper" class="test span4">
				<div class="frameArea">
					<iframe id="outputPreview" <?php if(isset($filename)) { echo 'src="'.$filename.'"'; } ?>></iframe>
				</div>
				
				<div id="outputNav">
					<strong>Output</strong>
				</div>
				<a href="#" class="fullscreen off"> Toogle FullScreen </a>
			</div>
			
			<?php endif; ?>
			
		</div><!-- end compiler -->
		<?php endif; ?>
		
		
	</div><!-- end bodyWrapper -->
	
	<?php endif; ?>
	
	
	
	<script>
		   var editor = CodeMirror.fromTextArea(document.getElementById("js_code"), {
			mode: "javascript",
			lineWrapping: true,
			lineNumbers: true,
			extraKeys: {
				"Ctrl-S": function(instance) { Save() },
				"Alt-D": function(instance) { Download() },
				"Alt-R": function(instance) { show_confirm() },
				"Alt-A": function(instance) { showPopUp() }
			}
			});
			var editor = CodeMirror.fromTextArea(document.getElementById("html_code"), {
			mode: "text/html",
			lineWrapping: true,
			lineNumbers: true,
			extraKeys: {
				"'>'": function(cm) { cm.closeTag(cm, '>'); },
				"'/'": function(cm) { cm.closeTag(cm, '/'); },
				"Ctrl-S": function(instance) { Save() },
				"Alt-D": function(instance) { Download() },
				"Alt-R": function(instance) { show_confirm() },
				"Alt-A": function(instance) { showPopUp() }
			}
			});
			var editor = CodeMirror.fromTextArea(document.getElementById("css_code"), {
			mode: "css",
			lineWrapping: true,
			lineNumbers: true,
			extraKeys: {
				"Ctrl-S": function(instance) { Save() },
				"Alt-D": function(instance) { Download() },
				"Alt-R": function(instance) { show_confirm() },
				"Alt-A": function(instance) { showPopUp() }
			}
			});
			var editor = CodeMirror.fromTextArea(document.getElementById("comments_code"), {
			mode: "text/plain",
			lineWrapping: true,
			lineNumbers: true,
			extraKeys: {
				"Ctrl-S": function(instance) { Save() },
				"Alt-D": function(instance) { Download() },
				"Alt-R": function(instance) { show_confirm() },
				"Alt-A": function(instance) { showPopUp() }
			}
			});
	</script>
</body>
</html>
