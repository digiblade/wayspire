@extends('admin.layouts.app')

@push('libraries_top')
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ getAdminPanelUrl() }}">{{ trans('admin/main.dashboard') }}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle }}</div>
            </div>
        </div>

        <div class="section-body">

            {{-- <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="input-label">{{trans('admin/main.search')}}</label>
                                    <input name="full_name" type="text" class="form-control" value="{{ request()->get('full_name') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.role') }}</label>
                                    <select name="role_id" class="form-control">
                                        <option value="">{{ trans('public.all') }}</option>
                                        @foreach ($staffsRoles as $role)
                                            <option value="{{ $role->id }}" @if (!empty(request()->get('role_id')) and request()->get('role_id') == $role->id) selected @endif>{{ $role->caption }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="input-label mb-4"> </label>
                                    <input type="submit" class="text-center btn btn-primary w-100" value="{{trans('admin/main.show_results')}}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section> --}}

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tr>
                                        <th>Id</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Email</th>
                                        <th class="text-left">Mobile</th>
                                        <th class="text-left">Resume</th>
                                    </tr>

                                    @foreach ($applications as $application)
                                        <tr>
                                            <td class="text-left">
                                                {{ $application->id }}
                                            </td>
                                            <td class="text-left">
                                                {{ $application->name }}
                                            </td>
                                            {{-- <td class="text-left">
                                                <div class="d-flex align-items-center">
                                                    <figure class="avatar mr-2">
                                                        <img src="{{ $user->getAvatar() }}" alt="{{ $user->full_name }}">
                                                    </figure>
                                                    <div class="media-body ml-1">
                                                        <div class="mt-0 mb-1 font-weight-bold">
                                                            {{ $user->full_name }}
                                                        </div>

                                                        @if ($user->mobile)
                                                            <div class="text-primary text-small font-600-bold">
                                                                {{ $user->mobile }}</div>
                                                        @endif

                                                        @if ($user->email)
                                                            <div class="text-primary text-small font-600-bold">
                                                                {{ $user->email }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td> --}}

                                            <td class="text-left">
                                                {{ $application->email }}
                                            </td>
                                            {{-- <td class="text-left"> --}}
                                            {{-- {{ dateTimeFormat($user->created_at, 'j M Y | H:i') }} --}}
                                            {{-- {!! htmlspecialchars_decode($user->description) !!} --}}
                                            {{-- </td> --}}

                                            <td class="text-left">
                                                {{ $application->mobile }}

                                            </td>
                                            <td class="text-center mb-2" width="120">

                                                <a href="/store/{{ $application->resume }}" download
                                                    class="btn-transparent  text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="download">
                                                    <i class="fa fa-download"></i>
                                                </a>


                                                {{-- @can('admin_users_delete')
                                                    @include('admin.includes.delete_button', [
                                                        'url' =>
                                                            getAdminPanelUrl() . '/users/' . $user->id . '/delete',
                                                        'btnClass' => '',
                                                        'deleteConfirmMsg' => trans(
                                                            'update.user_delete_confirm_msg'),
                                                    ])
                                                @endcan --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        {{-- <div class="card-footer text-center">
                            {{ $users->appends(request()->input())->links() }}
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')
@endpush
