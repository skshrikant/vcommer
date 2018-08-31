<div id="accessDeniedModal2" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:525px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">Coming Soon</span>
						</div>
						<br>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:cancelAccessDeniedPopup();" class="btn btn-sm btn-danger-custom" style="width:150px;">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<script type="text/javascript">
  $('#accessDeniedModal2').modal({show:true,backdrop: 'static',keyboard: false});
  function cancelAccessDeniedPopup() {
      ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');
      ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
  }
</script>