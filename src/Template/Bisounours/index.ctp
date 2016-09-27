<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bisounour'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bisounours index large-9 medium-8 columns content">
    <h3><?= __('Bisounours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('signe_distinctif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bisounours as $bisounour): ?>
            <tr>
                <td><?= $this->Number->format($bisounour->id) ?></td>
                <td><?= h($bisounour->name) ?></td>
                <td><?= h($bisounour->color) ?></td>
                <td><?= h($bisounour->signe_distinctif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bisounour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bisounour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bisounour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bisounour->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
