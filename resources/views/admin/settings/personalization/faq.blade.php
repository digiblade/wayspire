<div class=" mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ getAdminPanelUrl() }}/settings/personalization/faq" method="post">
                {{ csrf_field() }}



                <!-- Card 1 -->
                <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="question" value="{{ old('logo_name') }}" class="form-control" required />
                </div>



                <div class="form-group">
                    <label>Answer</label>
                    <textarea type="text" name="answer" rows="5" class="form-control " required> {{ old(key: 'answer') }}</textarea>
                </div>


                <hr>

                <button type="submit" class="btn btn-success">{{ trans('admin/main.save_change') }}</button>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($faqs as $faq)
                    <tr>

                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td>

                            <a href="{{ getAdminPanelUrl() }}/settings/personalization/faq/{{ $faq->id }}/delete"
                                class="btn btn-sm btn-danger" title="Delete"
                                onclick="return confirm('Are you sure you want to delete this question?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No FAQ found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
