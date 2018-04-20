<?php ob_start(); ?>
    <div class="main-form-section">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <div class="row">
                <div class="col">
                    <label>Pierwsza liczba <span>*</span></label>
                </div>
                <div class="col">
                    <input type="number" 
                           id="firstValue"
                           name="firstValue" 
                           min="<?php echo $minValue; ?>" 
                           max="<?php echo $maxValue; ?>" 
                           value="<?php echo $firstValue; ?>" 
                           required 
                           step="0.01">
                </div>
                <div class="important2">
                    <?php
                        if (!empty($firstValueText)) {
                            echo $firstValueText;
                        }
                    ?>
                </div>
            </div>
            <div class="after-box"></div>
            <div class="row">
                <div class="col">
                    <label>Druga liczba <span>*</span></label>
                </div>
                <div class="col">
                    <input type="number" 
                           id="secondValue" 
                           name="secondValue" 
                           min="<?php echo $minValue; ?>" 
                           max="<?php echo $maxValue; ?>" 
                           value="<?php echo $secondValue; ?>" 
                           required 
                           step="0.01">
                </div>
                <div class="important2">
                    <?php
                        if (!empty($secondValueText)) {
                            echo $secondValueText;
                        }
                    ?>
                </div>
            </div>
            
            <div class="after-box"></div>
            
            <div class="row">
                <div class="col2">
                    <button type="submit" class="btn">Dodaj (w PHP)</button>
                </div>
                <?php 
                    if (null !== $finalResultPLN) {
                ?>
                    <div class="col2">
                        <button type="button" class="btn" id="addValues">Dodaj (w JavaScript)</button>
                    </div>
                <?php
                    }
                ?>
            </div>

        </form>
    </div>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>

<?php include 'results.php'; ?>
