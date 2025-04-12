<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/about_us" method="post">
                {{ csrf_field() }}
          


                <div class="form-group">
                    <label>{{ trans('admin/main.title') }}</label>
                    <input type="text" name="title"
                        value="{{ (!empty($steps) and !empty($steps['title'])) ? $steps['title'] : old('title') }}"
                        class="form-control " required />
                </div>

                <div class="form-group">
                    <label>{{ trans('public.description') }}</label>
                    <textarea type="text" name="description" rows="5" class="form-control " required>{{ (!empty($steps) and !empty($steps['description'])) ? $steps['description'] : old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Section 1 Title</label>
                    <input type="text" name="section_1_title" rows="5" class="form-control " required value="{{ (!empty($steps) and !empty($steps['section_1_title'])) ? $steps['section_1_title'] : old(key: 'section_1_title') }}"/>
                </div>
                <div class="form-group">
                    <label>Section 1 Title</label>
                    <textarea type="text" name="section_1_description" rows="5" class="form-control " required>{{ (!empty($steps) and !empty($steps['section_1_description'])) ? $steps['section_1_description'] : old(key: 'section_1_description') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Section 2 Title</label>
                    <input type="text" name="section_2_title" rows="5" class="form-control " required value="{{ (!empty($steps) and !empty($steps['section_2_title'])) ? $steps['section_2_title'] : old(key: 'section_2_title') }}"/>
                </div>
                <div class="form-group">
                    <label>Section 2 Title</label>
                    <textarea type="text" name="section_2_description" rows="5" class="form-control " required>{{ (!empty($steps) and !empty($steps['section_2_description'])) ? $steps['section_2_description'] : old(key: 'section_2_description') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Section 3 Title</label>
                    <input type="text" name="section_3_title" rows="5" class="form-control " required value="{{ (!empty($steps) and !empty($steps['section_3_title'])) ? $steps['section_3_title'] : old(key: 'section_3_title') }}"/>
                </div>
                <div class="form-group">
                    <label>Section 3 Title</label>
                    <textarea type="text" name="section_3_description" rows="5" class="form-control " required>{{ (!empty($steps) and !empty($steps['section_3_description'])) ? $steps['section_3_description'] : old(key: 'section_3_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="input-label">Banner Image</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="banner_image"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="banner_image" id="banner_image" required
                            value="{{ (!empty($steps) and !empty($steps['banner_image'])) ? $steps['banner_image'] : old('banner_image') }}"
                            class="form-control" />
                    </div>
                </div>



                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
    </div>
</div>
