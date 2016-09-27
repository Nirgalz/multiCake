<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bisounour'), ['action' => 'edit', $bisounour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bisounour'), ['action' => 'delete', $bisounour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bisounour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bisounours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bisounour'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bisounours view large-9 medium-8 columns content">
    <h3><?= h($bisounour->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bisounour->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($bisounour->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Signe Distinctif') ?></th>
            <td><?= h($bisounour->signe_distinctif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bisounour->id) ?></td>
        </tr>
    </table>
</div>
