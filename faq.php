<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>F.A.Q.</title>
<link rel="stylesheet" href="s.css" />
<script src="/script.js" defer></script>
  
<style>
body {
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;
  background-color: #1e4278;
  margin: 0;
  padding: 20px;
}

.container {
  min-width: 1200px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: white;
}

.faq-item {
  margin-bottom: 20px;
}

.question {
  font-weight: bold;
  cursor: pointer;
  color: black;
}

.answer {
  color: black;
  display: none;
  padding-top: 10px;
}

.answer.active {
  color: gray;
  display: block;
  text-align: center; /* Centered text */
}
</style>

<style>
  body {
    margin: 0;
    font-family: 'SF Pro', Arial, sans-serif;
    background-color: #f0f0f0;
    background-image: url('https://wallpapers.com/images/hd/minimalist-blue-e0q5nh2rivmv9eio.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }

  .navbar-brand {
    color: white;
    font-size: 24px;
    text-decoration: none;
  }

  .navbar-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  .navbar-links li {
    display: inline;
    margin-left: 20px;
  }

  .navbar-links li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    position: relative;
  }

  .navbar-links li a::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -8px; /* Adjusted positioning */
    left: 0;
    background-color: transparent;
    transition: width 0.3s ease, background-color 0.3s ease;
  }

  .navbar-links li a:hover::after {
    width: 100%;
    background-color: white;
  }

  .navbar-links li a.active::after {
    width: 100%;
    background-color: white;
  }

  @media screen and (max-width: 768px) {
    .navbar {
      flex-direction: column;
      align-items: flex-start;
    }

    .navbar-links {
      margin-top: 10px;
    }

    .navbar-links li {
      display: block;
      margin: 10px 0;
    }
  }
</style>
</head>
<body>

<div class="navbar">
  <a href="#" class="navbar-brand">Cougar CTE</a>
  <ul class="navbar-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Teacher Login</a></li>
    <li><a href="faq.php" class="active">FAQ</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="history.php">BHS History</a></li>

  </ul>
</div>

<h1>Frequently Asked Questions</h1>

<div class="container"> <!-- Added container -->
  <div class="faq-item">
    <div class="question">Q: What is Career and Technical Education (CTE)?</div>
    <div class="answer">A: Career and Technical Education (CTE) has a long and rich history in the United States. Today, CTE has evolved from a limited number of vocational programs into a broad system encompassing a variety of challenging fields in diverse and high-demand subject areas. It addresses the changing global economy by providing students with practical skills and knowledge relevant to real-world careers.</div>
  </div>

  <div class="faq-item">
    <div class="question">Q: What is the mission of the Northshore School District Career and College Readiness (CCR) program?</div>
    <div class="answer">A: The Northshore School District Career and College Readiness (CCR) program is dedicated to preparing all students to be career and college-ready. We aim to help our nation meet the challenges of economic development, student achievement, and global competitiveness. Our program emphasizes real-world, 21st-century learning, fostering innovation, creativity, and problem-solving skills in every course.</div>
  </div>

  <div class="faq-item">
    <div class="question">Q: What is the culture like within the NSD CCR program?</div>
    <div class="answer">A: The NSD CCR program fosters a culture of innovation, creativity, and outside-the-box thinking. We encourage an entrepreneurial spirit and embrace a "maker mindset" where students are empowered to explore limitless possibilities. Failure is viewed as an opportunity for growth, and our classrooms are places where big ideas are supported and nurtured.</div>
  </div>

  <div class="faq-item">
    <div class="question">Q: How many courses does the NSD CCR program offer?</div>
    <div class="answer">A: The NSD CCR program offers over 80 different course offerings, providing students with access to a wide range of potential career paths. Additionally, students have access to preparatory and industry-certified programs, ensuring they acquire valuable 21st-century skills relevant to their chosen fields.</div>
  </div>

  <div class="faq-item">
  <div class="question">Q: How does Bothell High School support students in their career exploration?</div>
  <div class="answer">A: Bothell High School provides various opportunities for students to explore different career paths. From offering diverse academic programs like Advanced Placement and Special Education to providing vocational training through partnerships with local institutions, students have access to resources and experiences that help them make informed decisions about their future.</div>
</div>

<div class="faq-item">
  <div class="question">Q: What resources are available for students interested in vocational training?</div>
  <div class="answer">A: Bothell High School collaborates with organizations like WaNIC and Lake Washington Technical College to offer vocational training programs. These programs provide hands-on experience in fields such as automotive technology and culinary arts, giving students valuable skills and certifications that can lead to rewarding careers.</div>
</div>

<div class="faq-item">
  <div class="question">Q: How can students participate in extracurricular activities at Bothell High School?</div>
  <div class="answer">A: Bothell High School offers a wide range of extracurricular activities, including clubs, sports teams, and performing arts groups. Students can join clubs related to their interests, such as Science Olympiad, DECA, and FBLA, or participate in drama and music programs that perform at the Northshore Performing Arts Center.</div>
</div>

<div class="faq-item">
  <div class="question">Q: What support does Bothell High School provide for students with diverse learning needs?</div>
  <div class="answer">A: Bothell High School is committed to supporting all students, including those with diverse learning needs. The school offers Special Education programs and services tailored to individual student needs, ensuring that every student has access to a quality education and opportunities for success.</div>
</div>

</div> <!-- Closing container -->

<script>
  // Add click event to questions to toggle answers
  document.querySelectorAll('.question').forEach(item => {
    item.addEventListener('click', () => {
      item.nextElementSibling.classList.toggle('active');
    });
  });
</script>
<script type="importmap">
  {
    "imports": {
      "@google/generative-ai": "https://esm.run/@google/generative-ai"
    }
  }
</script>
<script type="module">
  import { GoogleGenerativeAI } from "@google/generative-ai";

  // Fetch your API_KEY
  const API_KEY = "AIzaSyDhBwg8fnRhCGBdpILie_-GjNrOzCvsd9Y";

  // Access your API key (see "Set up your API key" above)
  const genAI = new GoogleGenerativeAI(API_KEY);

  // ...

  const model = genAI.getGenerativeModel({ model: "gemini-pro"});

  // ...
</script>
<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clv16duqx000nohbb25z1215t"></script>
</body>
</html>
