<li class="dropdown "><select name="" id="currency">


        <option value="<?= $this->currency['code']; ?>">CURRENCY: <?= $this->currency['code']; ?></option>
            <?php foreach ($this->currencies as $k => $v): ?>
            <?php if ($k != $this->currency['code']): ?>
            <option value="<?= $k; ?>">CURRENCY: <?= $k; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>

</li>
