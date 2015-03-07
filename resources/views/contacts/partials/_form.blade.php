
		{{--<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="form_layouts.html">UI Components</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Form Layouts
				</li>
			</ul>--}}
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			{{--<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_0" data-toggle="tab">
								Form Actions </a>
							</li>
							<li>
								<a href="#tab_1" data-toggle="tab">
								2 Cols </a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
								2 Cols Horizontal </a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
								2 Cols View Only </a>
							</li>
							<li>
								<a href="#tab_4" data-toggle="tab">
								Row Seperated </a>
							</li>
							<li>
								<a href="#tab_5" data-toggle="tab">
								Bordered </a>
							</li>
							<li>
								<a href="#tab_6" data-toggle="tab">
								Row Stripped </a>
							</li>
							<li>
								<a href="#tab_7" data-toggle="tab">
								Label Stripped </a>
							</li>
						</ul>--}}
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Actions On Bottom
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->

										{{--<form action="javascript:;" class="form-horizontal">--}}
										{{--{!! Form::model(new App\Contact, ['route' => ['contacts.store']]) !!}--}}
										<div class="form-group">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">

                                                 {!! Form::label('subject', 'Subject:') !!}
                                                 {!! Form::text('subject') !!}
                                                 </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
 {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-9">
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email') !!}
</div>

</div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-9">
<div class="form-group">
    {!! Form::label('feedback', 'Feedback:') !!}
    {!! Form::textarea('Feedback') !!}
</div>



</div>
</div>
</div>
						<div class="form-action">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">Submit</button>
														<button type="button" class="btn btn-circle default">Cancel</button>
													</div>
												</div>
											</div>
										{{--</form>--}}
										{!! Form::close() !!}
										<!-- END FORM-->
									</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>



