<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma House | About</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; color: #211915; background: #fbf7f1; line-height: 1.6; }
        header { background: #1f2f2b; color: white; padding: 22px 8%; display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; }
        .logo { font-size: 25px; font-weight: 700; letter-spacing: 1px; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 600; }
        nav a:hover { color: #e7c46b; }
        .intro { padding: 74px 8%; background: linear-gradient(110deg, #243832, #48635a); color: white; }
        .intro h1 { font-size: clamp(38px, 5vw, 66px); line-height: 1; max-width: 820px; margin-bottom: 22px; }
        .intro p { max-width: 720px; color: #e6eee9; font-size: 18px; }
        .section { padding: 64px 8%; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; align-items: start; }
        .panel { background: white; border: 1px solid #eee2d5; border-radius: 8px; padding: 32px; box-shadow: 0 14px 35px rgba(32,24,22,.08); }
        h2 { color: #1f2f2b; font-size: 32px; margin-bottom: 16px; }
        .notes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 34px; }
        .note { background: #efe6d9; border-radius: 8px; padding: 24px; border-left: 5px solid #b77d45; }
        .note strong { display: block; color: #1f2f2b; margin-bottom: 8px; }
        .shelf { height: 360px; border-radius: 8px; background: linear-gradient(180deg, #fff 0 42%, #cfa46d 42% 48%, #243832 48%); position: relative; overflow: hidden; }
        .shelf span { position: absolute; bottom: 88px; width: 58px; border-radius: 22px 22px 6px 6px; background: linear-gradient(#fff9df, #c58c4d); border: 2px solid #e7c46b; }
        .shelf span:nth-child(1) { left: 18%; height: 150px; }
        .shelf span:nth-child(2) { left: 42%; height: 205px; background: linear-gradient(#ecfff4, #77a891); }
        .shelf span:nth-child(3) { left: 66%; height: 170px; background: linear-gradient(#fff0f0, #c27986); }
        footer { padding: 28px 8%; background: #1f2f2b; color: #d9e1dc; text-align: center; }
        @media (max-width: 800px) {
            .grid, .notes { grid-template-columns: 1fr; }
            nav a { margin-left: 12px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Aroma House</div>
        <nav>
            <a href="{{ route('blog.home') }}">Home</a>
            <a href="{{ route('blog.about') }}">About</a>
            <a href="{{ route('blog.contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h1>Small perfume shop, carefully chosen scents.</h1>
            <p>We focus on approachable fragrances that feel premium without becoming complicated. Every scent family has a clear mood, from fresh mornings to warm evenings.</p>
        </section>

        <section class="section">
            <div class="grid">
                <div class="panel">
                    <h2>Our Story</h2>
                    <p>Aroma House was designed as a simple front-end perfume shop concept. It presents collections, scent notes, and customer contact in a clean boutique style.</p>
                    <p>Our design uses warm product colors, deep green contrast, and simple spacing so the fragrances stay at the center of the page.</p>
                </div>
                <div class="shelf" aria-label="Perfume bottles on a shelf">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="notes">
                <div class="note">
                    <strong>Fresh Notes</strong>
                    <p>Bergamot, lemon, mint, and light musk.</p>
                </div>
                <div class="note">
                    <strong>Soft Notes</strong>
                    <p>Rose, jasmine, powder, and sandalwood.</p>
                </div>
                <div class="note">
                    <strong>Warm Notes</strong>
                    <p>Amber, vanilla, cedar, and tonka bean.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>Aroma House fragrance shop</footer>
</body>
</html>
