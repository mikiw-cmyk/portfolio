<?php
// Edit these in one place and the whole page updates
$name    = "John Michael Cabig";
$role    = "Aspiring Junior Web Developer";
$tagline = "Learning by building, one project at a time.";

// SOCIAL LINKS: replace with your real links
$github   = "https://github.com/mikiw-cmyk";

// CONTACT DETAILS: replace with your real email and phone number
$email = "cabigmichael1@gmail.com";
$phone = "09503320151";

// PROJECTS: the list lives in data/projects.php
$projects = require __DIR__ . '/data/projects.php';

// EDUCATION: edit the text between the quotes
$education = [
    "program" => "BS Information Technology",
    "school"  => "Bohol Island State University (BISU) - Balilihan Campus",
    "status"  => "Currently enrolled (since 2023)",
    // Areas you are studying. Add or remove freely.
    "areas" => ["Web development", "PHP and MySQL", "JavaScript", "Mobile app development (Flutter)", "Database basics"],
];

// LEARNING: what you are improving right now
$learning = [
    ["title" => "Improving JavaScript",        "text" => "Getting more comfortable with the language and using it in my projects."],
    ["title" => "PHP and MySQL",               "text" => "Building and improving systems that work with a database."],
    ["title" => "Better backend development", "text" => "Learning how to structure code so it's cleaner and safer."],
    ["title" => "UI/UX design",                "text" => "Making my projects easier and nicer to use."],
    ["title" => "Git and GitHub",              "text" => "Learning to track my work and share my projects."],
    ["title" => "Real-world projects",         "text" => "Building more projects to practice what I learn."],
];

// SKILLS: add or remove items here, the page builds itself
$skills = [
    "Frontend" => ["HTML", "CSS", "JavaScript", "Dart / Flutter"],
    "Backend"  => ["PHP", "Firebase"],
    "Database" => ["MySQL"],
    "Tools"    => ["Git / GitHub", "XAMPP", "Laragon", "VS Code"],
    "Currently Learning" => ["Better JavaScript", "Backend development", "UI/UX design", "Git / GitHub"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> | Student Developer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <a href="#home" class="logo"><?= $name ?></a>
        <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false">&#9776;</button>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#education">Education</a>
            <a href="#learning">Learning</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- HERO -->
    <section id="home" class="hero">
        <p class="hero-hello">Hi, I'm</p>
        <h1><?= $name ?></h1>
        <h2><?= $role ?></h2>
        <p class="hero-intro">
            I'm a college student learning web development by building real projects.
        </p>
        <p class="hero-tagline"><?= $tagline ?></p>

        <div class="hero-buttons">
            <a href="#projects" class="btn btn-primary">View My Projects</a>
            <a href="#contact" class="btn btn-outline">Contact Me</a>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section">
        <h2 class="section-title">About Me</h2>

        <div class="about-content">
            <div class="about-text">
                <p>
                    I'm a college student who got into web development because I like
                    seeing an idea turn into something people can actually click and use.
                </p>
                <p>
                    So far I've built school and practice projects, like ordering systems,
                    booking systems, and CRUD apps. Each one taught me something new,
                    and I'm still figuring out better ways to do things.
                </p>
                <p>
                    Right now I'm focused on getting stronger at JavaScript, PHP and MySQL,
                    backend development, UI/UX, and Git/GitHub.
                </p>
                <p>
                    My goal is to become a junior web developer. I'm not there yet,
                    but I'm working toward it by building more real-world projects.
                </p>
            </div>

            <ul class="about-facts">
                <li><strong>Status:</strong> College student</li>
                <li><strong>Focus:</strong> Web development</li>
                <li><strong>Goal:</strong> Junior web developer</li>
            </ul>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section">
        <h2 class="section-title">Skills</h2>
        <p class="section-subtitle">Technologies I've used in my school and practice projects.</p>

        <div class="skills-grid">
            <?php foreach ($skills as $category => $items): ?>
                <div class="skill-card">
                    <h3><?= htmlspecialchars($category) ?></h3>
                    <ul class="skill-tags">
                        <?php foreach ($items as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section">
        <h2 class="section-title">Projects</h2>
        <p class="section-subtitle">School, personal, and practice projects I've built while learning.</p>

        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <article class="project-card">

                    <div class="project-image">
                        <?php
                        $imageFile = $project['image'] ?? '';
                        $hasImage  = $imageFile !== '' && file_exists(__DIR__ . '/images/projects/' . $imageFile);
                        ?>
                        <?php if ($hasImage): ?>
                           <img src="images/projects/<?= htmlspecialchars($imageFile) ?>"
                            alt="Screenshot of <?= htmlspecialchars($project['name']) ?>"
                            class="<?= stripos($project['name'], 'Senior Assist') !== false ? 'senior-assist-image' : '' ?>">
                        <?php else: ?>
                            <div class="project-placeholder">Screenshot coming soon</div>
                        <?php endif; ?>
                    </div>

                    <div class="project-body">
                        <span class="project-type"><?= htmlspecialchars($project['type']) ?></span>
                        <h3><?= htmlspecialchars($project['name']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <p><strong>Purpose:</strong> <?= htmlspecialchars($project['purpose']) ?></p>

                        <h4>Built With</h4>
                        <ul class="skill-tags">
                            <?php foreach ($project['tech'] as $tech): ?>
                                <li><?= htmlspecialchars($tech) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="project-links">
                            <?php if (!empty($project['github'])): ?>
                                <a href="<?= htmlspecialchars($project['github']) ?>" class="btn btn-outline" target="_blank" rel="noopener">GitHub</a>
                            <?php endif; ?>
                            <?php if (!empty($project['demo'])): ?>
                                <a href="<?= htmlspecialchars($project['demo']) ?>" class="btn btn-primary" target="_blank" rel="noopener">Live Demo</a>
                            <?php endif; ?>
                        </div>
                    </div>

                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- EDUCATION + LEARNING (side by side) -->
    <div class="duo-row">

    <!-- EDUCATION -->
    <section id="education" class="section">
        <h2 class="section-title">Education</h2>
        <p class="section-subtitle">Where I'm studying and what I'm learning along the way.</p>

        <div class="education-grid">
            <div class="edu-card">
                <span class="edu-status"><?= htmlspecialchars($education['status']) ?></span>
                <h3><?= htmlspecialchars($education['program']) ?></h3>
                <p class="edu-school"><?= htmlspecialchars($education['school']) ?></p>

                <h4>Areas I'm studying</h4>
                <ul class="skill-tags">
                    <?php foreach ($education['areas'] as $area): ?>
                        <li><?= htmlspecialchars($area) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- LEARNING -->
    <section id="learning" class="section">
        <h2 class="section-title">Currently Improving</h2>
        <p class="section-subtitle">I'm still a student, so I'm always learning. Here's what I'm working on right now.</p>

        <div class="learning-grid">
            <?php foreach ($learning as $item): ?>
                <div class="learning-card">
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    </div>


    <!-- CONTACT -->
    <section id="contact" class="section">
        <h2 class="section-title">Get In Touch</h2>
        <p class="section-subtitle">
            Have a question, opportunity, or just want to connect? Feel free to reach out!
        </p>

        <div class="contact-grid">

            <div class="contact-info">
                <h3>Let's Talk!</h3>
                <p>
                    I'm always open to learning opportunities, feedback,
                    collaborations, and connecting with other developers.
                    You can reach me through the details below.
                </p>

                <ul class="contact-details">
                    <li>
                        <span class="contact-label">Email</span>
                        <a href="mailto:<?= htmlspecialchars($email) ?>">
                            <?= htmlspecialchars($email) ?>
                        </a>
                    </li>

                    <li>
                        <span class="contact-label">Phone</span>
                        <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $phone)) ?>">
                            <?= htmlspecialchars($phone) ?>
                        </a>
                    </li>

                    <li>
                        <span class="contact-label">GitHub</span>
                        <a href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener">
                            <?= htmlspecialchars($github) ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-brand">
                <strong><?= $name ?></strong>
                <span><?= $role ?></span>
            </div>

            <nav class="footer-nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#education">Education</a>
                <a href="#learning">Learning</a>
                <a href="#contact">Contact</a>
            </nav>

            <div class="footer-social">
                <a href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener">GitHub</a>
            </div>
        </div>
        <p class="footer-copy">&copy; <?= date('Y') ?> <?= $name ?>. Built with HTML, CSS, JavaScript, and PHP.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>