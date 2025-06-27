<?php
/*
Template Name: Funnel Landing page Diazapem by S
*/
get_header();
?>
<!-- Styles -->
<style>
    .container:has(.custom-breadcrumb-wrapper) {
  display: none !important;
}
    .strong {
    font-weight: 900 !important;
}
	* {
    font-family: 'Poppins', sans-serif;
}
    .xoo-wsc-markup{
		display: none !important;
	}
	header{
		display: none !important;
	}
	
	footer{
		display: none !important;
	}
  :root {
    --primary: #7e9469;
    --dark: #222;
    --light: #f7f7f7;
    --text: #333;
    --font-heading: 'Poppins', sans-serif;
    --font-body:    'Inter',    'Helvetica Neue', Arial, sans-serif;
  }
  body {
    margin: 0;
    padding: 0 0 100px;
    font-family: var(--font-body);
    color: var(--text);
    background: var(--light);
  }
  h1, h2, h3 {
    font-family: var(--font-heading);
  }
  .container {
    max-width: 1170px;
    margin: auto;
    padding: 20px;
  }

  img.sectionImg {
    border-width: 5px;
    border-style: solid;
    border-color: rgb(126, 148, 105);
    border-radius: 10px;
}

  /* Buttons */
  .btn {
    font-family: var(--font-heading);
    background: var(--primary);
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 20px 30px;
    font-size: 1em;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    font-weight: 900;
  }
  .btn:hover {
    opacity: 0.9;
  }

  /* limit Warning text */
  p.limitWarn span {
    color: #d0021b;
    font-weight: 900;
}

p.limitWarn {
    background: yellow;
    display: inline-block;
    margin-top: 10px;
    font-size: 19px;
    font-style: italic;
}

  /* Top Section */
  .top-section {
    display: flex
;
    flex-wrap: wrap;
    align-items: flex-start;
    gap: 20px;
    /* background: #fff; */
    /* border-radius: 10px; */
    /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); */
    /* padding: 20px; */
    /* margin: 40px 0; */
    align-content: flex-start;
}
.icon-item {
    width: 33.33%;
}
  .top-section .left,
  .top-section .right {
    flex: 1 1 300px;
  }
  .top-section .left img {
    width: 100%;
    border-radius: 10px;
  }
  .top-section .right h1 {
    font-size: 40px;
    margin-bottom: 10px;
    color: var(--dark);
    font-weight: 900;
}
  .top-section .right h2 {
    font-size: 2.5em;
    margin-bottom: 10px;
    font-weight: 900;
  }
  .highlight {
    background: #ffbf00;
    padding: 0 4px;
  }
  .stars {
    display: flex;
    align-items: center;
    margin: 26px 0;
}
.stars img {
    height: 25px;
    margin-right: 11px;
}
  .stars span {
    font-size: 1em;
    color: #555;
  }
  .price {
    font-size: 1.2em;
    font-weight: bold;
    color: var(--dark);
    margin-bottom: 0;
  }

  /* Floating CTA */
  .fixed-cta {
    text-align: center;
    margin-top: 20px;
  }
  .fixed-cta .btn {
    border-radius: 50px;
    padding: 20px 30px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }

  /* Icon Row */
  .icon-row {
    display: flex;
    justify-content: space-around;
    text-align: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    padding: 15px;
    margin: 15px 0px;
}
  .icon-item img {
    width: 40px;
    margin-bottom: 6px;
  }
  .icon-item p {
    margin: 0;
    font-size: 0.9em;
    font-weight:bold;
  }

  /* Doctor Card */
  .doctor-card {
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    padding: 15px;
    margin-bottom: 40px;
  }
  .doctor-card img.profile {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 15px;
  }
  .doctor-card .doc-info h3 {
    margin: 0 0 4px;
    font-size: 1em;
  }
  .doctor-card .doc-info a {
    display: block;
    margin-bottom: 8px;
    color: var(--primary);
    text-decoration: none;
    font-size: 0.8em;
  }
  .doctor-card blockquote {
    font-style: italic;
    margin: 0;
    color: #555;
    font-size: 0.9em;
  }

  /* Generic Section */
  .section {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    gap: 40px;
    padding: 30px 0;
  }
  .section:nth-child(even) .image-wrapper {
    order: 2;
  }
  .image-wrapper,
  .text-wrapper {
    flex: 1 1 400px;
  }
  .section-image {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  }
  .section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
  }
  .section p {
    margin-bottom: 20px;
    font-size: 1.3em;
  }
  .checklist {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin:0px;
}
  .checklist li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 15px;
  }
  .checklist li::before {
    content: '✔';
    position: absolute;
    left: 0;
    top: 0;
    color: var(--primary);
  }

  /* Benefits Grid */
  .benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
    gap: 30px;
    width: 100%;
  }
  .benefit-card {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    text-align: center;
  }
  .benefit-card h3 {
    margin-bottom: 10px;
    color: var(--primary);
    
  }

  /* Testimonials */
  .testimonials {
    display: grid;
    gap: 30px;
    width: 100%;
  }
  .testimonial {
    background: #f0faf2;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}
  .testimonial p {
    font-style: italic;
    margin-bottom: 15px;
  }
  .testimonial span {
    font-weight: bold;
  }

  /* Order Section */
  .order-section {
    text-align: center;
    background: #fff;
    padding: 15px 20px;
    padding-bottom:0px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);

  }
  .order-section ul {
    display: flex;
    align-items: center;
    justify-content: center;
}
  .order-section img {
    max-width: 656px;
    margin-bottom: 20px;
    width: 100%;
  }
  .order-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
  }


  /* Steps */
  .steps {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin: 40px 0;
    justify-content: center;
  }
  .step {
    flex: 1 1 200px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    text-align: center;
  }
  .step h3 {
    margin-bottom: 10px;
    color: var(--primary);
    font-weight: 700;
  }

  /* Conclusion CTA */
  .conclusion {
    text-align: center;
    padding: 15px 20px;
    width: 78%;
    margin: 0 auto;
}

  /* Fixed Footer */
  .fixed-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #fff;
    padding: 20px;
    box-shadow: 0 -4px 12px rgba(0,0,0,0.1);
    text-align: center;
  }
  .fixed-footer .btn {
    padding: 20px 30px;
  }

  /* Responsive breakpoints */

  /* Up to 992px (large desktops / small laptops) */
  @media (max-width: 992px) {
    .top-section,
    .section {
      flex-direction: column !important;
      padding: 20px 10px !important;
    }
    .top-section .right h1 {
        font-size: 37px !important;
        font-weight: 900 !important;
        line-height: 40px !important;
        letter-spacing: -1px;
}
    .text-wrapper {
    width: 100%;
}
    html body .reverse{
    flex-direction: column-reverse !important;
  }
    .doctor-card,
    .icon-row {
      justify-content: center !important;
    }
    .fixed-footer .btn,
    .fixed-cta .btn {
        width: 100% !important;
        max-width: none !important;
        font-size: 10px;
        display: inline-block;
    }
    .order-section img {
    max-width: 100% !important;
    width: 100%;
  }
  .order-section ul{
    margin:0px !important;
  }
  .conclusion {
    width: 100% !important;
}
.step {
    margin-bottom: 10px;
}
button.btn {
    font-size: 16px !important;
}
.testimonial {
    margin-bottom: 10px;
}
  }

  /* Up to 768px (tablets) */
  @media (max-width: 768px) {
    .top-section .left,
    .top-section .right,
    .image-wrapper,
    .text-wrapper {
      flex: 1 1 100% !important;
    }
    .doctor-card{
        margin-bottom: 0px !important;
    }
    .order-section {
    background: none !important;
    margin: 0px !important;
}
    .benefits-grid {
      grid-template-columns: 1fr !important;
    }
    .steps,
    .testimonials {
      display: block !important;
    }
    .btn {
      width: 100% !important;
      margin: 10px 0 !important;
    }
    h2 {
        font-size: 2.3em !important;
        line-height: 38px;
    }
    .section p {
    font-size: 1.1em !important;
    line-height: 19px !important;
}
    
  }

  /* Up to 576px (phones) */
  @media (max-width: 576px) {
    
    .section {
      padding: 15px 5px !important;
      gap: 15px !important;
    }
    .checklist li {
      margin: 8px 0 !important;
      padding-left: 20px !important;
    }
    .price { font-size: 1em !important; }
  }
</style>
<style>
  /* ————————— TESTIMONIALS ————————— */
    .testimonials {
      padding: 80px 16px 40px;
      background: #faf9ff;
      text-align: center;
      max-width: 900px;
      margin: 0 auto 120px;
    }
    .testimonials h2 {
      font-size: 2.4rem;
      color: #42134d;
      margin-bottom: 32px;
      text-transform: uppercase;
      letter-spacing: 1px;
      position: relative;
    }
    .testimonials h2::after {
      content: '';
      display: block;
      width: 80px;
      height: 4px;
      background: #7e9469;
      margin: 8px auto 0;
      border-radius: 2px;
    }
    .testimonial-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: center;
    }
    @media (max-width: 600px) {
      /* switch to two-column grid on phones */
      .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
        overflow: visible;
        padding-bottom: 0;
      }
    }
    .testimonial-card {
      background: #fff;
      border: 3px solid #eee;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.05);
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
      width: 220px;
      cursor: pointer;
    }
    .testimonial-card:hover {
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 12px 32px rgba(0,0,0,0.1);
      border-color: #7e9469;
    }
    .testimonial-card img {
      width: 100%;
      display: block;
      transition: transform .4s ease;
    }
    .testimonial-card:hover img {
      transform: scale(1.05);
    }

    /* ———————— LIGHTBOX/MODAL ———————— */
    .testimonial-modal {
      display: none;
      position: fixed;
      z-index: 2000;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.8);
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    .testimonial-modal.open { display: flex; }
    .testimonial-modal-content {
      max-width: 90%;
      max-height: 90%;
      border-radius: 8px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.5);
    }
    .testimonial-modal-close {
      position: absolute;
      top: 20px; right: 30px;
      font-size: 2.5rem;
      color: #fff;
      cursor: pointer;
      line-height: 1;
    }
    @media(max-width:768px){
      .testimonial-card{
        width: 100%;
      }
    }
</style>

<div class="container">

  <!-- Top Section -->
  <div class="top-section">
    <div class="left">
      <video class="sectionVideo" 
         src="https://tharavix.com/wp-content/uploads/2025/06/Diazepam-Revised-2.mp4" 
         controls 
         playsinline
		  poster="https://tharavix.com/wp-content/uploads/2025/06/Screenshot-2025-06-04-at-02.36.42.png"
         style="width: 100%;  object-fit: cover; display: block;">
    Your browser does not support the video tag.
  </video>
    </div>
    <div class="right">
      <h1>“I Was Hiding Panic Attacks From Everyone. I Thought I Was Going Crazy.”</h1>
      <h4 class="strong">
        <span class="highlight">How One Simple Pill Helped Me Sleep, Calm Down,</span> and Take Control of My Life Again
      </h4>
      <div class="stars">
        <img src="https://cdn.worldvectorlogo.com/logos/stars-5-1.svg" alt="5 stars">
        <span>(4,219 Verified Reviews)</span>
      </div>
      <div class="price">Now 50% OFF Just 29,95€ + Free Shipping 🚚</div>
      <div class="fixed-cta">
        <button class="btn" id="customCartBtn">👍 ORDER NOW 50% OFF DIAZEPAM</button>
      </div>

      <div class="icon-row">
        <div class="icon-item">
          <img src="https://img.funnelish.com/10101/169449/1700521948-shipped.png" alt="Free shipping">
          <p>Free shipping</p>
        </div>
        <div class="icon-item">
          <img src="https://img.funnelish.com/10101/169449/1700521944-guarantee%20%284%29.png" alt="Money back guarantee">
          <p>60-Day Money Back Guarantee</p>
        </div>
        <div class="icon-item">
          <img src="https://img.funnelish.com/10101/169449/1700521941-customer-service%20%282%29.png" alt="Customer service">
          <p>Only a few packs left in stock</p>
        </div>
      </div>

      <div class="doctor-card">
        <img class="profile" src="https://img.funnelish.com/10873/418096/1729309106-Capture%20d%E2%80%99e%CC%81cran%202024-10-19%20a%CC%80%2004.37.57.png" alt="Dr. John Brown">
        <div class="doc-info">
          <h3 class="strong">Dr. John Brown</h3>
          <a href="#">Psychiatrist, Chicago</a>
          <blockquote>
            “Most patients think it's stress or caffeine. But it's usually an overactive nervous system and Diazepam calms that fast.”
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <!-- 1. Do You Struggle? -->
  <section class="section reverse">
    <div class="image-wrapper">
      <img class="sectionImg" src="https://tharavix.com/wp-content/uploads/2025/06/1-15.webp" alt="Anxiety struggles">
    </div>
    <div class="text-wrapper">
      <h2 class="strong">😰 Do You Feel Anxious, Sleepless, or On Edge?</h2>
      <p>I looked fine on the outside. But inside? I was panicking chest tight, thoughts racing, and sleep impossible.</p>
      <p>If your brain won’t shut off at night…</p>
      <p>If you feel wired but exhausted every day…</p>
      <p>If natural remedies haven’t worked…</p>
      <p>You’re not alone. And you’re not broken.</p>
      <ul class="checklist">
        <li>Constant overthinking</li>
        <li>Panic attacks or tight chest</li>
        <li>Restless sleep or insomnia</li>
        <li>Unexplained irritability or dread</li>
        <li>Feeling exhausted but unable to rest</li>
      </ul>
      <p><strong>Diazepam helped me feel normal again. It could help you too.</strong></p>
      <div class="fixed-cta">
        <button class="btn" id="customCartBtn1">👍 CLAIM YOUR 50% DISCOUNT</button>
        <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
      </div>
    </div>
  </section>

  <!-- 2. What is Diazepam -->
  <section class="section">
    <div class="image-wrapper">
      <img class="sectionImg" src="https://tharavix.com/wp-content/uploads/2025/04/GIF-2-1.gif" alt="Diazepam Use">
    </div>
    <div class="text-wrapper">
      <h2 class="strong">💊 What is Diazepam and Why It Works So Fast</h2>
      <p>Diazepam (Valium) is a prescription medication used to calm the nervous system and promote fast relief.</p>
      <ul class="checklist">
        <li>Stops panic and fear within 30–60 minutes</li>
        <li>Promotes restful, uninterrupted sleep</li>
        <li>Relieves anxiety, muscle tension, and overthinking</li>
        <li>Doctor-approved and clinically proven</li>
      </ul>
      <p>It’s not a vitamin. It’s real, fast, medical relief used safely by millions.</p>
      <div class="fixed-cta">
        <button class="btn" id="customCartBtn2">✔️ CLAIM YOUR 50% DISCOUNT</button>
        <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
      </div>
    </div>
  </section>

  <!-- 3. Why Others Fail -->
  <section class="section reverse">
    <div class="image-wrapper">
      <img class="sectionImg" src="https://tharavix.com/wp-content/uploads/2025/04/di2.webp" alt="Natural solutions fail">
    </div>
    <div class="text-wrapper">
      <h2 class="strong">❌ Why Other Remedies Don’t Work</h2>
      <p>Melatonin helps jet lag not panic. Breathing apps don’t silence 2AM spirals. Herbal teas don’t stop chest-tight fear.</p>
      <blockquote>"Diazepam targets the root an overactive nervous system not just symptoms."</blockquote>
      <p><strong> Dr. Brown</strong></p>
      <div class="fixed-cta">
        <button class="btn" id="customCartBtn3">🛒 CLAIM YOUR 50% DISCOUNT</button>
        <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
      </div>
    </div>
  </section>

  <!-- 4. Top Benefits -->
  <section class="section" style="flex-direction: column; align-items: flex-start;">
    <h2 style="width:100%; text-align:center;" class="strong">✅ Top Benefits of Diazepam (Valium)</h2>
    <div class="benefits-grid">
      <div class="benefit-card"><h3 class="strong">⚡ Fast-Acting</h3><p>Feel calm within 30–60 minutes</p></div>
      <div class="benefit-card"><h3 class="strong">😌 Stops Panic</h3><p>Block spirals before they begin</p></div>
      <div class="benefit-card"><h3 class="strong">🛏️ Sleep Better</h3><p>Fall asleep and stay asleep</p></div>
      <div class="benefit-card"><h3 class="strong">💪 Eases Tension</h3><p>Muscle and nerve relaxation</p></div>
      <div class="benefit-card"><h3 class="strong">👨‍⚕️ Doctor-Recommended</h3><p>Trusted worldwide for 60+ years</p></div>
    </div>
  </section>

  <!-- 5. How It Works -->
  <section class="section">
    <div class="image-wrapper">
      <img class="sectionImg" src="https://tharavix.com/wp-content/uploads/2025/04/GIF-3-2.gif" alt="How Diazepam works">
    </div>
    <div class="text-wrapper">
      <h2 class="strong">🧠 How Diazepam Works in Your Brain</h2>
      <p>Diazepam boosts GABA your brain’s natural calming chemical. It slows down overactivity, helping you breathe easier and feel still again.</p>
      <p>🧠 Thoughts quiet down<br>🫁 Breathing eases<br>😴 Sleep comes naturally<br>😌 Body finally relaxes</p>
      <div class="fixed-cta">
        <button class="btn" id="customCartBtn4">🛒 CLAIM YOUR 50% DISCOUNT</button>
        <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
      </div>
    </div>
  </section>

  <!-- 6. Testimonials -->
  <section class="section" style="flex-direction: column; align-items: flex-start;">
    <h2 class="strong" style="width:100%; text-align:center;">💬 Real People. Real Calm.</h2>
    <div class="testimonials">
      <div class="testimonial"><p>“My anxiety ruled my life. Diazepam gave me my calm back within minutes.”</p><span> Claudia V., 39, Hamburg</span></div>
      <div class="testimonial"><p>“Nothing else worked. Diazepam helped me sleep again after months of hell.”</p><span> Marco D., 46, Milan</span></div>
      <div class="testimonial"><p>“I used to fake being okay. Diazepam made me actually feel okay.”</p><span> Emily P., 29, Dublin</span></div>
    </div>
  </section>

  <!-- 7. Offer -->
  <section class="order-section">
    <img class="sectionImg" src="https://tharavix.com/wp-content/uploads/2025/04/di6.png" alt="Order Diazepam">
    <h2 class="strong">LIMITED TIME OFFER</h2>
    <p>Try Diazepam today for just <strong>29,95€</strong> (Retail 59,95€)</p>
    <ul class="checklist">
      <li>Free Shipping 📦</li>
      <li>Discreet Packaging</li>
      <li>Secure Checkout</li>
      <li><strong>⏳ Only 7 Packs Left</strong></li>
    </ul>
    <div class="fixed-cta">
      <button class="btn" id="customCartBtn5">🛒 ORDER NOW 50% OFF DIAZEPAM</button>
      <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
    </div>
  </section>

  <!-- 8. How to Order -->
  <section class="conclusion">
    <h2 class="strong">🛒 How To Order</h2>
    <div class="steps">
      <div class="step"><h3>1. Click the Button</h3><p>Your discount applies automatically</p></div>
      <div class="step"><h3>2. Secure Checkout</h3><p>Encrypted, fast & discreet</p></div>
      <div class="step"><h3>3. Choose Quantity</h3><p>Select your pack and confirm</p></div>
      <div class="step"><h3>4. Delivered Fast</h3><p>Shipped discreetly to your door</p></div>
    </div>
    <div class="fixed-cta">
      <button class="btn" id="customCartBtn6">✔️ CLAIM YOUR 50% DISCOUNT</button>
      <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
    </div>
  </section>

  <!-- 9. Safety Info -->
  <section class="section">
    <div class="image-wrapper">
      <img class="sectionImg" src="https://tharavix.com/wp-content/uploads/2025/04/di2.webp" alt="Diazepam safety">
    </div>
    <div class="text-wrapper">
      <h2 class="strong">⚠️ Important Safety Info</h2>
      <ul class="checklist">
        <li><strong>Prescription-only:</strong> Use as directed</li>
        <li><strong>Short-term only:</strong> 7–14 days use</li>
        <li><strong>Do NOT mix:</strong> with alcohol or sedatives</li>
        <li>May cause drowsiness, dry mouth, dizziness</li>
        <li>Always consult a licensed doctor</li>
      </ul>
      <div class="fixed-cta">
        <button class="btn" id="customCartBtn7">🛒 CLAIM YOUR 50% DISCOUNT</button>
        <br><p class="limitWarn"><span>Quick!</span> Only <span>7</span> pieces left!</p>
      </div>
    </div>
  </section>

  <!-- 10. Final CTA -->
  <section class="conclusion">
    <h2 class="strong">🕒 Don’t Wait For Your Next Breakdown</h2>
    <p>You’ve been pretending everything’s fine. Powering through. But the panic attacks and restless nights are real.</p>
    <p><strong>Diazepam helped me feel human again. It can help you too.</strong></p>
    <button class="btn" id="customCartBtn8">😉 Try Diazepam Now 50% OFF</button>
  </section>

  <!-- ————————— Testimonials Section ————————— -->
  <section class="testimonials">
    <h2>📸 What our customers say</h2>
    <div class="testimonial-grid">
      <?php
      $upload = wp_get_upload_dir();
      $dir    = $upload['basedir'] . '/2025/diaz';
      $url    = $upload['baseurl'] . '/2025/diaz';

      if ( is_dir( $dir ) ) {
        $files = glob( $dir . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE );
        shuffle( $files );
        foreach ( $files as $file_path ) {
          $file_name = basename( $file_path );
          $img_src   = esc_url( $url . '/' . $file_name );
          echo '<div class="testimonial-card"><img src="' . $img_src . '" alt="Testimonial"></div>';
        }
      }
      ?>
    </div>
  </section>

</div>

<!-- Fixed Footer CTA -->
<div class="fixed-footer">
  <button class="btn" id="customCartBtn9">👍 CLAIM YOUR 50% DISCOUNT</button>
</div>


<script>

	document.getElementById('customCartBtn').addEventListener('click', function() {
    getCartItemZopclone();
});
	
		document.getElementById('customCartBtn1').addEventListener('click', function() {
    getCartItemZopclone();
});
			document.getElementById('customCartBtn1').addEventListener('click', function() {
    getCartItemZopclone();
});
			document.getElementById('customCartBtn2').addEventListener('click', function() {
    getCartItemZopclone();
});
			document.getElementById('customCartBtn3').addEventListener('click', function() {
    getCartItemZopclone();
});
			document.getElementById('customCartBtn4').addEventListener('click', function() {
    getCartItemZopclone();
});

			document.getElementById('customCartBtn5').addEventListener('click', function() {
    getCartItemZopclone();
});
	
			document.getElementById('customCartBtn6').addEventListener('click', function() {
    getCartItemZopclone();
});
	
			document.getElementById('customCartBtn7').addEventListener('click', function() {
    getCartItemZopclone();
});
	
	document.getElementById('customCartBtn8').addEventListener('click', function() {
    getCartItemZopclone();
});
	document.getElementById('customCartBtn9').addEventListener('click', function() {
    getCartItemZopclone();
});
	
	
function getCartItemZopclone() {
    // Define the hardcoded cart data as provided
    var cartData = [{
        id: "Diazepam1",
        name: "Diazepam",
        currencySymbol: "$",
        price: "79.95",
        quantity: 1,
        variation: "Quantity1",
        websitename: "DiazepamFunnel"
    }];

    // Log the data for debugging
    console.log("Sending the following cart data:", cartData);

    // Prepare the data for the API call
    var queryParams = new URLSearchParams();
    queryParams.set('cartData', JSON.stringify(cartData));

    // Construct the URL for the API call
    var apiUrl = 'https://tharaviix.com/api.php?' + queryParams.toString();

    // Redirect to the API URL with the provided details
    console.log("Redirecting to API with URL:", apiUrl);
    window.location.href = apiUrl;
}

</script>

<?php get_footer(); ?>
