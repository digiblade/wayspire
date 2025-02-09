@extends(getTemplate() . '.layouts.app')

@section('content')
    <div
        style="
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 4rem 6rem;
    margin: 4rem 0;
">
        <!-- Left Content -->
        <div style="width: 50%">
            <div style="color: white">
                <div style="margin: 0 auto; padding: 3rem 0">
                    <!-- Highlight Badge -->
                    <span
                        style="
                    background-color: #0073e6;
                    padding: 0.5rem 2rem;
                    border-radius: 999px;
                    color: white;
                ">
                        E-Learning Course
                    </span>
                    <!-- Main Heading -->
                    <h1
                        style="
                    font-size: 3rem;
                    font-weight: bold;
                    margin-top: 3rem;
                ">
                        About Our Next Level E-Learning
                    </h1>
                    <!-- Subheading -->
                    <h2 style="font-size: 1.125rem; margin-top: 1rem">
                        Nunc eu hendrerit turpis. Fusce non lectus sem. In
                        pellentesque nunc
                    </h2>
                    <!-- Steps -->
                    <div
                        style="
                    margin-top: 1.5rem;
                    display: flex;
                    flex-direction: column;
                    gap: 1rem;
                ">
                        <!-- Step 1 -->
                        <div
                            style="
                        display: flex;
                        gap: 1rem;
                        align-items: center;
                        background-color: #e6f9f3;
                        padding: 1.5rem;
                        border-radius: 1rem;
                        color: #1ab69d;
                    ">
                            <div
                                style="
                            background-color: white;
                            border-radius: 50%;
                            padding: 1rem;
                        ">
                                <img src="/assets/default/img/custom-imgs/user-icon.png" alt="User Icon" />
                            </div>
                            <div>
                                <h3
                                    style="
                                font-size: 1.25rem;
                                font-weight: bold;
                            ">
                                    Create Account
                                </h3>
                                <p>
                                    Because he will ab hold, uniess but
                                    through concer,
                                </p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div
                            style="
                        display: flex;
                        gap: 1rem;
                        align-items: center;
                        background-color: #f4e6ff;
                        padding: 1.5rem;
                        border-radius: 1rem;
                        color: #8e56ff;
                    ">
                            <div
                                style="
                            background-color: white;
                            border-radius: 50%;
                            padding: 1rem;
                        ">
                                <img src="/assets/default/img/custom-imgs/file-icon.png" alt="File Icon" />
                            </div>
                            <div>
                                <h3
                                    style="
                                font-size: 1.25rem;
                                font-weight: bold;
                            ">
                                    Register Student Details
                                </h3>
                                <p>
                                    Because he will ab hold, uniess but
                                    through concer,
                                </p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div
                            style="
                        display: flex;
                        gap: 1rem;
                        align-items: center;
                        background-color: #fff9e6;
                        padding: 1.5rem;
                        border-radius: 1rem;
                        color: #f2b31d;
                    ">
                            <div
                                style="
                            background-color: white;
                            border-radius: 50%;
                            padding: 1rem;
                        ">
                                <img src="/assets/default/img/custom-imgs/degree-icon.png" alt="Degree Icon" />
                            </div>
                            <div>
                                <h3
                                    style="
                                font-size: 1.25rem;
                                font-weight: bold;
                            ">
                                    Get Certification
                                </h3>
                                <p>
                                    Because he will ab hold, uniess but
                                    through concer,
                                </p>
                            </div>
                        </div>
                        <!-- Button -->
                        <div>
                            <a href="#"
                                style="
                            display: inline-flex;
                            align-items: center;
                            background-color: #fbc02d;
                            padding: 0.5rem 2rem;
                            border-radius: 999px;
                            color: black;
                            text-decoration: none;
                        ">
                                Get Started →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Banner -->
        <div style="width: 40%">
            <img src="/assets/default/img/custom-imgs/about-pattern1.png" alt="Banner Pattern"
                style="width: 100%; height: auto" />
        </div>
    </div>
    <!-- Section 2 -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; padding: 0 6rem;">
        <div
            style="padding: 2rem; background-color: #e6f9f3; border: 1px solid #cce7e3; color: #1AB69D; border-radius: 1rem; display: flex; flex-direction: column; gap: 0.5rem; justify-content: center; align-items: center;">
            <div style="font-size: 2rem; font-weight: 600;">12.3K</div>
            <div style="font-weight: 600;">Student Enrolled</div>
            <img src="path-to-student-icon" alt="" />
        </div>
        <div
            style="padding: 2rem; background-color: #fbe4e4; border: 1px solid #f1bdbd; color: #FF4A4A; border-radius: 1rem; display: flex; flex-direction: column; gap: 0.5rem; justify-content: center; align-items: center;">
            <div style="font-size: 2rem; font-weight: 600;">12.3K</div>
            <div style="font-weight: 600;">Student Enrolled</div>
            <img src="path-to-classroom-icon" alt="" />
        </div>
        <div
            style="padding: 2rem; background-color: #ede3fb; border: 1px solid #d8c5f7; color: #8E56FF; border-radius: 1rem; display: flex; flex-direction: column; gap: 0.5rem; justify-content: center; align-items: center;">
            <div style="font-size: 2rem; font-weight: 600;">12.3K</div>
            <div style="font-weight: 600;">Student Enrolled</div>
            <img src="path-to-like-icon" alt="" />
        </div>
        <div
            style="padding: 2rem; background-color: #fff4d3; border: 1px solid #fce3a6; color: #FFC107; border-radius: 1rem; display: flex; flex-direction: column; gap: 0.5rem; justify-content: center; align-items: center;">
            <div style="font-size: 2rem; font-weight: 600;">12.3K</div>
            <div style="font-weight: 600;">Student Enrolled</div>
            <img src="path-to-book-icon" alt="" />
        </div>
    </div>

    <!-- Section 3 -->
    <section class="container-fluid">
        <div style="padding: 6rem 6rem 6rem 6rem; text-align: center; position: relative; margin: 9rem 0; color:white">
            <span style="padding: 0.5rem 2rem; border: 1px solid #0073e6; color: #0073e6; border-radius: 999px;">Our
                Story</span>
            <div style="margin-top: 2rem; font-size: 2.5rem; font-weight: 600;">Our Student Journey</div>
            <div style="display: flex; margin-top: 4rem; gap: 3rem; align-items: center; text-align: left;">
                <div style="width: 50%; height: 24rem; background-color: white; border-radius: 1rem;"></div>
                <div style="width: 33%;">
                    <span style="font-size: 1.5rem; color: #0073e6;">2024</span>
                    <div style="font-size: 2rem;">Presenting one million Joiner Through Online AI Course Service</div>
                    <div style="text-align: justify; margin: 3rem 0;">
                        Classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden Sydney College in Virginia.
                    </div>
                    <a href="#"
                        style="display: inline-flex; padding: 0.5rem 2rem; background-color: #FBC02D; border-radius: 999px; color: black; text-decoration: none;">Join
                        Now →</a>
                </div>
            </div>
            <div style="margin-top: 9rem; display: flex; justify-content: center; align-items: center;">
                <img src="/assets/default/img/custom-imgs/timeline.png" alt="" style="width:100%" />
            </div>
            <div
                style="position: absolute; inset: 0; z-index: -10; background: radial-gradient(circle,  #141414c8 20%,
            #171717 30% /* Primary Blue */); display: flex; justify-content: center; align-items: center;">
                <img src="/assets/default/img/custom-imgs/mapPattern.png" alt="" />
            </div>
        </div>

    </section>


    <!-- Section 4 -->
@endsection
