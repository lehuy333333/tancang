@extends('admin.templates.master')

@section('title')
    <h3>Services Managerment</h3>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Service List</h2>
                <div class="card-tools">
                    <button class="btn btn-success add_button" data-toggle="modal" data-target="#ServiceModal"><i
                            class="fas fa-plus-square"></i> New
                        Service</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered">
                    <tr class="bg-blue text-center">
                        <th width="50px">No</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Homepage</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($services as $key => $service)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="d-none">{{ $service->id }}</td>
                            <td class="text-center">
                                {{ $service->name }}
                            </td>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $service->icon) }}" width="50" height="50">
                            </td>
                            <td class="text-center">
                                @if ($service->homepage_actived)
                                    <i class="fas fa-check"></i>
                                @endif
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
                {{-- {!! $services->render() !!} --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <div class="float-right">
                    {!! $services->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal UpadateOrCreate Role -->

    <div class="modal fade" id="ServiceModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form method="POST" action="{{ url('admin/service/post') }}" id="ServiceForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-title">Add New Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="service_name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('service_name') is-invalid @enderror"
                                    id="service_name" name="service_name" placeholder="Enter Name" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="service_icon" class="col-sm-2 control-label ">Icon</label>
                            <div class="col-sm-12">
                                <input type="file" id="service_icon" name="service_icon" accept="image/*"
                                    placeholder="Upload icon" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cover_image" class="col-sm-2 control-label ">Cover Image</label>
                            <div class="col-sm-12">
                                <input type="file" id="cover_image" name="cover_image" accept="image/*"
                                    placeholder="Upload image" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="service_description" class="col-sm-2 control-label ">Description</label>
                            <div class="col-sm-12">
                                <textarea class="tinymce" name="service_description" id="service_description"
                                    class="form-control @error('service_name') is-invalid @enderror"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="homepage_actived"
                                        name="homepage_actived">
                                    <label for="homepage_actived" class="col-sm-2 control-label">
                                        Homepage Actived
                                    </label>
                                </div>
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
                var service_id = $(this).closest("tr").find("td:eq(1)").html();
                $("#modal-title").text("Update Service");
                $.ajax({
                    url: "{{ url('admin/service/getjson') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": service_id
                    },
                    success: function(data) {
                        $("#id").val(data.id);
                        $("#service_name").val(data.name);

                        tinyMCE.activeEditor.setContent(data.description);

                        if (data.homepage_actived == 1) {
                            $("#homepage_actived").prop("checked", true);
                        } else {
                            $("#homepage_actived").prop("checked", false);
                        }

                        $("#ServiceModal").modal('toggle');
                    },
                });
            });

            $('.add_button').click(function() {
                $("#ServiceForm").trigger('reset');
                $("#modal-title").text("Add New Service");
            });
        });
    </script>
@endsection
