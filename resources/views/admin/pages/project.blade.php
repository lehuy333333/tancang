@extends('admin.templates.master')

@section('title')
    <h3>Projects Managerment</h3>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Project List</h2>
                <div class="card-tools">
                    <button class="btn btn-success add_button" data-toggle="modal" data-target="#ProjectModal"><i
                            class="fas fa-plus-square"></i> New
                        Project</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered">
                    <tr class="bg-blue text-center">
                        <th width="50px">No</th>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Cover Image</th>
                        <th>Homepage</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($projects as $key => $project)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="d-none">{{ $project->id }}</td>
                            <td class="text-center">
                                {{ $project->name }}
                            </td>
                            <td class="text-center">
                                {{ $project->service->name }}
                            </td>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $project->cover_image) }}" width="50" height="50">
                            </td>
                            <td class="text-center">
                                @if ($project->homepage_actived)
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
                {{-- {!! $projects->render() !!} --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <div class="float-right">
                    {!! $projects->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal UpadateOrCreate Role -->

    <div class="modal fade" id="ProjectModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form method="POST" action="{{ url('admin/project/post') }}" id="ProjectForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-title">Add New Project</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="project_name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('project_name') is-invalid @enderror"
                                    id="project_name" name="project_name" placeholder="Enter Name" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-2 control-label">Client</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('client') is-invalid @enderror"
                                    id="client" name="client" placeholder="Enter Client" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_website" class="col-sm-2 control-label">Client Website</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('client_website') is-invalid @enderror"
                                    id="client_website" name="client_website" placeholder="Enter Client Website"
                                    value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="finish_date" class="col-sm-2 control-label">Finish Date</label>
                            <div class="col-sm-12">
                                <input type="date" @error('finish_date') is-invalid @enderror" id="finish_date"
                                    name="finish_date" placeholder="Enter Finish Date" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project_image" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-12">
                                <input type="file" id="project_image" name="project_image" accept="image/*"
                                    placeholder="Upload icon" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="service_id" class="col-sm-2 control-label">Service</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="service_id" id="service_id">
                                    <option style="background-color: aquamarine">Default select</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="short_description" class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-12">
                                <input type="text"
                                    class="form-control @error('short_description') is-invalid @enderror"
                                    id="short_description" name="short_description" placeholder="Enter Short Description"
                                    value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project_description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-12">
                                <textarea class="tinymce" name="project_description" id="project_description"></textarea>
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
                var project_id = $(this).closest("tr").find("td:eq(1)").html();
                $("#modal-title").text("Update Project");
                $.ajax({
                    url: "{{ url('admin/project/getjson') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": project_id
                    },
                    success: function(data) {
                        $("#id").val(data.id);
                        $("#project_name").val(data.name);
                        $("#client").val(data.client);
                        $("#client_website").val(data.client_website);
                        $("#finish_date").val(data.finish_date);
                        $("#short_description").val(data.short_description);

                        tinyMCE.activeEditor.setContent(data.description);

                        $("#service_id").val(data.service_id);
                        if (data.homepage_actived == 1) {
                            $("#homepage_actived").prop("checked", true);
                        } else {
                            $("#homepage_actived").prop("checked", false);
                        }


                        $("#ProjectModal").modal('toggle');
                    },
                });
            });

            $('.add_button').click(function() {
                $("#ProjectForm").trigger('reset');
                $("#modal-title").text("Add New Project");
            });
        });
    </script>
@endsection
