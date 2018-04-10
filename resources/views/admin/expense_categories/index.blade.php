<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Admin</title>

        @include('layouts.css')
        @include('layouts.js')
    </head>

    <body>
        <div id="wrapper" class="Index">
            @include('layouts.navbar')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
				<h2>Expense Categories</h2>
				<a href="#" class="btn btn-success">Add new</a>
				<hr/>
				<!-- here we write some code -->

				<div class="panel panel-default">
					<div class="panel-heading">
						List
					</div>
					<div class="panel-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									{{--@can('expense_category_delete')
										<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
									@endcan--}}

									<th>Name</th>

								</tr>
							</thead>
							<tbody><td colspan="7">No entries in table</td></tbody>
							{{-- <tbody>
								@if (count($expense_categories) > 0)
									@foreach ($expense_categories as $expense_category)
										<tr data-entry-id="{{ $expense_category->id }}">
											@can('expense_category_delete')
												<td></td>
											@endcan

											<td field-key='name'>{{ $expense_category->name }}</td>
											<td>
												@can('expense_category_view')
												<a href="#" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
												@endcan
												@can('expense_category_edit')
												<a href="#" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
												@endcan
												@can('expense_category_delete')
												{!! Form::open(array(
													'style' => 'display: inline-block;',
													'method' => 'DELETE',
													'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
													'route' => ['admin.expense_categories.destroy', $expense_category->id])) !!}
												{!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
												{!! Form::close() !!}
												@endcan
											</td>

										</tr>
									@endforeach
								@else
									<tr>
										<td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
									</tr>
								@endif
							</tbody> --}}
						</table>
					</div>
				</div>
            </div>
        </div>

        @include('layouts.footer')
    </body>
</html>

<!-- <script>
	$(document).ready(function () {
	    $("#myInput").on("keyup", function () {
	        var value = $(this).val().toLowerCase();
	        $("#myTable tr").filter(function () {
	            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	        });
	    });
	});
</script> -->