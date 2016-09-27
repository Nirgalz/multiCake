<?php foreach ($bisounours as $bisounour) : ?>

    <ul>
        <li>
            <p>Bonjour, je m'appelle <?= $bisounour->name?>, j'arbore la couleur <?= $bisounour->color?> et j'ai <?= $bisounour->signe_distinctif?> sur le ventre.</p>
        </li>
    </ul>

<?php endforeach; ?>
