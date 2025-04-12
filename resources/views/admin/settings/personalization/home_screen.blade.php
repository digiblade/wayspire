<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/home_screen" method="post">
                {{ csrf_field() }}
          


                <div class="form-group">
                    <label>Top nav marque</label>
                    <input type="text" name="top_nav"
                        value="{{ (!empty($home_screen) and !empty($home_screen['top_nav'])) ? $home_screen['top_nav'] : old('top_nav') }}"
                        class="form-control " required />
                </div>

                <div class="form-group">
                    <label>`What we done` section description</label>
                    <textarea type="text" name="what_we_done_desc" rows="5" class="form-control " required>{{ (!empty($home_screen) and !empty($home_screen['what_we_done_desc'])) ? $home_screen['what_we_done_desc'] : old('what_we_done_desc') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Footer description</label>
                    <textarea type="text" name="footer_description" rows="5" class="form-control " required>{{ (!empty($home_screen) and !empty($home_screen['footer_description'])) ? $home_screen['footer_description'] : old('footer_description') }}</textarea>
                </div>
                

                <div class="form-group">
                    <label class="input-label">Upscale section banner</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="upscale_banner"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="upscale_banner" id="upscale_banner" required
                            value="{{ (!empty($home_screen) and !empty($home_screen['upscale_banner'])) ? $home_screen['upscale_banner'] : old('upscale_banner') }}"
                            class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-label">Timeline Image</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="faq_banner"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="faq_banner" id="faq_banner" required
                            value="{{ (!empty($home_screen) and !empty($home_screen['faq_banner'])) ? $home_screen['faq_banner'] : old('faq_banner') }}"
                            class="form-control" />
                    </div>
                </div>



                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
    </div>
</div>
