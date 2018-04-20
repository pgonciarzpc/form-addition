<?php ob_start(); ?>
    <div class="main-form-section">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <div class="row">
                <div class="col3">
                    <label>Piersza liczba <span>*</span></label>
                </div>
                <div class="col6">
                    <input type="number" name="firstValue" min="<?php echo $minValue; ?>" max="<?php echo $maxValue; ?>" 
                           value="0.00" required step="0.01">
                </div>
            </div>

            <div class="row">
                <div class="col3">
                    <label>Druga liczba <span>*</span></label>
                </div>
                <div class="col6">
                    <input type="number" name="secondValue" min="<?php echo $minValue; ?>" max="<?php echo $maxValue; ?>" 
                           value="0.00"  required step="0.01">
                </div>
            </div>

            <div class="row">
                <div class="col12">
                    <button type="submit">Dodaj (w PHP)</button>
                </div>
            </div>

        </form>
    </div>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>

<?php 
    if (!is_null($finalResultPLN)) {
?>
<br>
    <div class="main-form-section">
        <div class="results-section">
            <div class="php-section">
                <div class="col-3">
                    <?php
                        echo $firstValue;
                    ?>
                </div>
                <div class="col-3">
                    <?php
                        echo $secondValue;
                    ?>
                </div>
                <?php
                    echo $finalResultPLN;
                ?>
            </div>
            
            <div class="javascript-section">
                <?php
                    echo $firstValueReal;
                ?>
            </div>
        </div>

    </div>

<?php 
    }
?>
