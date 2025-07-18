<?php
/*
Template Name: Funnel Landing page Diazepam by S
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diazepam - A Calmer Life</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        'poppins': ['Poppins', 'system-ui', '-apple-system', 'sans-serif']
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'slide-in-right': 'slideInRight 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.6s ease-out forwards',
                        'pulse': 'pulse 2s cubic-bezier(0.4,0,0.6,1) infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.95)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', system-ui, -apple-system, sans-serif;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.025em;
        }
        .animate-delay-1 { animation-delay: 0.1s; }
        .animate-delay-2 { animation-delay: 0.2s; }
        .animate-delay-3 { animation-delay: 0.3s; }
        .animate-delay-4 { animation-delay: 0.4s; }
        .animate-delay-5 { animation-delay: 0.5s; }
    </style>
</head>
<body class="bg-white text-gray-900 font-inter">

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-white pt-8 pb-16 sm:pt-16 sm:pb-24">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-50/50 to-blue-50/30"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-20 items-center">
                <div class="order-2 lg:order-1 text-center lg:text-left">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-slate-900 leading-[1.1] mb-6 sm:mb-8 tracking-tight px-2 sm:px-0">
                        “I Was Hiding Panic Attacks From Everyone.<br> I Thought I Was Going Crazy.”
                    </h1>
                    <p class="text-lg sm:text-xl lg:text-2xl text-slate-600 mb-8 sm:mb-10 leading-relaxed font-light max-w-2xl mx-auto lg:mx-0 px-2 sm:px-0">
                        <span class="font-semibold text-slate-900">How One Simple Pill Helped Me Sleep, Calm Down, and Take Control of My Life Again</span>
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 sm:gap-6 mb-8 sm:mb-10">
                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <div class="text-slate-600 text-base sm:text-lg text-center sm:text-left">
                            <span class="font-bold text-slate-900">4,219 Reviews</span>
                        </div>
                    </div>
                    <div class="bg-slate-900 text-white p-4 sm:p-6 lg:p-8 rounded-xl sm:rounded-2xl mb-8 sm:mb-10 shadow-xl mx-2 sm:mx-0">
                        <div class="flex flex-col items-center gap-4 sm:gap-6">
                            <div class="text-center">
                                <p class="text-slate-300 text-xs sm:text-sm font-medium mb-2 uppercase tracking-wider">Limited Time Offer</p>
                                <div class="flex items-baseline gap-2 sm:gap-4 justify-center flex-wrap">
                                    <span class="text-2xl sm:text-3xl lg:text-4xl font-bold">29,95€</span>
                                    <span class="text-lg sm:text-xl lg:text-2xl line-through text-slate-400">59,95€</span>
                                    <span class="bg-red-500 text-white px-2 sm:px-4 py-1 sm:py-2 rounded-lg text-xs sm:text-sm font-bold">50% OFF</span>
                                </div>
                            </div>
                            <div class="text-center flex flex-col sm:flex-row gap-2 sm:gap-4">
                                <p class="text-slate-300 text-sm font-medium">FREE Shipping</p>
                                <p class="text-slate-300 text-sm font-medium">60-Day Money Back</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3 sm:space-y-4 px-2 sm:px-0">
                        <button onclick="orderNow()" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg sm:text-xl px-6 sm:px-10 py-4 sm:py-5 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                            ORDER NOW 50% OFF DIAZEPAM
                        </button>
                        <p class="text-xs sm:text-sm text-slate-500 text-center">Only a few packs left in stock</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2 px-4 sm:px-0">
                    <div class="relative">
                        <img src="https://tharavix.com/wp-content/uploads/2025/06/Screenshot-2025-06-04-at-02.36.42.png" alt="Diazepam Video" class="relative w-full rounded-xl sm:rounded-2xl shadow-2xl">
                        <div class="absolute -top-2 -right-2 sm:-top-4 sm:-right-4 bg-white rounded-lg sm:rounded-xl p-2 sm:p-4 shadow-lg border border-slate-100">
                            <div class="text-center">
                                <div class="text-lg sm:text-2xl font-bold text-slate-900">7-14</div>
                                <div class="text-xs sm:text-sm text-slate-600 font-medium">Days to Reset</div>
                            </div>
                        </div>
                        <div class="absolute -bottom-2 -left-2 sm:-bottom-4 sm:-left-4 bg-emerald-500 text-white rounded-lg sm:rounded-xl p-2 sm:p-4 shadow-lg">
                            <div class="text-center">
                                <div class="text-xs sm:text-sm font-bold">✓ FDA Approved</div>
                                <div class="text-[10px] sm:text-xs opacity-90">Safe & Effective</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctor Endorsement -->
    <section class="py-12 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl shadow-xl p-6 lg:p-8 border border-blue-100 animate-fade-in">
                    <div class="flex flex-col sm:flex-row items-start gap-6">
                        <div class="flex-shrink-0">
                            <img src="https://img.funnelish.com/10873/418096/1729309106-Capture%20d%E2%80%99e%CC%81cran%202024-10-19%20a%CC%80%2004.37.57.png" alt="Dr. John Brown" class="w-20 h-20 lg:w-24 lg:h-24 rounded-full border-4 border-blue-200 shadow-lg">
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start justify-between mb-4">
                                <div>
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900">Dr. John Brown</h3>
                                    <p class="text-indigo-600 font-medium">Psychiatrist • Chicago</p>
                                </div>
                                <div class="bg-gradient-to-r from-green-100 to-emerald-100 px-3 py-1 rounded-full">
                                    <span class="text-green-800 text-sm font-semibold">✓ Verified</span>
                                </div>
                            </div>
                            <blockquote class="text-gray-700 text-lg leading-relaxed italic">
                                <span class="text-4xl text-indigo-300 leading-none">"</span>
                                Most patients think it's stress or caffeine. But it's usually an overactive nervous system and Diazepam calms that fast.
                                <span class="text-4xl text-indigo-300 leading-none">"</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Awareness -->
    <section class="py-16 lg:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="animate-fade-in">
                    <div class="inline-flex items-center gap-2 bg-red-100 px-4 py-2 rounded-full mb-6">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <span class="text-red-800 font-semibold text-sm">Do You Struggle?</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-6">
                        😨 Do You Feel Anxious, Sleepless, or On Edge?
                    </h2>
                    <div class="space-y-6 mb-8">
                        <p class="text-xl text-gray-700 leading-relaxed">
                            I looked fine on the outside. But inside? I was panicking chest tight, thoughts racing, and sleep impossible.
                        </p>
                        <p class="text-xl text-gray-700 leading-relaxed">If your brain won’t shut off at night…</p>
                        <p class="text-xl text-gray-700 leading-relaxed">If you feel wired but exhausted every day…</p>
                        <p class="text-xl text-gray-700 leading-relaxed">If natural remedies haven’t worked…</p>
                        <p class="text-xl text-gray-700 leading-relaxed">You’re not alone. And you’re not broken.</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Constant overthinking</li>
                            <li>Panic attacks or tight chest</li>
                            <li>Restless sleep or insomnia</li>
                            <li>Unexplained irritability or dread</li>
                            <li>Feeling exhausted but unable to rest</li>
                        </ul>
                    </div>
                    <p class="text-xl text-gray-700 mb-6">Diazepam helped me feel normal again. It could help you too.</p>
                    <button onclick="orderNow()" class="w-full sm:w-auto bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">CLAIM YOUR 50% DISCOUNT</button>
                    <p class="text-xs sm:text-sm text-gray-500 text-center mt-4">Quick! Only 7 pieces left!</p>
                </div>
                <div class="animate-slide-in-right">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-red-400 to-orange-500 rounded-3xl blur-2xl opacity-20"></div>
                        <img src="https://tharavix.com/wp-content/uploads/2025/06/1-15.webp" alt="Anxiety" class="relative w-full rounded-3xl shadow-2xl border-4 border-white">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Diazepam -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <div class="animate-fade-in">
                    <img src="https://tharavix.com/wp-content/uploads/2025/04/GIF-2-1.gif" alt="Diazepam" class="w-full rounded-3xl shadow-2xl border-4 border-green-200">
                </div>
                <div class="animate-slide-in-right">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-6 font-poppins">
                        💊 What is <span class="bg-gradient-to-r from-green-500 to-emerald-600 bg-clip-text text-transparent">Diazepam</span> and Why It Works So Fast
                    </h2>
                    <p class="text-xl text-gray-700 mb-6 leading-relaxed">Diazepam (Valium) is a prescription medication used to calm the nervous system and promote fast relief.</p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3 animate-scale-in"><div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white text-sm font-bold">✓</span></div><span class="text-gray-700 font-medium">Stops panic and fear within 30–60 minutes</span></div>
                        <div class="flex items-center gap-3 animate-scale-in animate-delay-1"><div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white text-sm font-bold">✓</span></div><span class="text-gray-700 font-medium">Promotes restful, uninterrupted sleep</span></div>
                        <div class="flex items-center gap-3 animate-scale-in animate-delay-2"><div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white text-sm font-bold">✓</span></div><span class="text-gray-700 font-medium">Relieves anxiety, muscle tension, and overthinking</span></div>
                        <div class="flex items-center gap-3 animate-scale-in animate-delay-3"><div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white text-sm font-bold">✓</span></div><span class="text-gray-700 font-medium">Doctor-approved and clinically proven</span></div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-8">It’s not a vitamin. It’s real, fast, medical relief used safely by millions.</p>
                    <button onclick="orderNow()" class="w-full sm:w-auto bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">CLAIM YOUR 50% DISCOUNT</button>
                    <p class="text-xs sm:text-sm text-gray-500 text-center mt-4">Quick! Only 7 pieces left!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Others Fail -->
    <section class="py-16 lg:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="order-2 lg:order-1 animate-slide-in-right">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-red-400 to-orange-500 rounded-3xl blur-2xl opacity-20"></div>
                        <img src="https://tharavix.com/wp-content/uploads/2025/04/di2.webp" alt="Remedies fail" class="relative w-full rounded-3xl shadow-2xl border-4 border-white">
                    </div>
                </div>
                <div class="order-1 lg:order-2 animate-fade-in">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 leading-tight mb-6">
                        ❌ Why Other Remedies Don’t Work
                    </h2>
                    <p class="text-xl text-gray-700 leading-relaxed mb-6">Melatonin helps jet lag, not panic. Breathing apps don’t silence 2AM spirals. Herbal teas don’t stop chest-tight fear.</p>
                    <blockquote class="bg-orange-50 border-l-4 border-orange-400 p-4 rounded-r-xl italic mb-4">"Diazepam targets the root – an overactive nervous system – not just symptoms."<br><strong>Dr. Brown</strong></blockquote>
                    <button onclick="orderNow()" class="w-full sm:w-auto bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">CLAIM YOUR 50% DISCOUNT</button>
                    <p class="text-xs sm:text-sm text-gray-500 text-center mt-4">Quick! Only 7 pieces left!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="py-16 bg-gradient-to-br from-emerald-50 to-green-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-4 font-poppins">✅ Top Benefits of <span class="bg-gradient-to-r from-green-500 to-emerald-600 bg-clip-text text-transparent">Diazepam</span></h2>
                <div class="w-20 h-1 bg-green-500 mx-auto rounded"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 animate-scale-in border border-green-100">
                    <div class="text-4xl mb-4 text-center">🔥</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3 text-center">Fast-Acting</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Feel calm within 30–60 minutes</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 animate-scale-in animate-delay-1 border border-green-100">
                    <div class="text-4xl mb-4 text-center">😌</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3 text-center">Stops Panic</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Block spirals before they begin</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 animate-scale-in animate-delay-2 border border-green-100">
                    <div class="text-4xl mb-4 text-center">💉</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3 text-center">Sleep Better</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Fall asleep and stay asleep</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 animate-scale-in animate-delay-3 border border-green-100">
                    <div class="text-4xl mb-4 text-center">💪</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3 text-center">Eases Tension</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Muscle and nerve relaxation</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 animate-scale-in animate-delay-4 border border-green-100">
                    <div class="text-4xl mb-4 text-center">👨‍⚕️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3 text-center">Doctor-Recommended</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Trusted worldwide for 60+ years</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="py-16 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <div class="animate-fade-in">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-6 font-poppins">🧠 How Diazepam Works in Your Brain
                    </h2>
                    <p class="text-xl text-gray-700 mb-6 leading-relaxed">Diazepam boosts GABA your brain’s natural calming chemical. It slows down overactivity, helping you breathe easier and feel still again.</p>
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-blue-200 mb-8">
                        <p class="text-gray-700">
                            🧠 Thoughts quiet down<br/>
                            🡣 Breathing eases<br/>
                            😴 Sleep comes naturally<br/>
                            😌 Body finally relaxes
                        </p>
                    </div>
                    <button onclick="orderNow()" class="w-full sm:w-auto bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">CLAIM YOUR 50% DISCOUNT</button>
                    <p class="text-xs sm:text-sm text-gray-500 text-center mt-4">Quick! Only 7 pieces left!</p>
                </div>
                <div class="animate-slide-in-right">
                    <img src="https://tharavix.com/wp-content/uploads/2025/04/GIF-3-2.gif" alt="How Diazepam works" class="w-full rounded-3xl shadow-2xl border-4 border-blue-200">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 sm:py-16 lg:py-20 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 mb-4 sm:mb-6 px-4">Real People. <span class="text-blue-600">Real Calm.</span></h2>
            </div>
            <div class="space-y-6 sm:space-y-8 max-w-3xl mx-auto">
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8 shadow-sm border border-slate-200">
                    <blockquote class="text-slate-700 leading-relaxed text-base mb-3">"My anxiety ruled my life. Diazepam gave me my calm back within minutes."</blockquote>
                    <div class="text-sm text-gray-600">Claudia V., 39, Hamburg</div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8 shadow-sm border border-slate-200">
                    <blockquote class="text-slate-700 leading-relaxed text-base mb-3">"Nothing else worked. Diazepam helped me sleep again after months of hell."</blockquote>
                    <div class="text-sm text-gray-600">Marco D., 46, Milan</div>
                </div>
                <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8 shadow-sm border border-slate-200">
                    <blockquote class="text-slate-700 leading-relaxed text-base mb-3">"I used to fake being okay. Diazepam made me actually feel okay."</blockquote>
                    <div class="text-sm text-gray-600">Emily P., 29, Dublin</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center animate-fade-in">
                <img src="https://tharavix.com/wp-content/uploads/2025/04/di6.png" alt="Order Diazepam" class="w-full max-w-2xl mx-auto mb-8 rounded-xl border-4 border-[#7e9469]">
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6 font-poppins">LIMITED TIME OFFER</h2>
                <p class="text-xl text-gray-700 mb-6">Try Diazepam today for just <strong>29,95€</strong> (Retail 59,95€)</p>
                <ul class="space-y-3 mb-8 max-w-md mx-auto text-left">
                    <li class="flex items-start gap-3 animate-scale-in"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Free Shipping 📦</span></li>
                    <li class="flex items-start gap-3 animate-scale-in animate-delay-1"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Discreet Packaging</span></li>
                    <li class="flex items-start gap-3 animate-scale-in animate-delay-2"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Secure Checkout</span></li>
                    <li class="flex items-start gap-3 animate-scale-in animate-delay-3"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">⏳ Only 7 Packs Left</span></li>
                </ul>
                <button onclick="orderNow()" class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">ORDER NOW 50% OFF DIAZEPAM</button>
                <p class="mt-4 bg-yellow-300 text-black px-4 py-2 rounded-lg font-bold text-lg inline-block">Quick! Only 7 pieces left!</p>
            </div>
        </div>
    </section>

    <!-- How to Order -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 mb-4 sm:mb-6 px-4">How to <span class="text-blue-600">Order</span></h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <div class="relative text-center group">
                    <div class="relative z-10 bg-white border-2 border-slate-100 rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-blue-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m8.5-5l2.5 5M9 21V9a2 2 0 012-2h2a2 2 0 012 2v12"/></svg>
                        </div>
                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-slate-900 text-white rounded-full flex items-center justify-center text-sm font-bold mx-auto mb-3 sm:mb-4">1</div>
                        <h3 class="font-bold text-slate-900 text-base sm:text-lg mb-2 sm:mb-3">Click Order Now</h3>
                        <p class="text-slate-600 leading-relaxed text-sm sm:text-base">Your 50% discount applies automatically at checkout</p>
                    </div>
                </div>
                <div class="relative text-center group">
                    <div class="relative z-10 bg-white border-2 border-slate-100 rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-blue-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-slate-900 text-white rounded-full flex items-center justify-center text-sm font-bold mx-auto mb-3 sm:mb-4">2</div>
                        <h3 class="font-bold text-slate-900 text-base sm:text-lg mb-2 sm:mb-3">Secure Checkout</h3>
                        <p class="text-slate-600 leading-relaxed text-sm sm:text-base">Encrypted payment in under 2 minutes</p>
                    </div>
                </div>
                <div class="relative text-center group">
                    <div class="relative z-10 bg-white border-2 border-slate-100 rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-blue-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-slate-900 text-white rounded-full flex items-center justify-center text-sm font-bold mx-auto mb-3 sm:mb-4">3</div>
                        <h3 class="font-bold text-slate-900 text-base sm:text-lg mb-2 sm:mb-3">Choose Quantity</h3>
                        <p class="text-slate-600 leading-relaxed text-sm sm:text-base">Select the package that works best for you</p>
                    </div>
                </div>
                <div class="relative text-center group">
                    <div class="relative z-10 bg-white border-2 border-slate-100 rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-blue-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <div class="w-6 h-6 sm:w-8 sm:h-8 bg-slate-900 text-white rounded-full flex items-center justify-center text-sm font-bold mx-auto mb-3 sm:mb-4">4</div>
                        <h3 class="font-bold text-slate-900 text-base sm:text-lg mb-2 sm:mb-3">Fast Delivery</h3>
                        <p class="text-slate-600 leading-relaxed text-sm sm:text-base">Shipped discreetly to your door</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety Info -->
    <section class="py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-start gap-8 lg:gap-12">
                <div class="w-full lg:w-1/2 animate-fade-in">
                    <img src="https://tharavix.com/wp-content/uploads/2025/04/di2.webp" alt="Safety" class="w-full rounded-xl border-4 border-[#7e9469] shadow-lg">
                </div>
                <div class="w-full lg:w-1/2 animate-slide-in-right">
                    <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6 font-poppins">⚠️ Important Safety Info
                    </h2>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 animate-scale-in"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Prescription medication: use only as directed by a licensed professional.</span></li>
                        <li class="flex items-start gap-3 animate-scale-in animate-delay-1"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Short-term use only: 7–14 days maximum.</span></li>
                        <li class="flex items-start gap-3 animate-scale-in animate-delay-2"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Do not mix with alcohol or other sedatives.</span></li>
                        <li class="flex items-start gap-3 animate-scale-in animate-delay-3"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Possible side effects: dry mouth, dizziness, mild drowsiness.</span></li>
                        <li class="flex items-start gap-3 animate-scale-in animate-delay-4"><span class="text-[#7e9469] text-xl">✔</span><span class="text-gray-700 font-medium">Always consult your doctor before starting any new medication.</span></li>
                    </ul>
                    <button onclick="orderNow()" class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">CLAIM YOUR 50% DISCOUNT</button>
                    <p class="text-xs sm:text-sm text-gray-500 text-center mt-4">Quick! Only 7 pieces left!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto animate-fade-in">
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6 font-poppins">🕐 Don’t Wait For Your Next Breakdown
                </h2>
                <p class="text-xl text-gray-700 mb-8 leading-relaxed">You’ve been pretending everything’s fine. Powering through. But the panic attacks and restless nights are real.</p>
                <p class="text-xl text-gray-700 mb-8 leading-relaxed"><strong>Diazepam helped me feel human again. It can help you too.</strong></p>
                <button onclick="orderNow()" class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-black text-lg px-8 py-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">Try Diazepam Now 50% OFF</button>
            </div>
        </div>
    </section>

    <script>
        function orderNow() {
            const cartData = [{
                id: "Diazepam1",
                name: "Diazepam",
                currencySymbol: "$",
                price: "79.95",
                quantity: 1,
                variation: "Quantity1",
                websitename: "DiazepamFunnel"
            }];
            const queryParams = new URLSearchParams();
            queryParams.set('cartData', JSON.stringify(cartData));
            const apiUrl = 'https://tharaviix.com/api.php?' + queryParams.toString();
            window.location.href = apiUrl;
        }
    </script>

</body>
<?php get_footer(); ?>
</html>
