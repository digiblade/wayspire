<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/collaborations/{{$collaboration->id}}" method="post">
                {{ csrf_field() }}



                <!-- Card 1 -->
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="logo_name"
                        value="{{ !empty($collaboration) && !empty($collaboration['logo_name']) ? $collaboration['logo_name'] : old('logo_name') }}"
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
                            value="{{ !empty($collaboration) && !empty($collaboration['logo_image']) ? $collaboration['logo_image'] : old('logo_image') }}"
                            class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label>Row Index</label>
                    <select name="row_index" class="form-control" required>
                        <option value="1" {{ old('row_index', $collaboration->row_index ?? '') == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('row_index', $collaboration->row_index ?? '') == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('row_index', $collaboration->row_index ?? '') == 3 ? 'selected' : '' }}>3</option>
                    </select>
                </div>

                <hr>

                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
        

    </div>
</div>
