<div class="reservation-info">
    <form method="post" class="reservation-form">
        <h2>Make a reservation</h2>
        <div class="field">
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div class="field">
            <input type="datetime-local" name="date" placeholder="Date" step="300" required>
        </div>
        <div class="field">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="field">
            <input type="tel" name="phone" placeholder="Phone Number" required>
        </div>

        <div class="field">
            <textarea name="message" placeholder="Message" required></textarea>
        </div>
        <input class="button" name="reservation" type="submit" value="Send">
        <input type="hidden" name="hidden" value="1">
    </form>
</div>