<div data-ng-controller="ReportesController">
	<div class="row">
		<div class="col-lg-6">
			Fecha inicio: 
			<div class="row">
		        <div class="col-md-6">
		            <p class="input-group">
		              <input type="text" class="form-control" datepicker-popup="yyyy-MM-dd" data-ng-model="dt" is-open="opened" min-date="minDate" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" data-ng-required="true" close-text="Close" />
		              <span class="input-group-btn">
		                <button type="button" class="btn btn-default" data-ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
		              </span>
		            </p>
		        </div>
		    </div>
		</div>
		<div class="col-lg-6">Fecha fin: </div>
	</div>
	<div class="row">
		<div class="col-lg-12 text-center">
			<button class="btn btn-success">Generar</button>
		</div>
	</div>
</div>