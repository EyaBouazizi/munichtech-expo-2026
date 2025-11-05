@extends('layouts.app')

@section('title', 'Home - MunichTech EXPO 2026')

@section('content')
<!-- Hero Section with Tech Animation -->
<section class="relative bg-gradient-to-br from-primary-600 via-indigo-600 to-purple-600 text-white py-20 md:py-32 overflow-hidden">
    <!-- Animated Tech Background Canvas -->
    <canvas id="techCanvas" class="absolute inset-0 w-full h-full" style="opacity: 0.4;"></canvas>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <div class="animate-fade-in">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 drop-shadow-2xl leading-tight">
                MunichTech EXPO 2026
            </h1>
            <p class="text-xl md:text-2xl mb-4 font-light drop-shadow-lg">
                Europe's Innovation Gateway
            </p>
            <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto drop-shadow-md opacity-95">
                Connecting Startups, Investors, and Innovators for Europe's Technology Future
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <a href="{{ route('tickets.page') }}" class="btn btn-primary text-lg px-8 py-4">
                    Get Tickets Now
                </a>
                <a href="{{ route('about') }}" class="btn btn-outline text-lg px-8 py-4">
                    Learn More
                </a>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6 text-sm md:text-base">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>10,000+ Attendees</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>200+ Speakers</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>April 23–24, 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">About the Event</h2>
            <p class="section-subtitle">
                MunichTech EXPO 2026 is Europe's next-generation innovation and technology festival, happening on
                <strong class="text-primary-600">April 23–24, 2026</strong> at ICM – Messe München. 
                It unites AI innovators, startups, investors, corporates, researchers, and job seekers.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card text-center animate-slide-up">
                <div class="mb-4">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Network with Innovators</h3>
                <p class="text-gray-600 leading-relaxed">Meet 10,000+ professionals from startups, corporates, and academia. Build meaningful connections that drive innovation.</p>
            </div>
            
            <div class="card text-center animate-slide-up" style="animation-delay: 0.1s">
                <div class="mb-4">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Explore the Future</h3>
                <p class="text-gray-600 leading-relaxed">Discover cutting-edge technologies in AI, fintech, robotics, sustainability, and more. See the future of tech today.</p>
            </div>
            
            <div class="card text-center animate-slide-up" style="animation-delay: 0.2s">
                <div class="mb-4">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Build Partnerships</h3>
                <p class="text-gray-600 leading-relaxed">Connect with investors, talent, and partners driving Europe's innovation ecosystem forward.</p>
            </div>
        </div>
    </div>
</section>

<!-- Event Highlights Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Event Highlights</h2>
            <p class="section-subtitle">Experience the best of Europe's tech innovation in one place</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">AI & Innovation</h3>
                <p class="text-gray-600 text-sm">Explore cutting-edge AI solutions and innovations</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-indigo-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">Startup Village</h3>
                <p class="text-gray-600 text-sm">Connect with emerging startups and investors</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-purple-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">Talent Hub</h3>
                <p class="text-gray-600 text-sm">Meet top talent and explore career opportunities</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-pink-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">Workshops</h3>
                <p class="text-gray-600 text-sm">Learn from industry experts in hands-on sessions</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary-600 to-indigo-600 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Join Us?</h2>
        <p class="text-xl mb-8 opacity-95">Be part of Europe's most exciting tech event in 2026</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('tickets.page') }}" class="btn bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 text-lg font-semibold rounded-lg transition">
                Get Your Tickets
            </a>
            <a href="{{ route('speakers') }}" class="btn bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 text-lg font-semibold rounded-lg transition">
                Apply as Speaker
            </a>
            <a href="{{ route('sponsors') }}" class="btn bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 text-lg font-semibold rounded-lg transition">
                Become a Sponsor
            </a>
            <a href="{{ route('expo.zones') }}" class="btn bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 text-lg font-semibold rounded-lg transition">
                Explore Event Zones
            </a>
        </div>
    </div>
</section>

<!-- Partners & Sponsors Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Our Partners & Sponsors</h2>
            <p class="section-subtitle">Trusted by leading organizations driving Europe's tech future</p>
        </div>

        <!-- Platinum Sponsors -->
        <div class="mb-16">
            <h3 class="text-center text-xl font-bold text-gray-800 mb-8">Platinum Sponsors</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 items-center justify-items-center">
                <div class="group relative bg-white rounded-xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-200 hover:border-primary-300 w-full h-32 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-black text-gray-300 group-hover:text-primary-600 transition-colors">LOGO</div>
                        <p class="text-xs text-gray-400 mt-1">Platinum Partner</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-200 hover:border-primary-300 w-full h-32 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-black text-gray-300 group-hover:text-primary-600 transition-colors">LOGO</div>
                        <p class="text-xs text-gray-400 mt-1">Platinum Partner</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-200 hover:border-primary-300 w-full h-32 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-black text-gray-300 group-hover:text-primary-600 transition-colors">LOGO</div>
                        <p class="text-xs text-gray-400 mt-1">Platinum Partner</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gold Sponsors -->
        <div class="mb-16">
            <h3 class="text-center text-lg font-semibold text-gray-700 mb-6">Gold Sponsors</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 items-center justify-items-center">
                <div class="group bg-gray-50 rounded-lg p-6 hover:bg-white hover:shadow-lg transition-all duration-300 border border-gray-200 hover:border-indigo-300 w-full h-24 flex items-center justify-center">
                    <div class="text-2xl font-bold text-gray-300 group-hover:text-indigo-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-6 hover:bg-white hover:shadow-lg transition-all duration-300 border border-gray-200 hover:border-indigo-300 w-full h-24 flex items-center justify-center">
                    <div class="text-2xl font-bold text-gray-300 group-hover:text-indigo-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-6 hover:bg-white hover:shadow-lg transition-all duration-300 border border-gray-200 hover:border-indigo-300 w-full h-24 flex items-center justify-center">
                    <div class="text-2xl font-bold text-gray-300 group-hover:text-indigo-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-6 hover:bg-white hover:shadow-lg transition-all duration-300 border border-gray-200 hover:border-indigo-300 w-full h-24 flex items-center justify-center">
                    <div class="text-2xl font-bold text-gray-300 group-hover:text-indigo-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-6 hover:bg-white hover:shadow-lg transition-all duration-300 border border-gray-200 hover:border-indigo-300 w-full h-24 flex items-center justify-center">
                    <div class="text-2xl font-bold text-gray-300 group-hover:text-indigo-600 transition-colors">LOGO</div>
                </div>
            </div>
        </div>

        <!-- Silver & Community Partners -->
        <div>
            <h3 class="text-center text-base font-semibold text-gray-600 mb-6">Community Partners</h3>
            <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-8 gap-4 items-center justify-items-center">
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
                <div class="group bg-gray-50 rounded-lg p-4 hover:bg-white hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-purple-200 w-full h-20 flex items-center justify-center">
                    <div class="text-lg font-semibold text-gray-300 group-hover:text-purple-600 transition-colors">LOGO</div>
                </div>
            </div>
        </div>

       
    </div>
</section>

<!-- Tech Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('techCanvas');
        const ctx = canvas.getContext('2d');

        let w, h;
        let particles = [];
        let circuitLines = [];
        let floatingIcons = [];

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }

        class Particle {
            constructor() {
                this.x = Math.random() * w;
                this.y = Math.random() * h;
                this.vx = (Math.random() - 0.5) * 0.5;
                this.vy = (Math.random() - 0.5) * 0.5;
                this.radius = Math.random() * 2 + 1;
                this.opacity = Math.random() * 0.5 + 0.3;
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > w) this.vx *= -1;
                if (this.y < 0 || this.y > h) this.vy *= -1;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.fill();
            }
        }

        class CircuitLine {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * w;
                this.y = Math.random() * h;
                this.length = Math.random() * 100 + 50;
                this.angle = Math.random() * Math.PI * 2;
                this.speed = Math.random() * 0.5 + 0.2;
                this.opacity = 0;
                this.growing = true;
            }

            update() {
                if (this.growing) {
                    this.opacity += 0.01;
                    if (this.opacity >= 0.3) this.growing = false;
                } else {
                    this.opacity -= 0.005;
                    if (this.opacity <= 0) this.reset();
                }
            }

            draw() {
                ctx.save();
                ctx.translate(this.x, this.y);
                ctx.rotate(this.angle);
                
                ctx.strokeStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.lineWidth = 1;
                
                ctx.beginPath();
                ctx.moveTo(0, 0);
                ctx.lineTo(this.length, 0);
                ctx.stroke();
                
                ctx.beginPath();
                ctx.arc(this.length, 0, 3, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.fill();
                
                ctx.restore();
            }
        }

        class FloatingIcon {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * w;
                this.y = h + 50;
                this.size = Math.random() * 30 + 20;
                this.speed = Math.random() * 0.3 + 0.1;
                this.opacity = Math.random() * 0.2 + 0.1;
                this.rotation = Math.random() * Math.PI * 2;
                this.rotationSpeed = (Math.random() - 0.5) * 0.02;
                this.type = Math.floor(Math.random() * 4);
            }

            update() {
                this.y -= this.speed;
                this.rotation += this.rotationSpeed;
                
                if (this.y < -50) this.reset();
            }

            draw() {
                ctx.save();
                ctx.translate(this.x, this.y);
                ctx.rotate(this.rotation);
                ctx.globalAlpha = this.opacity;
                
                ctx.strokeStyle = 'rgba(255, 255, 255, 0.6)';
                ctx.lineWidth = 2;
                
                const s = this.size / 2;
                
                switch(this.type) {
                    case 0:
                        ctx.strokeRect(-s, -s, this.size, this.size);
                        ctx.beginPath();
                        for(let i = -s; i < s; i += s/2) {
                            ctx.moveTo(-s-5, i);
                            ctx.lineTo(-s, i);
                            ctx.moveTo(s, i);
                            ctx.lineTo(s+5, i);
                        }
                        ctx.stroke();
                        break;
                    case 1:
                        ctx.beginPath();
                        for(let i = 0; i < 8; i++) {
                            const angle = (Math.PI * 2 / 8) * i;
                            const x1 = Math.cos(angle) * s;
                            const y1 = Math.sin(angle) * s;
                            const x2 = Math.cos(angle + 0.2) * (s * 0.7);
                            const y2 = Math.sin(angle + 0.2) * (s * 0.7);
                            ctx.moveTo(x1, y1);
                            ctx.lineTo(x2, y2);
                        }
                        ctx.arc(0, 0, s * 0.4, 0, Math.PI * 2);
                        ctx.stroke();
                        break;
                    case 2:
                        ctx.beginPath();
                        ctx.arc(0, 0, s, 0, Math.PI * 2);
                        ctx.stroke();
                        for(let i = 0; i < 6; i++) {
                            const angle = (Math.PI * 2 / 6) * i;
                            ctx.moveTo(0, 0);
                            ctx.lineTo(Math.cos(angle) * s, Math.sin(angle) * s);
                        }
                        ctx.stroke();
                        break;
                    case 3:
                        ctx.font = `${this.size}px monospace`;
                        ctx.fillStyle = 'rgba(255, 255, 255, 0.6)';
                        ctx.fillText(Math.random() > 0.5 ? '1' : '0', -s/2, s/2);
                        break;
                }
                
                ctx.restore();
            }
        }

        function init() {
            resize();
            
            for (let i = 0; i < 80; i++) {
                particles.push(new Particle());
            }
            
            for (let i = 0; i < 15; i++) {
                circuitLines.push(new CircuitLine());
            }
            
            for (let i = 0; i < 12; i++) {
                floatingIcons.push(new FloatingIcon());
            }
        }

        function drawConnections() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    
                    if (dist < 150) {
                        const opacity = (1 - dist / 150) * 0.2;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = `rgba(255, 255, 255, ${opacity})`;
                        ctx.lineWidth = 0.5;
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            ctx.clearRect(0, 0, w, h);
            
            floatingIcons.forEach(icon => {
                icon.update();
                icon.draw();
            });
            
            circuitLines.forEach(line => {
                line.update();
                line.draw();
            });
            
            drawConnections();
            
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            
            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', resize);
        init();
        animate();
    });
</script>
@endsection