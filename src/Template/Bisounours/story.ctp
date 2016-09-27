<?php foreach ($bisounours as $bisounour) : ?>
<table>
    <tr>
        <td>
            <?= $this->Html->image($bisounour->image)?>
        </td>
        <td>
            <h3><?= __($bisounour->name) ?></h3>
        </td>
        <td>
            <p><?= __($bisounour->description)?>
        </td>
    </tr>
</table>
<?php endforeach; ?>
