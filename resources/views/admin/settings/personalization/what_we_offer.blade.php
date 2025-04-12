<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/what_we_offer" method="post">
                {{ csrf_field() }}



                <!-- Card 1 -->
                <div class="form-group">
                    <label>Card 1 Title</label>
                    <input type="text" name="card_1_title"
                        value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_1_title']) ? $what_we_offer['card_1_title'] : old('card_1_title') }}"
                        class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Card 1 Description</label>
                    <textarea name="card_1_description" rows="5" class="form-control" required>{{ !empty($what_we_offer) && !empty($what_we_offer['card_1_description']) ? $what_we_offer['card_1_description'] : old('card_1_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="input-label">Card 1 Icon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="card_1_icon"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="card_1_icon" id="card_1_icon" required
                            value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_1_icon']) ? $what_we_offer['card_1_icon'] : old('card_1_icon') }}"
                            class="form-control" />
                    </div>
                </div>

                <hr>

                <!-- Card 2 -->
                <div class="form-group">
                    <label>Card 2 Title</label>
                    <input type="text" name="card_2_title"
                        value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_2_title']) ? $what_we_offer['card_2_title'] : old('card_2_title') }}"
                        class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Card 2 Description</label>
                    <textarea name="card_2_description" rows="5" class="form-control" required>{{ !empty($what_we_offer) && !empty($what_we_offer['card_2_description']) ? $what_we_offer['card_2_description'] : old('card_2_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="input-label">Card 2 Icon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="card_2_icon"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="card_2_icon" id="card_2_icon" required
                            value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_2_icon']) ? $what_we_offer['card_2_icon'] : old('card_2_icon') }}"
                            class="form-control" />
                    </div>
                </div>

                <hr>

                <!-- Card 3 -->
                <div class="form-group">
                    <label>Card 3 Title</label>
                    <input type="text" name="card_3_title"
                        value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_3_title']) ? $what_we_offer['card_3_title'] : old('card_3_title') }}"
                        class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Card 3 Description</label>
                    <textarea name="card_3_description" rows="5" class="form-control" required>{{ !empty($what_we_offer) && !empty($what_we_offer['card_3_description']) ? $what_we_offer['card_3_description'] : old('card_3_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="input-label">Card 3 Icon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="card_3_icon"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="card_3_icon" id="card_3_icon" required
                            value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_3_icon']) ? $what_we_offer['card_3_icon'] : old('card_3_icon') }}"
                            class="form-control" />
                    </div>
                </div>

                <hr>

                <!-- Card 4 -->
                <div class="form-group">
                    <label>Card 4 Title</label>
                    <input type="text" name="card_4_title"
                        value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_4_title']) ? $what_we_offer['card_4_title'] : old('card_4_title') }}"
                        class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Card 4 Description</label>
                    <textarea name="card_4_description" rows="5" class="form-control" required>{{ !empty($what_we_offer) && !empty($what_we_offer['card_4_description']) ? $what_we_offer['card_4_description'] : old('card_4_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="input-label">Card 4 Icon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text admin-file-manager" data-input="card_4_icon"
                                data-preview="holder">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                        </div>
                        <input type="text" name="card_4_icon" id="card_4_icon" required
                            value="{{ !empty($what_we_offer) && !empty($what_we_offer['card_4_icon']) ? $what_we_offer['card_4_icon'] : old('card_4_icon') }}"
                            class="form-control" />
                    </div>
                </div>




                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
    </div>
</div>
