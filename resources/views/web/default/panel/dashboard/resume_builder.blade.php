@extends(getTemplate() . '.panel.layouts.panel_layout')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/chartjs/chart.min.css" />
    <link rel="stylesheet" href="/assets/default/vendors/apexcharts/apexcharts.css" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <style>
        label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .field {
            margin-bottom: 24px;
        }

        .quill-container {
            height: 200px;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        input {
            width: 100%;
            padding: 10px 14px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        button {
            padding: 12px 28px;
            font-size: 16px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .ql-toolbar.ql-snow {
            border-radius: 6px 6px 0 0;
            border-color: #ccc;
        }

        .ql-container.ql-snow {
            border-radius: 0 0 6px 6px;
            border-color: #ccc;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 24px;
            color: #222;
        }

        #resume-builder {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
    </style>
@endpush

@section('content')
    <section class="">




    </section>

    <section class="dashboard">


        <div id="resume-builder" class="bg-light p-4">

            <h1>ATS-Friendly Resume Builder</h1>

            <form id="resumeForm" onsubmit="submitForm(event)">
                <div class="field">
                    <label>Name:</label>
                    <input type="text" id="name" value="Full name" />
                </div>
                <div class="field">
                    <label>Email:</label>
                    <input type="email" id="email" value="wayspire@example.com" />
                </div>
                <div class="field">
                    <label>LinkedIn:</label>
                    <input type="url" id="linkedin" value="https://linkedin.com/in/wayspire" />
                </div>
                <div class="field">
                    <label>Mobile No.:</label>
                    <input type="text" id="mobile" value="+91 98xxxxxx10" />
                </div>
                <div class="field">
                    <label>Location:</label>
                    <input type="text" id="location" value="New Delhi, India" />
                </div>

                <div class="field">
                    <label>Career Summary:</label>
                    <div id="career-summary" class="quill-container"></div>
                </div>

                <div class="field">
                    <label>Skills:</label>
                    <div id="skills" class="quill-container"></div>
                </div>

                <div class="field">
                    <label>Professional Accomplishments:</label>
                    <div id="accomplishments" class="quill-container"></div>
                </div>

                <div class="field">
                    <label>Work Experience:</label>
                    <div id="experience" class="quill-container"></div>
                </div>

                <div class="field">
                    <label>Education History:</label>
                    <div id="education" class="quill-container"></div>
                </div>

                <div class="field">
                    <label>Ad Hoc:</label>
                    <div id="adhoc" class="quill-container"></div>
                </div>

                <button type="submit">Generate PDF</button>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
            <script>
                const editors = {
                    "career-summary": new Quill("#career-summary", {
                        theme: "snow"
                    }),
                    "skills": new Quill("#skills", {
                        theme: "snow"
                    }),
                    "accomplishments": new Quill("#accomplishments", {
                        theme: "snow"
                    }),
                    "experience": new Quill("#experience", {
                        theme: "snow"
                    }),
                    "education": new Quill("#education", {
                        theme: "snow"
                    }),
                    "adhoc": new Quill("#adhoc", {
                        theme: "snow"
                    })
                };

                // Set default dummy content
                editors["career-summary"].setText(
                    "Eg. A passionate full-stack developer with 3+ years of experience in building scalable web applications.");
                editors["skills"].setText("JavaScript, React, Node.js, PHP, Laravel, Docker, Kubernetes, MongoDB, MySQL");
                editors["accomplishments"].setText(
                    "• Spearheaded migration of legacy apps to modern stack\n• Built internal PDF editor from scratch\n• Introduced observability with New Relic"
                );
                editors["experience"].setText(
                    "Wayspire - Full Stack Developer (2023-Present)\nStartupX - React Developer (2021-2023)");
                editors["education"].setText("Bachelor of Engineering - Computer Science\nABC University - 2017-2021");
                editors["adhoc"].setText("Open to relocation. Available to join within 30 days.");

                function submitForm(e) {
                    e.preventDefault();

                    const getValue = id => document.getElementById(id).value;
                    const getHtml = key => editors[key].root.innerHTML;

                    const htmlContent = `
        <div style="font-family: Arial, sans-serif; font-size: 12px; line-height: 1.6; margin: 20px; color: #000;">
          <div class="header-info">
            <h1 style="font-size:22px;">${getValue("name")}</h1>
            <p>Email: ${getValue("email")} | Phone: ${getValue("mobile")}</p>
            <p>LinkedIn: ${getValue("linkedin")} | Location: ${getValue("location")}</p>
          </div>

          <div class="section">
            <h2 style="font-size:16px; border-bottom:1px solid #000;">Career Summary</h2>
            ${getHtml("career-summary")}
          </div>

          <div class="section">
            <h2 style="font-size:16px; border-bottom:1px solid #000;">Skills</h2>
            <ul>${getHtml("skills")}</ul>
          </div>

          <div class="section">
            <h2 style="font-size:16px; border-bottom:1px solid #000;">Professional Accomplishments</h2>
            <ul>${getHtml("accomplishments")}</ul>
          </div>

          <div class="section">
            <h2 style="font-size:16px; border-bottom:1px solid #000;">Work Experience</h2>
            ${getHtml("experience")}
          </div>

          <div class="section">
            <h2 style="font-size:16px; border-bottom:1px solid #000;">Education History</h2>
            ${getHtml("education")}
          </div>

          <div class="section">
            <h2 style="font-size:16px; border-bottom:1px solid #000;">Ad Hoc</h2>
            ${getHtml("adhoc")}
          </div>
        </div>
      `;

                    fetch("http://pdf-api.nerotech.co.in/api/generate-pdf", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                "html": htmlContent
                            })
                        })
                        .then(res => res.blob())
                        .then(blob => {
                            const url = window.URL.createObjectURL(blob);
                            const link = document.createElement("a");
                            link.href = url;
                            link.download = "resume.pdf";
                            document.body.appendChild(link);
                            link.click();
                            link.remove();
                            window.URL.revokeObjectURL(url);
                        })
                        .catch(err => {
                            alert("Error generating PDF: " + err.message);
                            console.error(err);
                        });
                }
            </script>
        </div>

    </section>
@endsection
