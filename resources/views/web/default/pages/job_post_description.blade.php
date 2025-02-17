@extends(getTemplate() . '.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
@endpush

@section('content')
    <section class="site-top-banner search-top-banner opacity-04 position-relative">
        <img src="{{ getPageBackgroundSettings('categories') }}" class="img-cover" alt="" />

        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-12 col-md-9 col-lg-7">
                    <div class="top-search-categories-form">
                        <h1 class="text-white font-30 mb-15">{{ $pageTitle }}</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-30">

        <div
            style="background: linear-gradient(to right, #8b5cf6, #f97316); padding: 40px; text-align: center; color: white; border-radius: 0 0 16px 16px;">
            <h1 style="font-size: 28px; font-weight: bold;">{{ $job->title }}</h1>
            <p style="font-size: 14px;">{{ $job->company_name }} - {{ $job->location }}</p>
        </div>

        <!-- Content -->
        <div style="max-width: 1200px; margin: 20px auto; display: flex; gap: 20px; padding: 0 16px;">
            <!-- Main Job Details -->
            <div
                style="flex: 2; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                {!! htmlspecialchars_decode($job->description) !!}
            </div>

            <!-- Sidebar -->
            <div
                style="flex: 1; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                <p style="color: #6b7280;">Location</p>
                <p style="font-weight: bold;">{{ $job->location }}</p>


                {{-- <button
                    style="background-color: #000; color: #fff; padding: 10px; border-radius: 4px; margin-top: 20px; width: 100%; border: none; cursor: pointer;">Apply
                    for this job</button> --}}



                <html lang="en">

                <head>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <style>
                        #applicationModal {
                            display: none;
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.5);
                            justify-content: center;
                            align-items: center;
                        }

                        .modal-content {
                            background: white;
                            padding: 20px;
                            border-radius: 8px;
                            width: 400px;
                        }
                    </style>
                </head>

                <body>

                    <button
                        style="background-color: #000; color: #fff; padding: 10px; border-radius: 4px; margin-top: 20px; width: 100%; border: none; cursor: pointer;"
                        onclick="openModal(1)">Apply for Job</button> <!-- Pass job_post_id dynamically -->
                    @if (session('success'))
                        <div
                            style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div id="applicationModal">
                        <div class="modal-content">
                            <h2 class="mb-4">Apply for Job</h2>

                            <form id="jobApplicationForm" method="POST" action='/jobpost/application/{{ $job->id }}'
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="job_post_id" id="job_post_id">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input name="name" type="name" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter full name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile</label>
                                    <input name="mobile" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter mobile number">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Resume (PDF)</label>
                                    <input type="file" name="resume" accept=".pdf" required class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                                <button class="btn btn-primary" type="button" onclick="closeModal()">Cancel</button>
                            </form>

                        </div>
                    </div>

                    <script>
                        function openModal(jobPostId) {
                            document.getElementById('job_post_id').value = jobPostId;
                            document.getElementById('applicationModal').style.display = 'flex';
                        }

                        function closeModal() {
                            document.getElementById('applicationModal').style.display = 'none';
                        }
                    </script>

                </body>

                </html>
            </div>
        </div>
    </div>

    </form>
    <div class="mt-50 pt-30">
        {{-- {{ $webinars->appends(request()->input())->links('vendor.pagination.panel') }} --}}
    </div>
    </section> -->
    </div>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>

    <script src="/assets/default/js/parts/categories.min.js"></script>
@endpush
