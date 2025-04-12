<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/collaborations" method="post">
                {{ csrf_field() }}



                <!-- Card 1 -->
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="logo_name"
                        value="{{ !empty($what_we_offer) && !empty($what_we_offer['logo_name']) ? $what_we_offer['logo_name'] : old('logo_name') }}"
                        class="form-control" required />
                </div>



                <div class="form-group">
                    <label class="input-label">Icon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="logo_image"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="logo_image" id="logo_image" required
                            value="{{ !empty($what_we_offer) && !empty($what_we_offer['logo_image']) ? $what_we_offer['logo_image'] : old('logo_image') }}"
                            class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label>Row Index</label>
                    <select name="row_index" class="form-control" required>
                        <option value="1" {{ old('row_index', '') == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('row_index', '') == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('row_index', '') == 3 ? 'selected' : '' }}>3</option>
                    </select>
                </div>

                <hr>

                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Logo Name</th>
                    <th>Row Index</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($collaborations as $collaboration)
                    <tr>
                        <td>
                            @if ($collaboration->logo_image)
                                <img src="{{ asset($collaboration->logo_image) }}" alt="Logo"
                                    style="width: 80px; height: auto;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $collaboration->logo_name }}</td>
                        <td>{{ $collaboration->row_index }}</td>
                        <td>
                            <a href="{{ getAdminPanelUrl() }}/settings/personalization/collaborations/{{ $collaboration->id}}/edit"
                                class="btn btn-sm btn-primary" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ getAdminPanelUrl() }}/settings/personalization/collaborations/{{ $collaboration->id}}/delete"
                                class="btn btn-sm btn-danger" title="Delete"
                                onclick="return confirm('Are you sure you want to delete this collaboration?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No collaborations found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
