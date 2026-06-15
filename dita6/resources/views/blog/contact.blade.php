<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma House | Contact</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; color: #211915; background: #fbf7f1; line-height: 1.6; }
        header { background: #1f2f2b; color: white; padding: 22px 8%; display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; }
        .logo { font-size: 25px; font-weight: 700; letter-spacing: 1px; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 600; }
        nav a:hover { color: #e7c46b; }
        .title { padding: 58px 8% 24px; }
        .title h1 { color: #1f2f2b; font-size: clamp(36px, 5vw, 58px); line-height: 1; margin-bottom: 16px; }
        .title p { max-width: 650px; color: #5b5049; font-size: 18px; }
        .contact-area { padding: 28px 8% 70px; display: grid; grid-template-columns: .9fr 1.1fr; gap: 28px; align-items: start; }
        .box { background: white; border: 1px solid #eee2d5; border-radius: 8px; padding: 28px; box-shadow: 0 14px 35px rgba(32,24,22,.08); }
        h2 { color: #1f2f2b; font-size: 28px; margin-bottom: 18px; }
        label { display: block; color: #3b302c; font-weight: 700; margin: 16px 0 7px; }
        input, select, textarea { width: 100%; border: 1px solid #d9cabc; border-radius: 6px; padding: 12px 13px; background: #fffdf9; color: #211915; }
        textarea { min-height: 110px; resize: vertical; }
        button { margin-top: 18px; width: 100%; border: 0; border-radius: 6px; background: #b77d45; color: white; padding: 14px 18px; font-weight: 700; cursor: pointer; }
        button:hover { background: #946438; }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; min-width: 620px; }
        th, td { text-align: left; padding: 13px; border-bottom: 1px solid #eee2d5; vertical-align: top; }
        th { background: #243832; color: white; }
        tbody tr:nth-child(even) { background: #fff8ef; }
        .empty { color: #756961; padding: 16px 0 0; }
        footer { padding: 28px 8%; background: #1f2f2b; color: #d9e1dc; text-align: center; }
        @media (max-width: 900px) {
            .contact-area { grid-template-columns: 1fr; }
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
        <section class="title">
            <h1>Contact the fragrance counter.</h1>
            <p>Fill in the form to add your message to the table. This is only front-end data and is not saved in a database.</p>
        </section>

        <section class="contact-area">
            <form class="box" id="contactForm">
                <h2>Send a Request</h2>
                <label for="name">Name</label>
                <input id="name" name="name" type="text" placeholder="Your name" required>

                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="you@example.com" required>

                <label for="scent">Favorite scent</label>
                <select id="scent" name="scent" required>
                    <option value="">Choose one</option>
                    <option>Golden Zest</option>
                    <option>Rose Veil</option>
                    <option>Midnight Resin</option>
                    <option>Something else</option>
                </select>

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Tell us what kind of perfume you like" required></textarea>

                <button type="submit">Add to table</button>
            </form>

            <div class="box">
                <h2>Added Values</h2>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Scent</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody id="requestTable"></tbody>
                    </table>
                </div>
                <p class="empty" id="emptyMessage">No values added yet.</p>
            </div>
        </section>
    </main>

    <footer>Aroma House fragrance shop</footer>

    <script>
        const form = document.getElementById('contactForm');
        const table = document.getElementById('requestTable');
        const emptyMessage = document.getElementById('emptyMessage');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const row = document.createElement('tr');
            const values = [
                form.name.value,
                form.email.value,
                form.scent.value,
                form.message.value
            ];

            values.forEach(function (value) {
                const cell = document.createElement('td');
                cell.textContent = value;
                row.appendChild(cell);
            });

            table.appendChild(row);
            emptyMessage.style.display = 'none';
            form.reset();
        });
    </script>
</body>
</html>
