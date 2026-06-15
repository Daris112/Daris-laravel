<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma House | Home</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; color: #201816; background: #fbf7f1; line-height: 1.6; }
        header { background: #1f2f2b; color: white; padding: 22px 8%; display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; }
        .logo { font-size: 25px; font-weight: 700; letter-spacing: 1px; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 600; }
        nav a:hover { color: #e7c46b; }
        .hero { min-height: 520px; padding: 80px 8%; display: grid; grid-template-columns: 1.1fr .9fr; gap: 44px; align-items: center; background: linear-gradient(120deg, #fbf7f1 0%, #fff 58%, #dfe9df 100%); }
        .hero h1 { font-size: clamp(42px, 6vw, 78px); line-height: 1; margin-bottom: 22px; color: #1f2f2b; }
        .hero p { max-width: 570px; font-size: 18px; color: #5b5049; margin-bottom: 28px; }
        .button { display: inline-block; background: #b77d45; color: white; padding: 14px 24px; border-radius: 6px; text-decoration: none; font-weight: 700; }
        .showcase { background: #243832; min-height: 380px; border-radius: 8px; padding: 34px; color: white; display: flex; flex-direction: column; justify-content: flex-end; box-shadow: 0 28px 55px rgba(31,47,43,.22); }
        .bottle { width: 150px; height: 240px; margin: 0 auto 28px; border: 3px solid #e7c46b; border-radius: 42px 42px 10px 10px; position: relative; background: linear-gradient(#fff8d9, #c58c4d); }
        .bottle:before { content: ""; position: absolute; top: -42px; left: 47px; width: 50px; height: 42px; background: #e7c46b; border-radius: 8px 8px 0 0; }
        .section { padding: 64px 8%; }
        .section h2 { font-size: 34px; color: #1f2f2b; margin-bottom: 26px; }
        .products { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .card { background: white; border: 1px solid #eee2d5; border-radius: 8px; padding: 26px; min-height: 220px; box-shadow: 0 14px 35px rgba(32,24,22,.08); }
        .card .tag { color: #b77d45; font-weight: 700; font-size: 14px; margin-bottom: 12px; }
        .card h3 { color: #1f2f2b; font-size: 24px; margin-bottom: 12px; }
        footer { padding: 28px 8%; background: #1f2f2b; color: #d9e1dc; text-align: center; }
        @media (max-width: 800px) {
            .hero { grid-template-columns: 1fr; padding-top: 56px; }
            nav a { margin-left: 12px; }
            .products { grid-template-columns: 1fr; }
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
        <section class="hero">
            <div>
                <h1>Fresh fragrances for everyday elegance.</h1>
                <p>Discover clean citrus, warm amber, soft florals, and bold evening scents made for a modern perfume shop.</p>
                <a class="button" href="{{ route('blog.contact') }}">Ask about a scent</a>
            </div>
            <div class="showcase">
                <div class="bottle"></div>
                <h2>Signature Collection</h2>
                <p>Balanced perfume blends with long lasting character.</p>
            </div>
        </section>

        <section class="section">
            <h2>Popular Picks</h2>
            <div class="products">
                <article class="card">
                    <div class="tag">Citrus</div>
                    <h3>Golden Zest</h3>
                    <p>Bright orange, bergamot, and soft white musk for a clean daytime scent.</p>
                </article>
                <article class="card">
                    <div class="tag">Floral</div>
                    <h3>Rose Veil</h3>
                    <p>A smooth rose fragrance with jasmine and a creamy sandalwood finish.</p>
                </article>
                <article class="card">
                    <div class="tag">Amber</div>
                    <h3>Midnight Resin</h3>
                    <p>Warm amber, vanilla, and cedar made for evenings and special occasions.</p>
                </article>
            </div>
        </section>
    </main>

    <footer>Aroma House fragrance shop</footer>
</body>
</html>
