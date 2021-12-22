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
						<a href="{{route('jobs.create')}}" class="btn btn-primary btn-lg mb-2 mt-4 float-end">Add</a>
						<!--begin::Table-->
						<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
							<!--begin::Head-->
							<thead class="fs-7 text-gray-400 text-uppercase">
								<tr>
									<th class="min-w-40px">Job Code</th>
									<th class="min-w-250px">Subject</th>
									<th class="min-w-100px">Type</th>
									<th class="min-w-80px">Date</th>
									<th class="min-w-60px">Action</th>

								</tr>
							</thead>
							<!--end::Head-->
							<!--begin::Body-->
							<tbody class="fs-6">
								@foreach($jobs as $j)
								<tr>
									<td>{{$j->id}}</td>
									<td>{{$j->SC}}</td>
									<td>{{$j->session_type}}</td>
									<td>{{$j->created_at}}</td>
									<td>
										<a href="#" class="btn btn-light btn-sm">View</a>
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
		<div class="d-flex flex-stack flex-wrap pt-10">
			<div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
			<!--begin::Pages-->
			<ul class="pagination">
				<li class="page-item previous">
					<a href="#" class="page-link">
						<i class="previous"></i>
					</a>
				</li>
				<li class="page-item active">
					<a href="#" class="page-link">1</a>
				</li>
				<li class="page-item">
					<a href="#" class="page-link">2</a>
				</li>
				<li class="page-item next">
					<a href="#" class="page-link">
						<i class="next"></i>
					</a>
				</li>
			</ul>
			<!--end::Pages-->
		</div>
		<!--end::Tab pane-->
	</div>
	<!--end::Tab Content-->
</div>
<!--end::Container-->
@endsection