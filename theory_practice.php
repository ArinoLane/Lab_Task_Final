<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>My Personal Portfolio</title>
    <meta name="author" content="Your Name">
    <meta name="description" content="Personal portfolio webpage for internship preparation.">
    <meta name="keywords" content="portfolio, internship, computer science, student">
    <style>
        body { font-family: Arial, sans-serif; padding: 0; }
        header { background: #e3f2fd; padding: 20px;  text-align: center; }
        nav a { margin: 0 10px; text-decoration: none; color: #333; }
        main { padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid #999; }
        th, td { padding: 10px; text-align: left; }
        footer { background: #e3f2fd; text-align: center; padding: 10px; margin-top: 20px; }
        form { max-width: 400px; margin-top: 20px; }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0; }
        
    </style>
</head>
<body>
    <header>
        <h1>Your Name</h1>
        <nav>
            <a href="#bio">Biography</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>
        <section id="bio">
            <h2>About Me</h2>
            <p>Hello! I am a computer science student preparing for internship opportunities. I am passionate about web development, programming, and building real-world projects.</p>
        </section>

        <section id="education">
            <h2>Educational Qualifications</h2>
            <table>
                <tr>
                    <th>Degree</th>
                    <th>Institution</th>
                    <th>Year</th>
                </tr>
                <tr>
                    <td>B.Sc. in Computer Science</td>
                    <td>ABC University</td>
                    <td>2021–2025</td>
                </tr>
                <tr>
                    <td>High School</td>
                    <td>XYZ School</td>
                    <td>2019–2021</td>
                </tr>
            </table>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Your Name. All rights reserved.</p>
    </footer>
</body>
</html>
