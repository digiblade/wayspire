@php
    $userLanguages = !empty($generalSettings['site_language'])
        ? [$generalSettings['site_language'] => getLanguages($generalSettings['site_language'])]
        : [];

    if (!empty($generalSettings['user_languages']) and is_array($generalSettings['user_languages'])) {
        $userLanguages = getLanguages($generalSettings['user_languages']);
    }

    $localLanguage = [];

    foreach ($userLanguages as $key => $userLanguage) {
        $localLanguage[localeToCountryCode($key)] = $userLanguage;
    }

@endphp

<div class="top-navbar border-bottom justify-content-between w-100 align-items-center"
    style="
        padding: 0.75rem 4rem;
        color: white;
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    ">
    <div
        style="
        display: inline-block;
        white-space: nowrap;
        animation: scroll 15s linear infinite;
    ">
        <span>
            <span style="color: orange;">475092+ </span>
            No. of Students Counselled &nbsp;|&nbsp;
        </span>
        <span>
            <span style="color: orange;">475092+ </span>
            No. of Assisted in Placement &nbsp;|&nbsp;
        </span>

    </div>
    <style>
        @keyframes scroll {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes scrollRev {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0%);
            }
        }
    </style>
</div>



@push('scripts_bottom')
    <link href="/assets/default/vendors/flagstrap/css/flags.css" rel="stylesheet">
    <script src="/assets/default/vendors/flagstrap/js/jquery.flagstrap.min.js"></script>
    <script src="/assets/default/js/parts/top_nav_flags.min.js"></script>
@endpush
