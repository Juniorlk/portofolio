/* =============================================================================
   ETIENNE TETSSOP - PORTFOLIO JAVASCRIPT
   Développeur Backend | Portfolio Professionnel
   ============================================================================= */

// Language Toggle
let currentLang = 'fr';
const langToggle = document.getElementById('lang-toggle');

langToggle.addEventListener('click', () => {
    currentLang = currentLang === 'fr' ? 'en' : 'fr';
    langToggle.textContent = currentLang === 'fr' ? 'EN' : 'FR';
    
    // Update all translatable elements
    document.querySelectorAll('[data-fr]').forEach(element => {
        const text = element.getAttribute(`data-${currentLang}`);
        if (text) {
            if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                element.placeholder = text;
            } else {
                element.textContent = text;
            }
        }
    });
});

// Skills Chart
const ctx = document.getElementById('skillsChart').getContext('2d');
new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Python', 'JavaScript', 'Docker', 'PostgreSQL', 'FastAPI', 'React'],
        datasets: [{
            label: 'Compétences',
            data: [90, 85, 88, 85, 92, 80],
            borderColor: '#3E92CC',
            backgroundColor: 'rgba(62, 146, 204, 0.2)',
            borderWidth: 3,
            pointBackgroundColor: '#0A2463',
            pointBorderColor: '#3E92CC',
            pointBorderWidth: 2,
            pointRadius: 6
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            r: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    stepSize: 20,
                    color: '#6B7280'
                },
                grid: {
                    color: '#E5E7EB'
                },
                angleLines: {
                    color: '#E5E7EB'
                },
                pointLabels: {
                    color: '#374151',
                    font: {
                        size: 14,
                        weight: '500'
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false
            }
        },
        elements: {
            line: {
                tension: 0.3
            }
        }
    }
});

// CV Download - PDF file
document.getElementById('download-cv').addEventListener('click', () => {
    const cvLink = document.createElement('a');
    cvLink.href = 'CV_Etienne_TETSSOP.pdf';
    cvLink.download = 'CV_Etienne_TETSSOP.pdf';
    cvLink.click();
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Mobile menu toggle
const mobileMenu = document.getElementById('mobile-menu');
mobileMenu.addEventListener('click', () => {
    // Create mobile menu dropdown
    const nav = document.querySelector('nav');
    let mobileDropdown = nav.querySelector('.mobile-dropdown');
    
    if (!mobileDropdown) {
        mobileDropdown = document.createElement('div');
        mobileDropdown.className = 'mobile-dropdown md:hidden bg-white shadow-lg absolute top-full left-0 right-0 p-4 space-y-4 border-t';
        mobileDropdown.innerHTML = `
            <a href="#home" class="block text-gray-700 hover:text-secondary transition-colors font-medium" data-fr="Accueil" data-en="Home">Accueil</a>
            <a href="#projects" class="block text-gray-700 hover:text-secondary transition-colors font-medium" data-fr="Projets" data-en="Projects">Projets</a>
            <a href="#experience" class="block text-gray-700 hover:text-secondary transition-colors font-medium" data-fr="Expérience" data-en="Experience">Expérience</a>
            <a href="#education" class="block text-gray-700 hover:text-secondary transition-colors font-medium" data-fr="Formation" data-en="Education">Formation</a>
            <a href="#skills" class="block text-gray-700 hover:text-secondary transition-colors font-medium" data-fr="Compétences" data-en="Skills">Compétences</a>
            <a href="#contact" class="block text-gray-700 hover:text-secondary transition-colors font-medium">Contact</a>
        `;
        nav.appendChild(mobileDropdown);
    } else {
        mobileDropdown.remove();
    }
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
}, observerOptions);

// Observe elements for animation
document.querySelectorAll('.card-hover').forEach(el => {
    observer.observe(el);
});

// Contact form submission
document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();
    alert(currentLang === 'fr' 
        ? 'Merci pour votre message ! Je vous répondrai bientôt.' 
        : 'Thank you for your message! I will reply soon.');
});

// Add loading animation
window.addEventListener('load', () => {
    document.body.style.opacity = '1';
});