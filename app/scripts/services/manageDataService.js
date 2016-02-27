"use strict";
app.service('manageData', function($http, $q){
    var deferred = $q.defer();
    $http.get('app/data/help-data.json').then(function(data) {
        deferred.resolve(data);
    });
    this.getHelpData = function(){
        return deferred.promise;
    };
});