@extends('admin.templates.master')

@section('title')
    <h3>Blog Type Managerment</h3>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Blog Type List</h2>
                <div class="card-tools">
                    <button class="btn btn-success add_button" data-toggle="modal" data-target="#TypeModal"><i
                            class="fas fa-plus-square"></i> New
                        Type</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered">
                    <tr class="bg-blue text-center">
                        <th width="50px">No</th>
                        <th>Name</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($types as $key => $blog_type)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="d-none">{{ $blog_type->id }}</td>
                            <td class="text-center">
                                {{ $blog_type->name }}
                            </td>
                            <td class="text-center">
                                @can('role-edit')
                                    <a class="btn btn-sm btn-primary update_button" href="#">Edit</a>
                                @endcan
                                @can('role-delete')
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <div class="float-right">
                    {!! $types->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal UpadateOrCreate Role -->

    <div class="modal fade" id="TypeModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form method="POST" action="{{ url('admin/blog_type/post') }}" id="TypeForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-title">Add New Type</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="type_name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('type_name') is-invalid @enderror"
                                    id="type_name" name="type_name" placeholder="Enter Title" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="savedata">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script type="text/javascript">
        $(function() {
            $('.update_button').click(function() {
                var blog_type_id = $(this).closest("tr").find("td:eq(1)").html();
                $("#modal-title").text("Update Type");
                $.ajax({
                    url: "{{ url('admin/blog_type/getjson') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": blog_type_id,
                    },
                    success: function(data) {
                        $("#id").val(data.id);
                        $("#type_name").val(data.name);
                        $("#TypeModal").modal('toggle');
                    },
                });
            });

            $('.add_button').click(function() {
                $("#TypeForm").trigger('reset');
                $("#modal-title").text("Add New Type");
            });
        });
    </script>
@endsection
