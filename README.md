# My Portfolio

A personal portfolio website built by a college student learning web development.
It shows who I am, the skills I'm learning, and the projects I've built while studying.

## Built With

- HTML
- CSS
- JavaScript
- PHP (plain PHP, no frameworks)

No database is used by the portfolio itself.

## Sections

- Home
- About Me
- Skills
- Projects
- Education
- Currently Improving
- Contact
- Footer

## Folder Structure

```
portfolio/
├── index.php            the main page
├── css/
│   └── style.css        all the styling and colors
├── js/
│   └── script.js        mobile menu, active link, fade-in effect
├── data/
│   └── projects.php     the project list (edit this to add projects)
├── images/
│   └── projects/        project screenshots
└── README.md
```

## How to Run It Locally

1. Install a local server such as [XAMPP](https://www.apachefriends.org/) or Laragon.
2. Put the `portfolio` folder in the server's web folder (`htdocs` for XAMPP, `www` for Laragon).
3. Start **Apache**.
4. Visit `http://localhost/portfolio/` in your browser.

## How to Update the Site

**Change my name, title, or tagline**
Open `index.php` and edit the variables at the very top (`$name`, `$role`, `$tagline`).

**Change my email, phone, or GitHub link**
Open `index.php` and edit `$email`, `$phone`, and `$github` near the top.

**Add or remove a skill**
Open `index.php` and edit the `$skills` list at the top.

**Edit Education or the "Currently Improving" cards**
Open `index.php` and edit the `$education` and `$learning` lists at the top.

**Add a new project**

1. Open `data/projects.php`.
2. Copy one project block and paste it at the bottom.
3. Change the text (name, type, description, purpose, technologies).
4. Put a screenshot in `images/projects/` and write its file name in `"image"`.
5. Add the `"github"` and `"demo"` links. Leave them as `""` to hide the button.

**Change the colors**
Open `css/style.css` and edit the color values inside `:root` at the top.

## Before Putting It Online

- [ ] Check that `$email`, `$phone`, and `$github` in `index.php` are correct
- [ ] Add a GitHub link (and a live demo link if available) for each project in `data/projects.php`
- [ ] Make sure every screenshot in `images/projects/` matches its file name in `projects.php`
- [ ] Keep image file names lowercase (some web hosts care about upper and lower case)
- [ ] Make sure screenshots show no real names, emails, or phone numbers
- [ ] Check that the program, school, and status in `$education` are correct
- [ ] Read every section once and make sure it is true and sounds like me
- [ ] Test on desktop, tablet, and phone sizes

## About This Project

I built this portfolio step by step to practice HTML, CSS, JavaScript, and PHP.
It's still a student project, and I'll keep improving it as I learn.
