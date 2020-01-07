<div class="col-12 col-sm-6 col-lg-7">
    <div class="card card-primary card-tabs">
        <div class="nav-tabs-custom card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <?php $i = 1;
                foreach ($this->groups as $group_id => $group_item): ?>
                    <li class="nav-item" <?php if ($i == 1) echo ' class="active"' ?>><a href="#tab_<?= $group_id ?>"
                                                                                         data-toggle="tab"
                                                                                         aria-expanded="true"
                                                                                         class="nav-link"
                                                                                         id="custom-tabs-one-home-tab"
                                                                                         aria-expanded="true" role="tab"
                                                                                         aria-controls="custom-tabs-one-home"
                                                                                         aria-selected="false"><?= $group_item ?></a>
                    </li>
                    <?php $i++; endforeach; ?>
                <li class="pull-right"><a href="#" id="reset-filter" class="btn btn-danger btn-sm">Сброс</i></a></li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <?php if (!empty($this->attrs[$group_id])): ?>
                    <?php $i = 1;
                    foreach ($this->groups as $group_id => $group_item): ?>
                        <div class="tab-pane fade<?php if ($i == 1) echo ' active' ?>" id="tab_<?= $group_id ?>">
                            <?php foreach ($this->attrs[$group_id] as $attr_id => $value): ?>
                                <?php
                                if (!empty($this->filter) && in_array($attr_id, $this->filter)) {
                                    $checked = ' checked';
                                } else {
                                    $checked = null;
                                }
                                ?>
                                <div class="form-group">
                                    <label>
                                        <input class="filter" type="radio" name="attrs[<?= $group_id ?>]" value="<?= $attr_id ?>"
                                               <?= $checked ?>> <?= $value ?>
                                    </label>
                                </div>
                                <?php $i++; endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


