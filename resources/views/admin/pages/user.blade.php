@extends('admin.templates.master')

@section('title')
    <h3>Users Managerment</h3>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">User List</h2>
                <div class="card-tools">
                    @can('user-create')
                        <button class="btn btn-success" data-toggle="modal" data-target="#PermissionModal"><i
                                class="fas fa-plus-square"></i> New
                            User</button>
                    @endcan
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered">
                    <tr class="bg-blue text-center">
                        <th width="50px">No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center">
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td class="text-center">
                                @can('user-edit')
                                    <a class="btn btn-sm btn-primary" href="#">Edit</a>
                                @endcan
                                @can('user-delete')
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {!! $users->links() !!}
            </div>
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal UpadateOrCreate User -->

    <div class="modal fade" id="PermissionModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form method="POST" action="" id="permissionForm">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add New User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="_method" id="permission_method" value="POST">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter Name" value="" required>
                                @error('name')
                                    <p class="mt-2 mb-0 error text-danger">{{ $message }}</p>
                                @enderror
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
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $('.delete_confirm').click(function(event) {

            });
        });
    </script>
@endsection
