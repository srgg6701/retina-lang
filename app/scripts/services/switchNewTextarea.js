"use strict";

app.service('switchNewTextarea', function($timeout){
    var dur=300;
    // add textarea
    this.addTextarea = function(scope){
        scope.txtBodies.push(scope.txtBodies.length+1);
        $timeout(function(){
            scope.txtFadedIn=scope.txtBodies.length;
        },0);
        return scope;
    };
    // remove textarea
    this.removeTextarea = function(scope){
        scope.txtFadedIn--;
        var txtArea = angular.element('[name="text'+scope.txtBodies.length+'"]');
        txtArea.fadeOut(dur, function(){
            txtArea.remove();
        });
        $timeout(function(){
            scope.txtBodies.length--;
        },dur);
        return scope;
    }
});