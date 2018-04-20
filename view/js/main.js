/* 
    Author     : Paweł Gonciarz
*/

$(document).ready(function() {
    $("#errorDiv").hide();
    
    $("#addValues").on('click', function() {
        var firstValue = Number($("#firstValue").val());
        var secondValue = Number($("#secondValue").val());
        var textToInsert = '';
        var resultPLN = 0;      // Last result
        
        $("#errorDiv").hide();
        
        // Check if values are not a numbers
        if (isNaN(firstValue) || isNaN(secondValue)) {
            if (isNaN(firstValue)) {
                textToInsert += 'Błędna wartość w pierwszym polu ';
            }
            if (isNaN(secondValue)) {
                textToInsert += 'Błędna wartość w drugim polu ';
            }
            $("#errorDiv").text(textToInsert);
            $("#errorDiv").show('fast');
            return;
        }
        
        var tempFirstValue = Math.round(firstValue * 100) / 100 ;
        var tempSecondValue = Math.round(secondValue * 100) / 100;
        
        // Check if they have more precision than 2 
        if (tempFirstValue !== firstValue || tempSecondValue !== secondValue) {
            if (tempFirstValue !== firstValue) {
                textToInsert += 'W pierwszym polu wartość poniżej precyzji ';
            }
            if (tempSecondValue !== secondValue) {
                textToInsert += 'W drugim polu wartość poniżej precyzji ';
            }
            $("#errorDiv").text(textToInsert);
            $("#errorDiv").show('fast');
            return;
        }
        
        // Count of final result
        resultPLN = tempFirstValue + secondValue;
        
        // And show in proper places
        $('#resultInPLN').text(new Intl.NumberFormat('pl-PL', {style: 'decimal', minimumFractionDigits: 2}).format(resultPLN));
        $('#resultInPOUNDS').text(new Intl.NumberFormat('en-US', {style: 'decimal', minimumFractionDigits: 2}).format(resultPLN));
        
    });
    
    
    
});
