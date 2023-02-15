@extends('admin.templates.master')

@section('title')
    <h3>Blog Managerment</h3>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Blog List</h2>
                <div class="card-tools">
                    <button class="btn btn-success add_button" data-toggle="modal" data-target="#BlogModal"><i
                            class="fas fa-plus-square"></i> New
                        Blog</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered">
                    <tr class="bg-blue text-center">
                        <th width="50px">No</th>
                        <th>Title</th>
                        <th>Cover Image</th>
                        <th>Author</th>
                        <th>Type</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($blogs as $key => $blog)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="d-none">{{ $blog->id }}</td>
                            <td class="text-center">
                                {{ $blog->title }}
                            </td>
                            <td class="text-center">
                                <img src="{{asset('storage/'.$blog->cover_image)}}" width="50" height="50">
                            </td>
                            <td class="text-center">
                                {{ $blog->user->name }}
                            </td>
                            <td class="text-center">
                                {{ $blog->type->name }}
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
                {{-- {!! $blogs->render() !!} --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <div class="float-right">
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal UpadateOrCreate Role -->

    <div class="modal fade" id="BlogModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form method="POST" action="{{ url('admin/blog/post') }}" id="BlogForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-title">Add New Blog</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="blog_title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('blog_title') is-invalid @enderror"
                                    id="blog_title" name="blog_title" placeholder="Enter Title" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cover_image" class="col-sm-2 control-label ">Cover Image</label>
                            <div class="col-sm-12">
                                <input type="file" id="cover_image" name="cover_image" accept="image/*"
                                    placeholder="Upload Cover Image" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type_id" class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-12">
                                <select class="form-control @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                                    <option style="background-color: aquamarine">Default select</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="blog_content" class="col-sm-2 control-label ">Content</label>
                            <div class="col-sm-12">
                                <textarea class="tinymce" name="blog_content" id="blog_content" class="form-control @error('blog_content') is-invalid @enderror"></textarea>
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
                var blog_id = $(this).closest("tr").find("td:eq(1)").html();
                $("#modal-title").text("Update Blog");
                $.ajax({
                    url: "{{ url('admin/blog/getjson') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": blog_id
                    },
                    success: function(data) {
                        $("#id").val(data.id);
                        $("#blog_title").val(data.title);
                        $("#type_id").val(data.type_id);

                        tinyMCE.activeEditor.setContent(data.content);
                        
                        $("#BlogModal").modal('toggle');
                    },
                });
            });

            $('.add_button').click(function() {
                $("#BlogForm").trigger('reset');
                $("#modal-title").text("Add New Blog");
            });
        });
    </script>
@endsection
