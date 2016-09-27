<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bisounour->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bisounour->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bisounours'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bisounours form large-9 medium-8 columns content">
    <?= $this->Form->create($bisounour) ?>
    <fieldset>
        <legend><?= __('Edit Bisounour') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
