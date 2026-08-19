<?php include ('include/header.php') ?>
<meta name="robots" content="noindex, nofollow">
<style>
    .landing-thanks-section {
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 80px 20px;
        text-align: center;
        background: #f7f7f5;
    }

    .landing-thanks-card {
        max-width: 520px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 18px 50px rgba(0, 0, 0, .12);
        padding: 50px 36px;
    }

    .landing-thanks-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 22px;
        border-radius: 50%;
        background: #ec7f47;
        color: #fff;
        display: grid;
        place-items: center;
        font-size: 30px;
        font-weight: 700;
    }

    .landing-thanks-card h1 {
        font-size: 26px;
        font-weight: 800;
        margin-bottom: 12px;
        color: #181B20;
    }

    .landing-thanks-card p {
        font-size: 15px;
        color: #6E7681;
        margin-bottom: 28px;
    }

    .landing-thanks-btn {
        display: inline-block;
        background: #ec7f47;
        color: #fff;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: .02em;
        padding: 12px 28px;
        border-radius: 4px;
        text-decoration: none;
        text-transform: uppercase;
        transition: background .2s;
    }

    .landing-thanks-btn:hover {
        background: #8E161D;
        color: #fff;
    }
</style>

<section class="landing-thanks-section">
    <div class="landing-thanks-card">
        <div class="landing-thanks-icon">&#10003;</div>
        <h1>Your Message has been sent</h1>
        <p>Thank you for reaching out. Our team will get back to you shortly.</p>
        <a class="landing-thanks-btn" href="index.php">Back to Home</a>
    </div>
</section>

<?php include ('include/footer.php') ?>