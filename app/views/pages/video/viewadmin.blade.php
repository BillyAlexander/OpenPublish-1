<br>
<!-- <br>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Accordion</span>
				</div>
				<div class="box-icons pull-right">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content" id="accordion">
				<h3>Youtube</h3>
				<div>
					<p>
						Linux is a Unix-like and POSIX-compliant computer operating system assembled under the model of free
						and open source software development and distribution. The defining component of Linux is the Linux
						kernel, an operating system kernel first released on 5 October 1991 by Linus Torvalds.
					</p>
					<p>
						Linux was originally developed as a free operating system for Intel x86-based personal computers.
						It has since been ported to more computer hardware platforms than any other operating system.
						It is a leading operating system on servers and other big iron systems such as mainframe computers
						and supercomputers: as of June 2013, more than 95% of the world's 500 fastest supercomputers run
						some variant of Linux, including all the 44 fastest. Linux also runs on embedded systems (devices
						where the operating system is typically built into the firmware and highly tailored to the system)
						such as mobile phones, tablet computers, network routers, building automation controls,
						televisions and video game consoles; the Android system in wide use on mobile devices is built on
						the Linux kernel.
					</p>
				</div>
				<h3>Vimeo</h3>
				<div>
					<p>
						Firefox OS (project name: Boot to Gecko, also known as B2G) is a Linux-based open-source operating
						system for smartphones and tablet computers and is set to be used on smart TVs. It is being developed
						by Mozilla, the non-profit organization best known for the Firefox web browser. Firefox OS is
						designed to provide a "complete" community-based alternative system for mobile devices, using open
						standards and approaches such as HTML5 applications, JavaScript, a robust privilege model, open web
						APIs to communicate directly with cellphone hardware, and application marketplace. As such,
						it competes with proprietary systems such as Apple's iOS, Google's Chrome OS and Microsoft's Windows
						Phone, as well as other open source systems such as Android, Jolla's Sailfish OS and Ubuntu Touch.
					</p>
				</div>
				
			</div>
		</div>
	</div>
	
</div> -->


<div class="row">
	
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-video-camera"></i>
					<span>Administrar Videos</span>
				</div>
				<div class="box-icons pull-right">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<!-- <a class="close-link">
						<i class="fa fa-times"></i>
					</a> -->
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<!-- <div class="panel panel-default"> -->
					<div id="tabs">
						<ul  class="list-inline">
							<!-- <li><a class="btn btn-default btn-app-sm " data-toggle="tooltip" data-placement="bottom" title="YouTube"  href="#tabs-1"><i class="fa fa-youtube txt-danger" ></i></a></li>
							<li><a class="btn btn-default btn-app-sm " data-toggle="tooltip" data-placement="bottom" title="Vimeo" href="#tabs-2"><i class="fa fa-vimeo-square txt-info"></i></a></li> -->
							<li><a  data-toggle="tooltip" data-placement="bottom" title="YouTube"  href="#tabs-1"><i class="fa fa-youtube txt-danger" ></i> YouTube</a></li>
							<li><a data-toggle="tooltip" data-placement="bottom" title="Vimeo" href="#tabs-2"><i class="fa fa-vimeo-square txt-info"></i> Vimeo</a></li>
						</ul>
						<div id="tabs-1">
							<div class="panel panel-danger">
								<div class="alert alert-danger" role="alert">
								  <i class="fa fa-youtube-square" ></i> 
								  YouTube
								</div>
								<form id="DelDataPersonalForm" method="POST"  action="" class="form-horizontal">
					        		<fieldset>
					        		<div class="form-group" >
						        		<label class="col-sm-2 control-label">Criterio: </label>
									  	<div class="col-sm-4">
											<select class="populate placeholder" name="criterio" id="criterio">
											<option selected value="">-- Seleccione un Criterio --</option>
											<option  value="0">getVideoInfo</option>
											<option  value="1">getPopularVideos</option>
											<option  value="2">search</option>
											<option  value="3">searchVideos</option>
											<option  value="4">searchChannelVideos</option>
											<option  value="5">getChannelByName</option>
											<option  value="6">searchAdvanced</option>
											

											
											</select>
										</div>
										<label id="info_criterio" class="col-sm-2"><span  class="label label-info"><i class="fa fa-info-circle" ></i></span> </label>
									<!-- <span  class="label label-info"></label id="info_criterio">labe</label></span> -->
									<!-- <div class="col-sm-4"><p id="info_criterio" class="bg-primary"> Simple info</p></div> -->
									</div>

									<div class="form-group" >
										<label class="col-sm-2 control-label">Cambia: </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="varia" id="varia"/>
										</div>
									</div>

									<div class="form-group" >
										<label class="col-sm-2  control-label">Max Resultados: </label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="max" id="max"/>
										</div>

										<div class="col-sm-4 ">
											<div class="checkbox-inline">
												<label class="">
													<input type="checkbox" checked> Ver Titulo
													<i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox"> Ver Descripción
													<i class="fa fa-square-o"></i>
												</label>
											</div>
										</div>
									</div>

									

									<div class="form-group" >
										
									</div>


							
										
													
							        	
											  	

												  	
												
											
											 <!--  <a  class="list-group-item">Cambia: <label id="usernombredel"></label></a>
											  <a  class="list-group-item">Max Results: <label id="useremaildel"></label></a>
											  <a  class="list-group-item"> <label id="userestadodel"></label></a>
											  <a  class="list-group-item"><label id="userroldel"></label></a> -->
										
									</fieldset>
									<!-- <span class="label label-default">Default</span> -->

								</form>
							</div>
						</div>
						<div id="tabs-2">
							<div class="panel panel-info">
								<div class="alert alert-info" role="alert">
								  <i class="fa fa-vimeo-square" ></i> 
								  Vimeo
								</div>
							</div>
						</div>
						
					</div>
				<!-- </div> -->
			</div>
		</div>
	</div>
</div>




<script type="text/javascript">
$(document).ready(function() {
	// Load TimePicker plugin and callback all time and date pickers
	LoadTimePickerScript(AllTimePickers);
	// Create jQuery-UI tabs
	$("#tabs").tabs();
	// Sortable for elements
	$(".sort").sortable({
		items: "div.col-sm-2",
		appendTo: 'div.box-content'
	});
	// Droppable for example of trash
	$(".drop div.col-sm-2").draggable({containment: '.dropbox' });
	$('#trash').droppable({
		drop: function(event, ui) {
			$(ui.draggable).remove();
		}
	});
	var icons = {
		header: "ui-icon-circle-arrow-e",
		activeHeader: "ui-icon-circle-arrow-s"
	};
	// Make accordion feature of jQuery-UI
	$("#accordion").accordion({icons: icons });
	// Create UI spinner
	$("#ui-spinner").spinner();
	// Add Drag-n-Drop to boxes
	WinMove();
	// // Load selects
	LoadSelect2Script(DemoSelect2);





});

function DemoSelect2(){
	$('#criterio').select2();
}

//informacion al seleccionar un criterio
$("#criterio").change(function(e) {
	// alert($("#criterio").val());
	if($("#criterio").val() != '')
	{
		var array = ['Obtenga informacion de un video', "Obtenga videos populares en un país","Buscar listas de reproducción, canales y vídeos","Buscar sólo Videos","Buscar sólo Videos en un canal determinado","Obtenga informacion de un canal","Buscar con argumentos para mostrar datos de página como página de fichas"];
		$("#info_criterio").html('<span  class="label label-info"><i class="fa fa-info-circle" ></i> '+array[$("#criterio").val()]+'</span>');	
	}
	else{
		$("#info_criterio").html('<span  class="label label-info"><i class="fa fa-info-circle" ></i></span>');	
	}
	
});


</script>