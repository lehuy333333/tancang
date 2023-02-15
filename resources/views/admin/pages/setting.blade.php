@extends('admin.templates.master')

@section('title')
    <h3>Setting Managerment</h3>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Setting List</h2>
                <div class="card-tools">
                    {{-- <button class="btn btn-success" data-toggle="modal" data-target="#BlogModal"><i
                            class="fas fa-plus-square"></i> New
                        Blog</button> --}}
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered">
                    <tr class="bg-blue text-center">
                        <th width="50px">No</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($settings as $key => $setting)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="d-none">{{ $setting->id }}</td>
                            <td class="text-center">
                                {{ $setting->key }}
                            </td>
                            <td class="text-center">
                                @if ($setting->is_image)
                                <img src="{{asset('storage/'.$setting->value)}}" width="50" height="50">
                                @else
                                {{ $setting->value }}
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
                {{-- {!! $settings->render() !!} --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <div class="float-right">
                    {!! $settings->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal UpadateOrCreate Role -->

    <div class="modal fade" id="SettingModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form method="POST" action="{{ url('admin/setting/post') }}" id="SettingForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Update Setting</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="is_image" id="is_image" value="">
                        <div class="form-group">
                            <label for="setting_key" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('blog_title') is-invalid @enderror"
                                    id="setting_key" name="setting_key" value="" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="setting_value" class="col-sm-2 control-label ">value</label>
                            <div class="col-sm-12" id="content">

                                {{-- <input type="file" id="setting_image" name="setting_value" accept="image/*"
                                    placeholder="Upload icon" value="">
                                <input type="text" class="form-control @error('blog_title') is-invalid @enderror"
                                    id="setting_value" name="setting_value" value="" > --}}

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
                var setting_id = $(this).closest("tr").find("td:eq(1)").html();
                $.ajax({
                    url: "{{ url('admin/setting/getjson') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": setting_id
                    },
                    success: function(data) {
                        $("#id").val(data.id);
                        $("#is_image").val(data.is_image);

                        var imgtxt = "<input type='file' id='setting_image' name='setting_value' accept='image/*' placeholder='Upload icon' value=''>";
                        var txt = '<input type="text" class="form-control" id="setting_value" name="setting_value" value="" >';
                        $("#content").empty();
                        if (data.is_image) {
                            $("#content").append(imgtxt);
                        } else {
                            $("#content").append(txt);
                        }
                        
                        $("#setting_key").val(data.key);
                        $("#setting_value").val(data.value);

                        $("#SettingModal").modal('toggle');
                    },
                });
            })
        });
    </script>
@endsection
