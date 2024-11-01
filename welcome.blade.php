<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aey's - Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            margin: 0;
            padding-bottom: 10px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            background: #333;
            color: #fff;
            padding: 10px;
            text-transform: uppercase;
            font-weight: bold;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .job-title {
            font-weight: bold;
        }
        .company {
            font-style: italic;
        }
        .dates {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Navoa, Aey Lizette</h1>
            <p> {{$data ['email']}} | {{$data ['contact']}} | {{$data ['address']}}</p>
        </header>

        <!-- Summary Section -->
        <div class="section">
            <div class="section-title">Summary</div>
            <p>{{$data ['summary']}}</p>
        </div>

        <!-- Experience Section -->
        <div class="section">
            <div class="section-title">Experience</div>
            <ul>
                <li>
                    <span class="job-title">Digital Marketer</span> - <span class="company">La Dolce Vita</span>
                    <div class="dates">September 2022 - November 2023</div>
                    <p>Designed comprehensive strategies that align with business objectives, using online platforms like websites, social media, email, and search engines.</p>
                </li>
                <li>
                    <span class="job-title">Multimedia Specialist</span> - <span class="company">Sandro Ferrone</span>
                    <div class="dates">November 2023 - August 2024</div>
                    <p>Designs 2D and 3D animations, infographics, and other visual elements. Used software like Adobe After Effects, Illustrator, or Blender to create motion graphics and special effects.</p>
                </li>
            </ul>
        </div>

        <!-- Education Section -->
        <div class="section">
            <div class="section-title">Education</div>
            <ul>
                <li>
                    <span class="job-title">Bachelor of Science in Information Technology</span> - <span class="company">Baliwag Polytechnic College</span>
                    <div class="dates">July 2022</div>
                </li>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <div class="section-title">Skills</div>
            <ul>
                <li>{{$data ['skills1']}}</li>
                <li>{{$data ['skills2']}}</li>
                <li>{{$data ['skills3']}}</li>
                <li>{{$data ['skills4']}}</li>
            </ul>
        </div>

        <!-- Certifications Section -->
        <div class="section">
            <div class="section-title">Certifications</div>
            <ul>
                <li>{{$data ['certifications1']}}</li>
                <li>{{$data ['certifications2']}}</li>
            </ul>
        </div>

        <!-- Contact Section -->
        <footer>
            <p><strong>Contact Info:</strong> Email: aeynavoa8@gmail.com | Phone: (63) 9123-678900</p>
        </footer>
    </div>
</body>
</html>