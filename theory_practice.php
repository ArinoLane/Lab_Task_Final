<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Metadata as requested -->
    <title>Jordan Lee | CS Student Portfolio</title>
    <meta name="author" content="Jordan Lee">
    <meta name="description" content="Portfolio of Jordan Lee, a Computer Science student seeking internship opportunities in software engineering and web development.">
    <meta name="keywords" content="Computer Science, Internship, Portfolio, Web Development, Algorithms, Student, Software Engineer">

    <!-- Tailwind CSS for modern styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Custom styles for specific semantic behaviors */
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Table styling for the education section */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        /* Smooth fade-in animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- Header & Navigation -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo / Name -->
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                        Jordan Lee
                    </span>
                </div>

                <!-- Semantic Navigation -->
                <nav>
                    <ul class="flex space-x-8">
                        <li><a href="#about" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">About</a></li>
                        <li><a href="#education" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Education</a></li>
                        <li><a href="#contact" class="px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition-colors font-medium">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-20">

        <!-- Biography Section -->
        <section id="about" class="animate-fade-in scroll-mt-24">
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-1 space-y-4">
                    <h2 class="text-3xl font-bold text-slate-900">Hello, I'm Jordan.</h2>
                    <h3 class="text-xl text-blue-600 font-medium">Computer Science Student & Aspiring Software Engineer</h3>
                    <p class="text-slate-600 leading-relaxed">
                        I am a Junior at Tech University with a passion for building scalable web applications and solving complex algorithmic problems. 
                        Currently preparing for an internship where I can apply my skills in <strong>Java</strong>, <strong>Python</strong>, and <strong>Full-Stack Web Development</strong>.
                        When I'm not coding, I'm organizing hackathons or contributing to open-source projects.
                    </p>
                    <div class="flex gap-4 pt-2">
                        <a href="#" class="flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-800 transition-colors">
                            <i data-lucide="github" class="w-5 h-5"></i> GitHub
                        </a>
                        <a href="#" class="flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-slate-800 transition-colors">
                            <i data-lucide="linkedin" class="w-5 h-5"></i> LinkedIn
                        </a>
                    </div>
                </div>
                <!-- Abstract Avatar Placeholder using CSS shapes -->
                <div class="w-48 h-48 bg-gradient-to-tr from-blue-500 to-indigo-500 rounded-full flex items-center justify-center shadow-lg transform hover:scale-105 transition-transform duration-300">
                    <span class="text-4xl font-bold text-white">JL</span>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="scroll-mt-24">
            <div class="flex items-center gap-3 mb-6">
                <i data-lucide="graduation-cap" class="w-8 h-8 text-blue-600"></i>
                <h2 class="text-2xl font-bold text-slate-900">Education</h2>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 border-b border-slate-200">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-semibold text-slate-900">Qualification / Degree</th>
                                <th scope="col" class="px-6 py-4 font-semibold text-slate-900">Institution</th>
                                <th scope="col" class="px-6 py-4 font-semibold text-slate-900">Year</th>
                                <th scope="col" class="px-6 py-4 font-semibold text-slate-900">Performance</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">B.S. Computer Science</td>
                                <td class="px-6 py-4 text-slate-600">Tech University</td>
                                <td class="px-6 py-4 text-slate-600">2023 - Present</td>
                                <td class="px-6 py-4 text-green-600 font-medium">3.9 GPA</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">High School Diploma</td>
                                <td class="px-6 py-4 text-slate-600">City High School</td>
                                <td class="px-6 py-4 text-slate-600">2019 - 2023</td>
                                <td class="px-6 py-4 text-slate-600">Valedictorian</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">Cert: Data Structures</td>
                                <td class="px-6 py-4 text-slate-600">Online Course Platform</td>
                                <td class="px-6 py-4 text-slate-600">2024</td>
                                <td class="px-6 py-4 text-slate-600">Completed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="scroll-mt-24 mb-20">
            <div class="flex items-center gap-3 mb-6">
                <i data-lucide="mail" class="w-8 h-8 text-blue-600"></i>
                <h2 class="text-2xl font-bold text-slate-900">Get In Touch</h2>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-8">
                <p class="text-slate-600 mb-6">Interested in hiring me for an internship? Fill out the form below!</p>
                
                <form id="contactForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name Input -->
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-medium text-slate-700">Full Name</label>
                            <input type="text" id="name" name="name" required 
                                class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                                placeholder="Recruiter Name">
                        </div>
                        
                        <!-- Email Input -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
                            <input type="email" id="email" name="email" required 
                                class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                                placeholder="name@company.com">
                        </div>
                    </div>

                    <!-- Message Input -->
                    <div class="space-y-2">
                        <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
                        <textarea id="message" name="message" rows="4" required 
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                            placeholder="I'd like to discuss an internship opportunity..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                        class="w-full md:w-auto px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-500/20 transition-all flex items-center justify-center gap-2">
                        Send Message <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>
            
            <!-- Notification Toast (Hidden by default) -->
            <div id="notification" class="fixed bottom-4 right-4 bg-slate-900 text-white px-6 py-4 rounded-lg shadow-xl transform translate-y-24 transition-transform duration-300 flex items-center gap-3 z-50">
                <i data-lucide="check-circle" class="text-green-400"></i>
                <div>
                    <h4 class="font-bold text-sm">Message Sent!</h4>
                    <p class="text-xs text-slate-300">I'll get back to you shortly.</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-5xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-500 text-sm">© 2025 Jordan Lee. Built with Semantic HTML5.</p>
            <address class="not-italic text-sm text-slate-500 flex gap-6">
                <a href="mailto:jordan.lee@example.com" class="hover:text-blue-600 transition-colors">jordan.lee@example.com</a>
                <span class="text-slate-300">|</span>
                <span>San Francisco, CA</span>
            </address>
        </div>
    </footer>

    <!-- Interactive Logic -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Form Handling
        const form = document.getElementById('contactForm');
        const notification = document.getElementById('notification');

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent actual page reload
            
            // Simulate sending data...
            const submitBtn = form.querySelector('button');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending...';
            
            setTimeout(() => {
                // Reset form
                form.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                lucide.createIcons(); // Re-init icons for the button
                
                // Show toast notification
                notification.style.transform = 'translateY(0)';
                
                // Hide toast after 3 seconds
                setTimeout(() => {
                    notification.style.transform = 'translateY(6rem)'; // Move back down
                }, 3000);
            }, 1000);
        });
    </script>
</body>
</html>