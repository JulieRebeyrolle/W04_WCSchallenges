<form action="thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname">
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="mail">Email :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phoneNumber">Téléphone</label>
        <input type="tel" id="phoneNumber" name="user_phoneNumber">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="subject">
            <option value="La Quete du graal">La Quete du graal</option>
            <option value="Le portail dimensionnel dans la cour">Le portail dimensionnel dans la cour</option>
            <option value="Les règles du sloubi à l'aquitaine">Les règles du sloubi à l'aquitaine</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>