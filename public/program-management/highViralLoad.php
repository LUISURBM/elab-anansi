<?php
$title = "eVLIS | Clinics Report";
include('../header.php');
//include('../includes/MysqliDb.php');
$tsQuery="SELECT * FROM r_sample_status";
$tsResult = $db->rawQuery($tsQuery);
//config  query
$configQuery="SELECT * from global_config";
$configResult=$db->query($configQuery);
$arr = array();
// now we create an associative array so that we can easily create view variables
for ($i = 0; $i < sizeof($configResult); $i++) {
  $arr[$configResult[$i]['name']] = $configResult[$i]['value'];
}
$sQuery="SELECT * FROM r_sample_type where status='active'";
$sResult = $db->rawQuery($sQuery);
$fQuery="SELECT * FROM facility_details where status='active'";
$fResult = $db->rawQuery($fQuery);
$batQuery="SELECT batch_code FROM batch_details where batch_status='completed'";
$batResult = $db->rawQuery($batQuery);
?>
  <style>
    .select2-selection__choice{
      color:black !important;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> <i class="fa fa-book"></i> Clinic Reports</h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Clinic Reports</li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
						<div class="widget">
							<div class="widget-content">
									<div class="bs-example bs-example-tabs">
											<ul id="myTab" class="nav nav-tabs">
												<li class="active"><a href="#highViralLoadReport" data-toggle="tab">High Viral Load Report</a></li>
												<li><a href="#sampleRjtReport" data-toggle="tab">Specimen Rejection Report</a></li>
												<li><a href="#notAvailReport" data-toggle="tab">Results not Available Report</a></li>
												<li><a href="#incompleteReport" data-toggle="tab">Data Quality Check</a></li>
											</ul>
											<div id="myTabContent" class="tab-content" >
												<div class="tab-pane fade in active" id="highViralLoadReport">
													 <table class="table" style="margin-left:1%;margin-top:20px;width:98%;padding: 3%;">
															<tr>
																	<td><b>Specimen Test Date&nbsp;:</b></td>
																	<td>
																		<input type="text" id="hvlSampleTestDate" name="hvlSampleTestDate" class="form-control" placeholder="Select Specimen Test Date" readonly style="width:220px;background:#fff;"/>
																	</td>
																	<td>&nbsp;<b>Batch ID&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="hvlBatchCode" name="hvlBatchCode" title="Please select batch code" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($batResult as $code){
																			 ?>
																			 <option value="<?php echo $code['batch_code'];?>"><?php echo $code['batch_code'];?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
																	<td>&nbsp;<b>Specimen Type&nbsp;:</b></td>
																	<td>
																		<select style="width:220px;" class="form-control" id="hvlSampleType" name="sampleType" title="Please select sample type">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($sResult as $type){
																			 ?>
																			 <option value="<?php echo $type['sample_id'];?>"><?php echo ucwords($type['sample_name']);?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
															</tr>
															<tr>
																	<td>&nbsp;<b>Site Name & ID&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="hvlFacilityName" name="hvlFacilityName" title="Please select site name" multiple="multiple" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($fResult as $name){
																			 ?>
																			 <option value="<?php echo $name['facility_id'];?>"><?php echo ucwords($name['facility_name']."-".$name['facility_code']);?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
																	<td>&nbsp;<b>Contact Status&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="hvlContactStatus" name="hvlContactStatus" title="Please select contact status" style="width:220px;">
																		<option value=""> -- Select -- </option>
																		<option value="yes">Completed</option>
																		<option value="no">Not Completed</option>
																		<option value="all" selected="selected">All</option>
																		</select>
																	</td>
																	<td><b>Gender&nbsp;:</b></td>
																	<td>
																		<select name="hvlGender" id="hvlGender" class="form-control" title="Please choose gender" style="width:220px;" onchange="hideFemaleDetails(this.value,'hvlPatientPregnant','hvlPatientBreastfeeding');">
																			<option value=""> -- Select -- </option>
																			<option value="male">Male</option>
																			<option value="female">Female</option>
																			<option value="not_recorded">Not Recorded</option>
																		</select>
																	</td>
															</tr>
															<tr>
																	<td><b>Pregnant&nbsp;:</b></td>
																	<td>
																		<select name="hvlPatientPregnant" id="hvlPatientPregnant" class="form-control" title="Please choose pregnant option">
																			<option value=""> -- Select -- </option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</td>
																	<td><b>Breastfeeding&nbsp;:</b></td>
																	<td>
																		<select name="hvlPatientBreastfeeding" id="hvlPatientBreastfeeding" class="form-control" title="Please choose option">
																			<option value=""> -- Select -- </option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</td>
															</tr>
															<tr>
																<td colspan="6">&nbsp;<input type="button" onclick="searchVlRequestDataHigh();" value="Search" class="btn btn-success btn-sm">
																	&nbsp;<button class="btn btn-danger btn-sm" onclick="document.location.href = document.location"><span>Reset</span></button>
																	<button class="btn btn-success btn-sm" type="button" onclick="exportAllExcelHigh()"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export to excel</button>
																	</td>
															</tr>
													</table>

											<table id="highViralLoadReportTable" class="table table-bordered table-striped">
													<thead>
															<tr>
																	<th>Site Name</th>
																	<th>Patient ART no.</th>
																	<th>Patient Phone no.</th>
																	<th>Specimen Collection Date</th>
																	<th>VL Lab Name</th>
																	<th>VL Value in cp/ml</th>
																<!--	<th>Status</th> -->
															</tr>
													</thead>
													<tbody>
															<tr>
																	<td colspan="6" class="dataTables_empty">Loading data from server</td>
															</tr>
													</tbody>
											</table>
												</div>
												<div class="tab-pane fade" id="sampleRjtReport">
													<table class="table" style="margin-left:1%;margin-top:20px;width:98%;padding: 3%;">
															<tr>
																	<td><b>Specimen Test Date&nbsp;:</b></td>
																	<td>
																		<input type="text" id="rjtSampleTestDate" name="rjtSampleTestDate" class="form-control" placeholder="Select Specimen Test Date" readonly style="width:220px;background:#fff;"/>
																	</td>
																	<td>&nbsp;<b>Batch ID&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="rjtBatchCode" name="rjtBatchCode" title="Please select batch code" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($batResult as $code){
																			 ?>
																			 <option value="<?php echo $code['batch_code'];?>"><?php echo $code['batch_code'];?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
																	<td>&nbsp;<b>Specimen Type&nbsp;:</b></td>
																	<td>
																		<select style="width:220px;" class="form-control" id="rjtSampleType" name="sampleType" title="Please select specimen type">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($sResult as $type){
																			 ?>
																			 <option value="<?php echo $type['sample_id'];?>"><?php echo ucwords($type['sample_name']);?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
															</tr>
															<tr>
																	<td>&nbsp;<b>Site Name & ID&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="rjtFacilityName" name="facilityName" title="Please select site name" multiple="multiple" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($fResult as $name){
																			 ?>
																			 <option value="<?php echo $name['facility_id'];?>"><?php echo ucwords($name['facility_name']."-".$name['facility_code']);?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
																	<td><b>Gender&nbsp;:</b></td>
																	<td>
																		<select name="rjtGender" id="rjtGender" class="form-control" title="Please choose gender" style="width:220px;" onchange="hideFemaleDetails(this.value,'rjtPatientPregnant','rjtPatientBreastfeeding');">
																			<option value=""> -- Select -- </option>
																			<option value="male">Male</option>
																			<option value="female">Female</option>
																			<option value="not_recorded">Not Recorded</option>
																		</select>
																	</td>
																	<td><b>Pregnant&nbsp;:</b></td>
																	<td>
																		<select name="rjtPatientPregnant" id="rjtPatientPregnant" class="form-control" title="Please choose pregnant option">
																			<option value=""> -- Select -- </option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</td>
															</tr>
															<tr>
																	<td><b>Breastfeeding&nbsp;:</b></td>
																	<td>
																		<select name="rjtPatientBreastfeeding" id="rjtPatientBreastfeeding" class="form-control" title="Please choose option">
																			<option value=""> -- Select -- </option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</td>
															</tr>
															<tr>
																<td colspan="6">&nbsp;<input type="button" onclick="searchVlRequestDataReject();" value="Search" class="btn btn-success btn-sm">
																	&nbsp;<button class="btn btn-danger btn-sm" onclick="document.location.href = document.location"><span>Reset</span></button>
																	<button class="btn btn-success btn-sm" type="button" onclick="exportAllExcelRejection()"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export to excel</button>
																	</td>
															</tr>
													</table>
													<table id="sampleRjtReportTable" class="table table-bordered table-striped">
															<thead>
																	<tr>
																			<th>Site Name</th>
																			<th>Patient ART no.</th>
																			<th>Specimen Collection Date</th>
																			<th>VL Lab Name</th>
																			<th>Rejection Reason</th>
																	</tr>
															</thead>
															<tbody>
																	<tr>
																			<td colspan="6" class="dataTables_empty">Loading data from server</td>
																	</tr>
															</tbody>
													</table>
												</div>



												<div class="tab-pane fade" id="notAvailReport">
													<table class="table" style="margin-left:1%;margin-top:20px;width:98%;padding: 3%;">
															<tr>
																	<td><b>Specimen Test Date&nbsp;:</b></td>
																	<td>
																		<input type="text" id="noResultSampleTestDate" name="noResultSampleTestDate" class="form-control" placeholder="Select Specimen Test Date" readonly style="width:220px;background:#fff;"/>
																	</td>
																	<td>&nbsp;<b>Batch ID&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="noResultBatchCode" name="noResultBatchCode" title="Please select batch code" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($batResult as $code){
																			 ?>
																			 <option value="<?php echo $code['batch_code'];?>"><?php echo $code['batch_code'];?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
																	<td>&nbsp;<b>Specimen Type&nbsp;:</b></td>
																	<td>
																		<select style="width:220px;" class="form-control" id="noResultSampleType" name="sampleType" title="Please select specimen type">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($sResult as $type){
																			 ?>
																			 <option value="<?php echo $type['sample_id'];?>"><?php echo ucwords($type['sample_name']);?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
															</tr>
															<tr>
																	<td>&nbsp;<b>Site Name & ID&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="noResultFacilityName" name="facilityName" title="Please select site name" multiple="multiple" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<?php
																			foreach($fResult as $name){
																			 ?>
																			 <option value="<?php echo $name['facility_id'];?>"><?php echo ucwords($name['facility_name']."-".$name['facility_code']);?></option>
																			 <?php
																			}
																			?>
																		</select>
																	</td>
																	<td><b>Gender&nbsp;:</b></td>
																	<td>
																		<select name="noResultGender" id="noResultGender" class="form-control" title="Please choose gender" style="width:220px;" onchange="hideFemaleDetails(this.value,'noResultPatientPregnant','noResultPatientBreastfeeding');">
																			<option value=""> -- Select -- </option>
																			<option value="male">Male</option>
																			<option value="female">Female</option>
																			<option value="not_recorded">Not Recorded</option>
																		</select>
																	</td>
																	<td><b>Pregnant&nbsp;:</b></td>
																	<td>
																		<select name="noResultPatientPregnant" id="noResultPatientPregnant" class="form-control" title="Please choose pregnant option">
																			<option value=""> -- Select -- </option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</td>
															</tr>
															<tr>
																	<td><b>Breastfeeding&nbsp;:</b></td>
																	<td>
																		<select name="noResultPatientBreastfeeding" id="noResultPatientBreastfeeding" class="form-control" title="Please choose option">
																			<option value=""> -- Select -- </option>
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</td>
															</tr>
															<tr>
																<td colspan="6">&nbsp;<input type="button" onclick="searchVlRequestDataAvailable();" value="Search" class="btn btn-success btn-sm">
																	&nbsp;<button class="btn btn-danger btn-sm" onclick="document.location.href = document.location"><span>Reset</span></button>
																	<button class="btn btn-success btn-sm" type="button" onclick="exportAllExcelNotAvailable()"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export to excel</button>
																	</td>
															</tr>
													</table>
													<table id="notAvailReportTable" class="table table-bordered table-striped">
															<thead>
																	<tr>
																			<th>Site Name</th>
																			<th>Patient ART no.</th>
																			<th>Specimen Collection Date</th>
																			<th>VL Lab Name</th>
																	</tr>
															</thead>
															<tbody>
																	<tr>
																			<td colspan="4" class="dataTables_empty">Loading data from server</td>
																	</tr>
															</tbody>
													</table>
												</div>


												<!-- ******************************************************************************************************************************************** -->
												<div class="tab-pane fade" id="incompleteReport">
													<table class="table" style="margin-left:1%;margin-top:20px;width:98%;padding: 3%;">
															<tr>
																	<td><b>Specimen Collection Date&nbsp;:</b></td>
																	<td>
																		<input type="text" id="sampleCollectionDate" name="sampleCollectionDate" class="form-control" placeholder="Select Specimen Collection Date" readonly style="width:220px;background:#fff;"/>
																	</td>
																	<td>&nbsp;<b>Fields&nbsp;:</b></td>
																	<td>
																		<select class="form-control" id="formField" name="formField" multiple="multiple" title="Please Select fields" style="width:220px;">
																			<option value=""> -- Select -- </option>
																			<option value="serial_no">Specimen ID</option>
																			<option value="sample_collection_date">Specimen Collection Date</option>
																			<option value="sample_batch_id">Batch ID</option>
																			<option value="patient_art_no">Unique ART No.</option>
																			<option value="patient_first_name">Patient Name</option>
																			<option value="facility_id">Site Name</option>
																			<option value="facility_state">Region</option>
																			<option value="facility_district">District</option>
																			<option value="sample_type">Specimen Type</option>
																			<option value="result">Result</option>
																			<option value="result_status">Status</option>
																		</select>
																	</td>
															</tr>

															<tr>
																<td colspan="4">&nbsp;<input type="button" onclick="searchVlRequestDataQuality();" value="Search" class="btn btn-success btn-sm">
																	&nbsp;<button class="btn btn-danger btn-sm" onclick="document.location.href = document.location"><span>Reset</span></button>
																	<button class="btn btn-success btn-sm" type="button" onclick="exportAllExcelIncomplete()"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export to excel</button>
																	</td>
															</tr>
													</table>
													<table id="incompleteReportTable" class="table table-bordered table-striped">
															<thead>
																	<tr>
																		<th>Specimen ID</th>
																		<th>Specimen Collection Date</th>
																		<th>Batch ID</th>
																		<th>Unique ART No</th>
																		<th>Patient's Full Name</th>
																		<th>Site Name</th>
																		<th>Region</th>
																		<th>District</th>
																		<th>Specimen Type</th>
																		<th>Result</th>
																		<th>Status</th>
																	</tr>
															</thead>
															<tbody>
																	<tr>
																			<td colspan="13" class="dataTables_empty">Loading data from server</td>
																	</tr>
															</tbody>
													</table>
												</div>
											</div>
									</div>
							</div>
				</div><!-- /.box-body -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript" src="../assets/plugins/daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript">
			var oTableViralLoad = null;
			var oTableRjtReport = null;
			var oTablenotAvailReport = null;
			var oTableincompleteReport = null;
      $(document).ready(function() {
				$("#hvlFacilityName,#rjtFacilityName,#noResultFacilityName").select2({placeholder:"Select Sites"});
				$("#formField").select2({placeholder:"Select Fields"});
				$('#hvlSampleTestDate,#rjtSampleTestDate,#noResultSampleTestDate,#sampleCollectionDate').daterangepicker({
            format: 'DD-MMM-YYYY',
						separator: ' to ',
            startDate: moment().subtract('days', 29),
            endDate: moment(),
            maxDate: moment(),
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment().subtract('days', 6), moment()],
                'Last 30 Days': [moment().subtract('days', 29), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            }
        },
        function(start, end) {
            startDate = start.format('YYYY-MM-DD');
            endDate = end.format('YYYY-MM-DD');
				});
				$('#hvlSampleTestDate,#rjtSampleTestDate,#noResultSampleTestDate,#sampleCollectionDate').val('');
				highViralLoadReport();
				sampleRjtReport();
				notAvailReport();
				incompleteReport();
			});
  function highViralLoadReport(){
    $.blockUI();
     oTableViralLoad = $('#highViralLoadReportTable').dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
			dom: 'Blfrtip',
			buttons: [
				'excel',
			],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bJQueryUI": false,
            "bAutoWidth": false,
            "bInfo": true,
            "bScrollCollapse": true,
            //"bStateSave" : true,
            "bRetrieve": true,
            "aoColumns": [
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
              //  {"sClass":"center"},
            ],
            "aaSorting": [[ 1, "DESC" ]],
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "getHighVlResultDetails.php",
            "fnServerData": function ( sSource, aoData, fnCallback ) {
							aoData.push({"name": "hvlBatchID", "value": $("#hvlBatchCode").val()});
							aoData.push({"name": "hvlSpecimenTestDate", "value": $("#hvlSampleTestDate").val()});
							aoData.push({"name": "hvlSiteName", "value": $("#hvlFacilityName").val()});
							aoData.push({"name": "hvlSpecimenType", "value": $("#hvlSampleType").val()});
							aoData.push({"name": "hvlContactStatus", "value": $("#hvlContactStatus").val()});
							aoData.push({"name": "hvlGender", "value": $("#hvlGender").val()});
							aoData.push({"name": "hvlPatientPregnant", "value": $("#hvlPatientPregnant").val()});
							aoData.push({"name": "hvlPatientBreastfeeding", "value": $("#hvlPatientBreastfeeding").val()});
              $.ajax({
                  "dataType": 'json',
                  "type": "POST",
                  "url": sSource,
                  "data": aoData,
                  "success": fnCallback
              });
            }
        });
     $.unblockUI();
  }
	function sampleRjtReport(){
    $.blockUI();
     oTableRjtReport = $('#sampleRjtReportTable').dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
			dom: 'Blfrtip',
			buttons: [
				'excel',
			],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bJQueryUI": false,
            "bAutoWidth": false,
            "bInfo": true,
            "bScrollCollapse": true,
            //"bStateSave" : true,
            "bRetrieve": true,
            "aoColumns": [
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},

            ],
            "aaSorting": [[ 1, "DESC" ]],
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "getSampleRejectionReport.php",
            "fnServerData": function ( sSource, aoData, fnCallback ) {
							aoData.push({"name": "rjtBatchID", "value": $("#rjtBatchCode").val()});
							aoData.push({"name": "rjtSpecimenTestDate", "value": $("#rjtSampleTestDate").val()});
							aoData.push({"name": "rjtSiteName", "value": $("#rjtFacilityName").val()});
							aoData.push({"name": "rjtSpecimenType", "value": $("#rjtSampleType").val()});
							aoData.push({"name": "rjtGender", "value": $("#rjtGender").val()});
							aoData.push({"name": "rjtPatientPregnant", "value": $("#rjtPatientPregnant").val()});
							aoData.push({"name": "rjtPatientBreastfeeding", "value": $("#rjtPatientBreastfeeding").val()});
              $.ajax({
                  "dataType": 'json',
                  "type": "POST",
                  "url": sSource,
                  "data": aoData,
                  "success": fnCallback
              });
            }
        });
     $.unblockUI();
  }
	function notAvailReport(){
    $.blockUI();
     oTablenotAvailReport = $('#notAvailReportTable').dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
			dom: 'Blfrtip',
			buttons: [
				'excel',
			],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bJQueryUI": false,
            "bAutoWidth": false,
            "bInfo": true,
            "bScrollCollapse": true,
            //"bStateSave" : true,
            "bRetrieve": true,
            "aoColumns": [
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
            ],
            "aaSorting": [[ 1, "DESC" ]],
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "getResultNotAvailable.php",
            "fnServerData": function ( sSource, aoData, fnCallback ) {
							aoData.push({"name": "noResultBatchCode", "value": $("#noResultBatchCode").val()});
							aoData.push({"name": "noResultSampleTestDate", "value": $("#noResultSampleTestDate").val()});
							aoData.push({"name": "noResultFacilityName", "value": $("#noResultFacilityName").val()});
							aoData.push({"name": "noResultSampleType", "value": $("#noResultSampleType").val()});
							aoData.push({"name": "noResultGender", "value": $("#noResultGender").val()});
							aoData.push({"name": "noResultPatientPregnant", "value": $("#noResultPatientPregnant").val()});
							aoData.push({"name": "noResultPatientBreastfeeding", "value": $("#noResultPatientBreastfeeding").val()});
              $.ajax({
                  "dataType": 'json',
                  "type": "POST",
                  "url": sSource,
                  "data": aoData,
                  "success": fnCallback
              });
            }
        });
     $.unblockUI();
  }
function incompleteReport(){
    $.blockUI();
     oTableincompleteReport = $('#incompleteReportTable').dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
			dom: 'Blfrtip',
			buttons: [
				'excel',
			],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bJQueryUI": false,
            "bAutoWidth": false,
            "bInfo": true,
            "bScrollCollapse": true,
            //"bStateSave" : true,
            "bRetrieve": true,
            "aoColumns": [
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
                {"sClass":"center"},
            ],
            "aaSorting": [[ 1, "DESC" ]],
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "dataQualityCheck.php",
            "fnServerData": function ( sSource, aoData, fnCallback ) {
							aoData.push({"name": "sampleCollectionDate", "value": $("#sampleCollectionDate").val()});
							aoData.push({"name": "formField", "value": $("#formField").val()});
              $.ajax({
                  "dataType": 'json',
                  "type": "POST",
                  "url": sSource,
                  "data": aoData,
                  "success": fnCallback
              });
            }
        });
     $.unblockUI();
  }
	function searchVlRequestDataHigh()
	{
    $.blockUI();
    oTableViralLoad.fnDraw();
    $.unblockUI();
	}
	function searchVlRequestDataReject()
	{
    $.blockUI();
    oTableRjtReport.fnDraw();
    $.unblockUI();
	}
	function searchVlRequestDataAvailable()
	{
    $.blockUI();
    oTablenotAvailReport.fnDraw();
    $.unblockUI();
	}
	function searchVlRequestDataQuality()
	{
    $.blockUI();
	//incompleteForm();
	oTableincompleteReport.fnDraw();
    $.unblockUI();
	}




  function updateStatus(id,value){
    conf = confirm("Do you wish to change the contact completed status?");
    if(conf){
    $.post("updateContactCompletedStatus.php",{id:id,value:value},
      function(data){
	  alert("Status updated successfully");
	  oTableViralLoad.fnDraw();
      });
    }else{
	   oTableViralLoad.fnDraw();
	}
  }

	function exportHighViralLoadInexcel() {
		var markAsComplete = false;
		confm = confirm("Do you want to mark these as complete ?");
		if(confm){
			var markAsComplete = true;
		}
    $.blockUI();
    $.post("vlHighViralLoadResultExportInExcel.php",{Sample_Test_Date:$("#hvlSampleTestDate").val(),Batch_Code:$("#hvlBatchCode  option:selected").text(),Sample_Type:$("#hvlSampleType  option:selected").text(),Facility_Name:$("#hvlFacilityName  option:selected").text(),Gender:$("#hvlGender  option:selected").text(),Pregnant:$("#hvlPatientPregnant  option:selected").text(),Breastfeeding:$("#hvlPatientBreastfeeding  option:selected").text(),markAsComplete:markAsComplete},
    function(data){
	  if(data == "" || data == null || data == undefined){
	  $.unblockUI();
	      alert('Unable to generate excel..');
	  }else{
		$.unblockUI();
	     location.href = '../temporary/'+data;
	  }
    });
  }
	function exportRejectedResultInexcel() {
    $.blockUI();
    $.post("vlRejectedResultExportInExcel.php",{Sample_Test_Date:$("#rjtSampleTestDate").val(),Batch_Code:$("#rjtBatchCode  option:selected").text(),Sample_Type:$("#rjtSampleType  option:selected").text(),Facility_Name:$("#rjtFacilityName  option:selected").text(),Gender:$("#rjtGender  option:selected").text(),Pregnant:$("#rjtPatientPregnant  option:selected").text(),Breastfeeding:$("#rjtPatientBreastfeeding  option:selected").text()},
    function(data){
	  if(data == "" || data == null || data == undefined){
	  $.unblockUI();
	      alert('Unable to generate excel..');
	  }else{
		$.unblockUI();
	     location.href = '../temporary/'+data;
	  }
    });
  }
	function exportNotAvailableResultInexcel() {
    $.blockUI();
    $.post("vlNotAvailableResultExportInExcel.php",{Sample_Test_Date:$("#noResultSampleTestDate").val(),Batch_Code:$("#noResultBatchCode  option:selected").text(),Sample_Type:$("#noResultSampleType  option:selected").text(),Facility_Name:$("#noResultFacilityName  option:selected").text(),Gender:$("#noResultGender  option:selected").text(),Pregnant:$("#noResultPatientPregnant  option:selected").text(),Breastfeeding:$("#noResultPatientBreastfeeding  option:selected").text()},
    function(data){
	  if(data == "" || data == null || data == undefined){
	  $.unblockUI();
	      alert('Unable to generate excel..');
	  }else{
		$.unblockUI();
	     location.href = '../temporary/'+data;
	  }
    });
	}
	function exportDataQualityInexcel() {
    $.blockUI();
    $.post("vlDataQualityExportInExcel.php",{Sample_Collection_Date:$("#sampleCollectionDate").val(),Field_Name:$("#formField  option:selected").text()},
    function(data){
	  if(data == "" || data == null || data == undefined){
	  $.unblockUI();
	      alert('Unable to generate excel..');
	  }else{
		$.unblockUI();
	     location.href = '../temporary/'+data;
	  }
    });
	}

	function hideFemaleDetails(value,pregnant,breastFeeding)
	{
		if(value=='female'){
			$("#"+pregnant).attr("disabled",false);
			$("#"+breastFeeding).attr("disabled",false);
		}else{
			$('select#'+pregnant+' option').removeAttr("selected");
			$('select#'+breastFeeding+' option').removeAttr("selected");
			$("#"+pregnant).attr("disabled",true);
			$("#"+breastFeeding).attr("disabled",true);
		}
	}

function exportAllExcelHigh(){
	$("#highViralLoadReportTable").table2excel({
		exclude: ".noExl",
		name: "High Viral Load",
		filename: "High Viral Load Export",
		fileext: ".xls",
		exclude_img: true,
		exclude_links: true,
		exclude_inputs: true

	});
}
function exportAllExcelRejection(){
	$("#sampleRjtReportTable").table2excel({
		exclude: ".noExl",
		name: "Sample Rejection Report",
		filename: "Sample Rejection Report Export",
		fileext: ".xls",
		exclude_img: true,
		exclude_links: true,
		exclude_inputs: true

	});
}

function exportAllExcelNotAvailable(){
	$("#notAvailReportTable").table2excel({
		exclude: ".noExl",
		name: "Results Not Available Report",
		filename: "Sample Not Available Report Export",
		fileext: ".xls",
		exclude_img: true,
		exclude_links: true,
		exclude_inputs: true

	});
}
function exportAllExcelIncomplete(){
	$("#incompleteReportTable").table2excel({
		exclude: ".noExl",
		name: "Data Quality Check Report",
		filename: "VL Data Quality Report",
		fileext: ".xls",
		exclude_img: true,
		exclude_links: true,
		exclude_inputs: true

	});
}
</script>
 <?php
 include('../footer.php');
 ?>
