<?php 
    if (null !== $finalResultPLN) {
?>
    <div class="gap">
        &nbsp;
    </div>

    <div class="main-form-section">
        <div class="results-section">
            <div class="php-section">
                <div class="row">
                    <div class="col2">
                        <div class="subheader0">Wyniki z PHP</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <div class="subheader">Wyniki w PLN</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <div class="important">
                            <?php
                                echo number_format($finalResultPLN, 2, ',', ' ');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <div class="subheader">Wyniki w &pound;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <div class="important">
                            <?php
                                echo number_format($finalResultPLN, 2, '.', ',');
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="javascript-section">
                <div class="row">
                    <div class="col2">
                        <div class="subheader0">Wyniki z JS</div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col2">
                        <div class="subheader">Wyniki w PLN</div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col2">
                        <div class="important" id="resultInPLN">
                            <?php
                                echo number_format($finalResultPLN, 2, ',', ' ');
                            ?>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col2">
                        <div class="subheader">Wyniki w &pound;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col2">
                        <div class="important" id="resultInPOUNDS">
                            <?php
                                echo number_format($finalResultPLN, 2, '.', ',');
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-error" id="errorDiv" style="display: none;"></div>
                </div>
                
            </div>
        </div>

    </div>

<?php 
    }
?>

