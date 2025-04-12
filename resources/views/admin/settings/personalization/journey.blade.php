<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/journey" method="post">
                {{ csrf_field() }}
          


                <div class="form-group">
                    <label>{{ trans('admin/main.title') }}</label>
                    <input type="text" name="title"
                        value="{{ (!empty($journey) and !empty($journey['title'])) ? $journey['title'] : old('title') }}"
                        class="form-control " required />
                </div>

                <div class="form-group">
                    <label>{{ trans('public.description') }}</label>
                    <textarea type="text" name="description" rows="5" class="form-control " required>{{ (!empty($journey) and !empty($journey['description'])) ? $journey['description'] : old('description') }}</textarea>
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
                            value="{{ (!empty($journey) and !empty($journey['banner_image'])) ? $journey['banner_image'] : old('banner_image') }}"
                            class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-label">Timeline Image</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="timeline_image"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="timeline_image" id="timeline_image" required
                            value="{{ (!empty($journey) and !empty($journey['timeline_image'])) ? $journey['timeline_image'] : old('timeline_image') }}"
                            class="form-control" />
                    </div>
                </div>



                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
    </div>
</div>
