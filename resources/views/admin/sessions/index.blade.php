@extends('layouts.app')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Tab pane-->
		<!--end::Tab pane-->
		<!--begin::Tab pane-->
		<div>
			<!--begin::Card-->
			<div class="card card-flush">
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table container-->
					<div class="table-responsive">
						<a href="{{route('sessions.create')}}" class="btn btn-primary btn-lg mb-2 mt-4 float-end">Add</a>
						<!--begin::Table-->
						<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
							<!--begin::Head-->
							<thead class="fs-7 text-gray-400 text-uppercase">
								<tr>
									<th class="min-w-80px">Type</th>
									<th class="min-w-100px">Price</th>
									<th class="float-end">Action</th>

								</tr>
							</thead>
							<!--end::Head-->
							<!--begin::Body-->
							<tbody class="fs-6">
								@foreach($session as $s)
								<tr>
									<td>{{$s->type}}</td>
									<td>R{{$s->price}}</td>
									<td>
										<a href="#" class="btn btn-light btn-sm float-end">View</a>
									</td>
								</tr>
                                @endforeach
								
							</tbody>
							<!--end::Body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
	
	</div>
	<!--end::Tab Content-->
</div>
<!--end::Container-->
@endsection